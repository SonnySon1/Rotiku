{{--  head  --}}
@include('layouts.head')

<body>
    <div class="wrapper">
        @include('layouts.sidebar')

        <div class="main">

            {{--  navbar  --}}
            @include('layouts.navbar')
            {{--  endnavbar  --}}
            <main class="content">
                <div class="container-fluid p-0">
                    <div class="mb-3">
                        <h1 class="h3 d-inline align-middle">Edit </h1>
                        <p class="badge bg-primary ms-2" target="_blank"> rotiku <i
                                class="fas fa-fw fa-external-link-alt"></i></p>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h5 class="card-title">Edit </h5>
                                    <h6 class="card-subtitle text-muted">Isi form berikut untuk mengedit jumlah stok roti
                                        toko kamu</h6>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="">
                                            <div class="mb-3">
                                                {{-- {{ route('admin.stok.update', $roti->id_roti) }} --}}
                                                <form action=""
                                                    method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')

                                                    {{-- src="{{ asset('gallery/' . $roti->gambar) }}" --}}
                                                    {{-- alt="{{ $roti->roti }}" --}}
                                                    {{-- value="{{ $roti->gambar }}" --}}
                                                    <img id="preview" src=""
                                                        alt="" style="max-width: 200px; max-height:200px;">
                                                    <input type="file" name="gambar" style="margin-top: 20px" value="" onchange="previewImage(event)" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="notyf-message">Title</label>
                                                {{-- {{ $roti->roti }} --}}
                                                <input id="notyf-message" name="title" type="text"
                                                    class="form-control" placeholder="title"
                                                    value="">
                                            </div>
                                            <div class="mb-3">

                                                {{-- {{ $roti->description }} --}}
                                                <label class="form-labeal" for="description">Description</label>
                                                <input id="description" name="description" type="text" class="form-control"
                                                    placeholder="description" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <button class="btn btn-primary me-1" type="submit">Edit Stok</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            </main>
            @include('layouts.footer')

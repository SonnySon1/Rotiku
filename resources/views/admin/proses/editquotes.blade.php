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
                        <h1 class="h3 d-inline align-middle">Edit Quotes</h1>
                        <p class="badge bg-primary ms-2" target="_blank"> rotiku <i
                                class="fas fa-fw fa-external-link-alt"></i></p>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h5 class="card-title">Edit Quotes</h5>
                                    <h6 class="card-subtitle text-muted">Isi form berikut untuk edit quotes
                                        toko kamu</h6>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="">
                                            <div class="mb-3">
                                                {{-- {{ route('admin.dataquotes.update', $quotes->id_quotes) }} --}}
                                                <form action=""
                                                    method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')

                                                    {{-- {{ asset('gallery/' . $quotes->gambar) }} --}}
                                                    <img id="preview" src=""
                                                        {{-- alt="{{ $quotes->quotes }} --}}
                                                        alt="" style="max-width: 200px; max-height:200px">
                                                        {{-- value="{{ $quotes->gambar }}" --}}
                                                    <input type="file" name="gambar" style="margin-top: 20px;" value="" onchange="previewImage(event)" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="notyf-message">Title</label>
                                                <input id="notyf-message" name="titleQuotes" type="text"
                                                    class="form-control" placeholder="title"

                                                    {{-- {{ $quotes->title }} --}}
                                                    value="">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-labeal" for="harga">Quotes</label>
                                                <input id="harga" name="harga" type="text" class="form-control"
                                                        {{-- {{ $quotes->quotes }} --}}
                                                    placeholder="quotes" value="">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-labeal" for="harga">Text By</label>
                                                <input id="harga" name="harga" type="text" class="form-control"
                                                        {{-- {{ $quotes->textby }} --}}
                                                    placeholder="quotes" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <button class="btn btn-primary me-1" type="submit">Edit Quotes</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            </main>
            @include('layouts.footer')

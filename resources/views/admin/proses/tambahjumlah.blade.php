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
                        <h1 class="h3 d-inline align-middle">Tambah Jumlah</h1>
                        <p class="badge bg-primary ms-2" target="_blank"> rotiku <i
                                class="fas fa-fw fa-external-link-alt"></i></p>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h5 class="card-title">Tambah Jumlah</h5>
                                    <h6 class="card-subtitle text-muted">Isi form berikut untuk menambahkan Jumlah
                                        toko kamu</h6>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="">
                                            <div class="mb-3">
                                                <form action="{{ route('admin.dataroti.store') }}" method="post"
                                                    enctype="multipart/form-data" id="FormData">
                                                    @csrf
                                                    <img id="preview" src="{{ asset('jk-placeholder-image.jpg') }}"
                                                        alt="Gambar Roti" style="max-width: 200px; max-height:200px; margin-top: 10px;">
                                                    <input type="file" id="gambar" name="gambar" onchange="previewImage(event)" class="form-control mt-2">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="titleJumlah">Title</label>
                                                <input id="titleJumlah" name="titleJumlah" type="text" class="form-control"
                                                    placeholder="title">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="descriptionJumlah">Description</label>
                                                <input id="descriptionJumlah" name="descriptionJumlah" type="text" class="form-control"
                                                    placeholder="tujuan">
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <button class="btn btn-primary me-1" type="submit" id="tambah">Tambahkan Jumlah</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            </main>
            @include('layouts.footer')

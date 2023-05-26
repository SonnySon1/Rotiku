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
                        <h1 class="h3 d-inline align-middle">Tambah Kategori Roti</h1>
                        <p class="badge bg-primary ms-2" target="_blank"> rotiku <i
                                class="fas fa-fw fa-external-link-alt"></i></p>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h5 class="card-title">Tambah Kategori Roti</h5>
                                    <h6 class="card-subtitle text-muted">Isi form berikut untuk menambahkan kategori
                                        roti toko kamu</h6>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="">
                                            <div class="mb-3">
                                                <form action="{{ route('admin.kategori.store') }}" method="POST">
                                                    @csrf
                                                    <label class="form-label" for="kategori">Kategori Roti</label>
                                                    <input id="kategori" name="kategori" type="text"
                                                        class="form-control" placeholder="kategori roti">
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <button class="btn btn-primary me-1" type="submit">Tambahkan kategori</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            </main>
            @include('layouts.footer')

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
                                    <h5 class="card-title">Tambah Help And Suport</h5>
                                    <h6 class="card-subtitle text-muted">Isi form berikut untuk menambahkan Help And Suport toko kamu</h6>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="">
                                            {{-- {{ route('admin.kategori.store') }} --}}
                                            <form action="" method="POST">
                                            @csrf
                                            <div class="mb-3">
                                                    <label class="form-label" for="title">Title</label>
                                                    <input id="title" name="title" type="text"
                                                        class="form-control" placeholder="title">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="subtitle">Sub Title</label>
                                                <input id="subtitle" name="subtitle" type="text"
                                                    class="form-control" placeholder="sub title">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="description">Description</label>
                                                <input id="description" name="description" type="text"
                                                    class="form-control" placeholder="title help and suport">
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <button class="btn btn-primary me-1" type="submit">Tambahkan Help And Suport</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            </main>
            @include('layouts.footer')

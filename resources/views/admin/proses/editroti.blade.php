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
                        <h1 class="h3 d-inline align-middle">Edit Stok Roti</h1>
                        <p class="badge bg-primary ms-2" target="_blank"> rotiku <i
                                class="fas fa-fw fa-external-link-alt"></i></p>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h5 class="card-title">Edit Stok Roti</h5>
                                    <h6 class="card-subtitle text-muted">Isi form berikut untuk menambahkan stok roti
                                        toko kamu</h6>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="">
                                            <div class="mb-3">
                                                <form action="{{ route('admin.dataroti.update', $roti->id_roti) }}"
                                                    method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <img id="preview" src="{{ asset('gallery/' . $roti->gambar) }}"
                                                        alt="{{ $roti->roti }}" style="max-width: 200px; max-height:200px;">
                                                    <input type="file" name="gambar" style="margin-top: 20px" value="{{ $roti->gambar }}" onchange="previewImage(event)" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="roti">Nama Roti</label>
                                                <input id="roti" name="roti" type="text"
                                                    class="form-control" placeholder="nama roti"
                                                    value="{{ $roti->roti }}">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="description">Description</label>
                                                <input id="description" name="description" type="text"
                                                    class="form-control" placeholder="description"
                                                    value="{{ $roti->description }}">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="id_kategori">Kategori</label>
                                                <select class="form-select" id="id_kategori" name="id_kategori">
                                                    @foreach ($kategori as $d)
                                                        <option value="{{ $d->id_kategori }}"
                                                            {{ $roti->id_kategori == $d->id_kategori ? 'selected' : '' }}>
                                                            {{ $d->kategori }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-labeal" for="harga">Harga</label>
                                                <input id="harga" name="harga" type="number" class="form-control"
                                                    placeholder="harga" value="{{ $roti->harga }}">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-labeal" for="stok">Stok</label>
                                                <input id="stok" name="stok" type="number" class="form-control"
                                                    placeholder="Stok" value="{{ $roti->stok }}">
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

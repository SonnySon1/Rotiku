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
                        <h1 class="h3 d-inline align-middle">Edit Promosi</h1>
                        <p class="badge bg-primary ms-2" target="_blank"> rotiku <i
                                class="fas fa-fw fa-external-link-alt"></i></p>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h5 class="card-title">Edit Promosi</h5>
                                    <h6 class="card-subtitle text-muted">Isi form berikut untuk mengedit Promosi toko kamu</h6>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="">
                                            <div class="mb-3">
                                                <form action="{{ route('admin.promosi.update', $promosi->id_promosi) }}"
                                                    method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <img id="preview" src="{{ asset('gallery/' . $promosi->foto) }}"
                                                        alt="Foto" style="max-width: 200px; max-height:200px;">
                                                    <input type="file" name="foto" style="margin-top: 20px" value="{{ $promosi->foto }}" onchange="previewImage(event)" class="form-control">
                                            </div>
                                            <div class="mb-3">
												<label class="form-label" for="title">Title </label>
												<input id="title" name="title" type="text" class="form-control" value="{{ $promosi->title }}">
											</div>
                                            <div class="mb-3">
												<label class="form-label" for="subtitle">Subtitle </label>
												<input id="subtitle" name="subtitle" type="text" class="form-control" value="{{ $promosi->subtitle }}">
											</div>
                                            <div class="mb-3">
												<label class="form-label" for="description">Description </label>
												<input id="description" name="description" type="text" class="form-control" value="{{ $promosi->description }}">
											</div>
                                        </div>
                                    </div>
                                    <hr>
                                    <button class="btn btn-primary me-1" type="submit">Edit Promosi</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            </main>
            @include('layouts.footer')

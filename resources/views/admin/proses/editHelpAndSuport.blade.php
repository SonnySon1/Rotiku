
{{--  head  --}}
@include('layouts.head')

<body>
	<div class="wrapper">
		@include('layouts.sidebar')

		<div class="main">

            {{--  navbar  --}}
                @include("layouts.navbar")
            {{--  endnavbar  --}}
			<main class="content">
				<div class="container-fluid p-0">
					<div class="mb-3">
						<h1 class="h3 d-inline align-middle">Edit Kategori Roti</h1><p class="badge bg-primary ms-2"
							target="_blank"> rotiku <i class="fas fa-fw fa-external-link-alt"></i></p>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card mb-4">
								<div class="card-header">
									<h5 class="card-title">Edit Help And Suport</h5>
									<h6 class="card-subtitle text-muted">Edit data berikut untuk mengedit kategori roti toko kamu</h6>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="">
                                            <form action="{{ route('admin.kategori.update', $kategori->id_kategori) }}" method="post">
                                                @csrf
                                                @method('PUT')
                                            <div class="mb-3">
												<label class="form-label" for="title">Title</label>
                                                {{-- value="{{ $help->title }}" --}}
												<input id="title" name="title" type="text" class="form-control">
											</div>
                                            <div class="mb-3">
												<label class="form-label" for="subtitle">Sub Title</label>
                                                {{-- value="{{ $help->subtitle }}" --}}
												<input id="subtitle" name="subtitle" type="text" class="form-control" >
											</div>
                                            <div class="mb-3">
												<label class="form-label" for="kategori">Title Help And Suport</label>
                                                {{-- value="{{ $help->titlehelpandsuport }}" --}}
												<input id="kategori" name="kategori" type="text" class="form-control">
											</div>
                                            <div class="mb-3">
												<label class="form-label" for="kategori">Description Help And Suport</label>
                                                {{-- value="{{ $help->description }}" --}}
												<input id="kategori" name="kategori" type="text" class="form-control">
											</div>
										</div>
									</div>
									<hr>
									<button class="btn btn-primary me-1" type="submit">Edit kategori</button>
                                    </form>
                                </div>
							</div>
						</div>
					</div>
			</main>
	@include('layouts.footer')

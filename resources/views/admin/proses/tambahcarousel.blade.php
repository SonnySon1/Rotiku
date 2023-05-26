
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
						<h1 class="h3 d-inline align-middle">Tambah Carousel Roti</h1><p class="badge bg-primary ms-2"
							target="_blank"> rotiku <i class="fas fa-fw fa-external-link-alt"></i></p>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card mb-4">
								<div class="card-header">
									<h5 class="card-title">Tambah Carousel Roti</h5>
									<h6 class="card-subtitle text-muted">Isi form tambah data berikut untuk menambah carousel toko kamu</h6>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="">
                                            <form action="{{ route('admin.carousel.store') }}" method="post" novalidate>
                                            <div class="mb-3">
                                                    @csrf
												<label class="form-label" for="title">Title</label>
												<input id="title" name="title" type="text" class="form-control">
											</div>
                                            <div class="mb-3">
												<label class="form-label" for="description">Description </label>
												<input id="description" name="description" type="text" class="form-control">
											</div>
                                            
										</div>
									</div>
									<hr>
									<button class="btn btn-primary me-1" type="submit">Tambahkan Carousel</button>
                                    </form>
                                </div>
							</div>
						</div>
					</div>
			</main>
	@include('layouts.footer')

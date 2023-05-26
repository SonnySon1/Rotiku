{{-- head --}}
@include('layoutsFrontend.head')
<body>
   {{-- main --}}
	<div class="mian-content">
		<!-- header -->
		<header>
			{{-- navbar --}}
                @include('layoutsFrontend.navbar')
            {{-- /navbar --}}
        </header>
		<!-- //header -->

		<!-- banner -->
		<!-- main image slider container -->
            @include('layoutsFrontend.pagesHome.hiro')
		<!-- end of main image slider container -->



		<!-- //banner -->

		<!-- banner bottom icons -->
				{{-- @include('layoutsFrontend.pagesHome.bannerbottomicon') --}}
		<!-- //banner bottom icons -->
	</div>
    {{-- //main --}}
	<div class="text-center mt-5">
		<h1><strong>Rekomendasi Roti Kami</strong></h1>
		<hr>
		<h6>Kami mempunyai beberapa rekomendasi roti untuk anda</h6>
	</div>
    {{-- banner-bottom1 --}}
    @include('layoutsFrontend.pagesHome.bannerbottom')
    {{-- //banner-bottom1 --}}

	{{-- banner-bottom2 --}}
	@include('layoutsFrontend.pagesHome.bannerbottom2')
	{{-- //banner-bottom2 --}}

	{{-- banner-bottom3 --}}
	@include('layoutsFrontend.pagesHome.bannerbottom3')
	{{-- //banner-bottom3 --}}

	{{-- footer --}}
    @include('layoutsFrontend.footer')
	{{-- /footer --}}

@include('layoutsFrontend.head')

<body>
	<div class="mian-content">
		<!-- header -->
		<header>
            {{-- navbar --}}
			@include('layoutsFrontend.navbar')
            {{-- //navar --}}
		</header>
		<!-- //header -->

		<!-- banner 2 -->
		@include('layoutsFrontend.pagesAbout.banner')
		
		<!-- //banner 2 -->
	</div>
	<!-- main -->

	<!-- page details -->
    @include('layoutsFrontend.pagesAbout.pagedetails')
	<!-- //page details -->

	<!-- about page -->

	<!-- about bottom -->
    @include('layoutsFrontend.pagesAbout.aboutbottom')
	<!-- //about bottom -->

	<!-- team -->
	@include('layoutsFrontend.pagesAbout.team')
	<!-- team -->

	<!-- footer -->
	@include('layoutsFrontend.footer')

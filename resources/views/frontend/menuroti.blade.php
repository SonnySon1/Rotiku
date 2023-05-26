@include('layoutsFrontend.head')

<body>
    {{-- //main --}}
    <main class="mian-content">

        <head class="main-nav">
            @include('layoutsFrontend.pagesMenuRoti.navbarmenu')
        </head>
        <div class="container">
            <div class="content">

                {{-- carousel --}}
                @include('layoutsFrontend.pagesMenuRoti.carousel')
                {{-- //carousel --}}

                {{-- categori pilihan --}}
                @include('layoutsFrontend.pagesMenuRoti.categori')
                {{-- //categori pilihan --}}

                <div class="secc"></div>

                {{-- product --}}
                    @include('layoutsFrontend.pagesMenuRoti.cardmenu')
                {{-- //product --}}

            </div>
        </div>
    </main>
    <!-- //main -->













    <!-- card -->
    {{-- @include('layoutsFrontend.pagesMenuRoti.card') --}}
    <!-- //card -->

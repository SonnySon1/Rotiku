<nav class="navbar navbar-expand-lg navbar-light">
    <div class="logo text-left">
        <h1>
            <a class="navbar-brand" href="index.html">
                <img src="{{ asset('assetsFrontend/images/logo.png')}}" alt="" class="img-fluid">Rotiku</a>
        </h1>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon">

        </span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-lg-auto text-lg-right text-center">
            <li class="nav-item {{ request()->routeIs('user.dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('user.dashboard') }}">Home
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item {{ request()->routeIs('user.about') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('user.about') }}">About Us</a>
            </li>
            <li class="nav-item {{ request()->routeIs('menu') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('menu') }}">Menu Roti</a>
            </li>
            {{-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Dropdown
                </a>
                <div class="dropdown-menu text-lg-left text-center" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item scroll" href="#services">Services</a>
                    <a class="dropdown-item scroll" href="#products" title="">New Products</a>
                    <a class="dropdown-item scroll" href="#news" title="">Company News</a>
                    <a class="dropdown-item" href="about.html" title="">Team</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="gallery.html">Gallery</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact Us</a>
            </li> --}}
        </ul>
        <!-- menu button -->
        {{-- <div class="menu">
            <a href="#" class="navicon"></a>
            <div class="toggle">
                <ul class="toggle-menu list-unstyled">
                    <li>
                        <a href="index.html">Index Page</a>
                    </li>
                    <li>
                        <a class="scroll" href="#products">New Products</a>
                    </li>
                    <li>
                        <a href="gallery.html">Latest Cakes</a>
                    </li>
                    <li>
                        <a class="scroll" href="#order">Order Cake</a>
                    </li>
                    <li>
                        <a class="scroll" href="#faqs">Faqs</a>
                    </li>
                    <li>
                        <a href="contact.html">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div> --}}
        <!-- //menu button -->
    </div>
</nav>

<div class="line-top">
    <div class="line-list">
        <a href="{{Route('user.dashboard')}}" class="line-text">Home</a>
        <a href="{{Route('user.about')}}" class="line-text">Tentang Rotiku</a>
        <a href="#" class="line-text">Hubungi Kami</a>
        <a href="#" class="line-text">Berbagai Penawaran</a>
    </div>
</div>
<nav class="nav-bar">
    <div class="nav-content">
        <div class="image-logo">
            <img class="image-in" src="{{ asset('assetsFrontend/images/logo/logo.png') }}" width="200" alt="">
        </div>
        <div class="search">
            <div>
                <form action="" method="post">
                    <div class="icon-src"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                            height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg></div>
                    <input type="search" name="src" id="" class="src-input">
                    <svg class="shopping_cart" style="position: absolute; margin-top:25px; margin-left:30px;" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="144">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24">
                        <defs>
                            <path
                                d="M20.47 5a1.5 1.5 0 0 1 1.48 1.9l-1.83 6.52A3.58 3.58 0 0 1 16.66 16H8.93c-.94 0-1.76-.63-1.99-1.52L4.26 4H3.02C2.46 4 2 3.55 2 3s.46-1 1.02-1H5.1c.47 0 .88.31.99.76L6.65 5h13.82zM9 17.5a2 2 0 1 1 0 4 2 2 0 0 1 0-4zm8 0a2 2 0 1 1 0 4 2 2 0 0 1 0-4z"
                                id="a" />
                        </defs>
                        <g fill="none" fill-rule="evenodd">
                            <path d="M0 0h24v24H0z" />
                            <mask id="b" fill="#fff">
                                <use xlink:href="#a" />
                            </mask>
                            <use fill="#9FA6B0" xlink:href="#a" />
                            <g mask="url(#b)" fill="#6C727C" fill-rule="nonzero">
                                <path d="M1 1h22v22H1z" />
                            </g>
                        </g>
                     </svg>
                    </svg>
                    
                    <a href="{{ route('logout.google') }}" type="submit" class="button-masuk">Logout</a>
                    <a href="#" type="submit" class="button-daftar">Daftar</a>
                </form>
            </div>
            <div class="category-row">
                <div class="category-list">
                    <a href="#" class="category-text">Roti Kering</a>
                    <a href="#" class="category-text">Roti Kering</a>
                    <a href="#" class="category-text">Roti Tawar</a>
                    <a href="#" class="category-text">Rori Manis</a>
                    <a href="#" class="category-text">Roti Coklat</a>
                    <a href="#" class="category-text">Roti Susu</a>
                </div>
            </div>
        </div>
    </div>
</nav>
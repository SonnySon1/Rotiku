@include('layouts.head')
<div class="container-login">
    <div class="logo">
        {{-- <img class="image-logo" class="image-in" src="{{ asset('assetsFrontend/images/logo/logo.png') }}" width="200" alt=""> --}}
    </div>
    <div class="content-container">
        <div class="wr-login">
            <div class="text-masuk-dan-daftar">
                <h3 class="text-masuk">Masuk</h1>
                <p class="text-daftar">Daftar</p>
            </div>
            <div class="form-login">
                <form action="{{ route('login.post') }}" method="post" novalidate>
                    @csrf
                    <div class="mb-3">
                        <label class="form-label email">Email</label>
                        <input class="input-form form-email" type="email" id="email" name="email"/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label password">Password</label>
                        <input class="input-form form-password" type="password" id="password" name="password"/>
                    </div>
                    <div >
                        <button type="submit" class="btn-lg login-btn"><strong>Login</strong></button>
                    </div>
                    <hr class="line">
                    <label class="atau-masik-dengan">atau masuk dengan</label>
                    <div >
                        <img src="{{asset('assets/img/login/withgoogle.png')}}" class=" image-google" height="40px" width="50px" alt="">
                        <a href="{{ route('login.google') }}" class=" btn btn-lg login-google"><strong>Google</strong></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


{{-- @include('layouts.head')
<body>
    <main class="d-flex w-100">
        <div class="container d-flex flex-column">
            <div class="row vh-100">
                <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">

                        <div class="text-center mt-4">
                            <h1 class="h2">Welcome back, Admin</h1>
                            <p class="lead">
                                Login untuk mengakses halaman admin
                            </p>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="m-sm-4">
                                    <form action="{{ route('login.post') }}" method="post" novalidate>
                                        @csrf
                                        <div class="mb-3">
                                            <label class="form-label">Email</label>
                                            <input class="form-control form-control-lg" type="email" id="email" name="email"
                                                placeholder="Enter your email" />
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Password</label>
                                            <input class="form-control form-control-lg" type="password" id="password" name="password"
                                                placeholder="Enter your password" />
                                        </div>
                                        <div class="text-center mt-3">
                                            <button type="submit" class="btn btn-lg btn-primary">Login</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="js/app.js"></script>

</body>

</html> --}}

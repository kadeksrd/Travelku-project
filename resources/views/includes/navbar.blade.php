<div class="container d-sm-none d-md-block">
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <!-- logo -->
        <a href="{{ route('home') }} " class="navbar-brand">
            <img src="{{ url('front-end/images/logo/logo2.png') }}" alt="logo-travelku" />
        </a>
        <!-- toogle-bar-right -->
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- link -->
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav ml-auto mr-3">
                <li class="nav-item mx-md-2">
                    <!-- active -->
                    <a href="" class="nav-link active">Home</a>
                </li>
                <li class="nav-item mx-md-2">
                    <a href="" class="nav-link">Paket Travel</a>
                </li>
                <!-- dropdown -->
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown" role="button"
                        aria-haspopup="true" aria-expanded="false">
                        Services
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">link</a>
                        <a class="dropdown-item" href="#">link2</a>
                        <a class="dropdown-item" href="#">link3</a>
                    </div>
                </li>
                <li class="nav-item mx-md-2">
                    <a href="" class="nav-link">Testimonial</a>
                </li>
            </ul>



            @guest
                <!-- mobile button  -->
                <form class="from-inline my-2 d-sm-block d-md-none">
                    <button class="btn btn-login my-2 my-sm-0 px-4 btn-navbar-mobile" type="button"
                        onclick="event.preventDefault(); location.href='{{ url('login') }}';">
                        <b>Sign In</b>
                    </button>
                </form>
                <!-- destkop button -->
                <form class="from-inline my-2 my-lg-0 d-none d-md-block">
                    <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="button"
                        onclick="event.preventDefault(); location.href='{{ url('login') }}';">
                        Sign In
                    </button>
                </form>
            @endguest

            @auth
                <!-- mobile button  -->
                <form class="from-inline my-2 d-sm-block d-md-none" action="{{ url('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-login my-2 my-sm-0 px-4 btn-navbar-mobile">
                        <b>Logout</b>
                    </button>
                </form>
                <!-- destkop button -->
                <form class="from-inline my-2 my-lg-0 d-none d-md-block" action="{{ url('logout') }}" method="post">
                    @csrf
                    <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="submit">
                        Logout
                    </button>
                </form>
            @endauth


        </div>
    </nav>
</div>

<div class="container-sm fixed-top d-sm-block d-md-none">
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <!-- logo -->
        <a href="{{ route('home') }} " class="navbar-brand">
            <img src="{{ url('front-end/images/logo/logo2.png') }}" alt="logo-travelku" />
        </a>
        <!-- toogle-bar-right -->
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- link -->
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav ml-auto mr-3">
                <li class="nav-item mx-md-2">
                    <!-- active -->
                    <a href="" class="nav-link active">Home</a>
                </li>
                <li class="nav-item mx-md-2">
                    <a href="" class="nav-link">Paket Travel</a>
                </li>
                <!-- dropdown -->
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown" role="button"
                        aria-haspopup="true" aria-expanded="false">
                        Services
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">link</a>
                        <a class="dropdown-item" href="#">link2</a>
                        <a class="dropdown-item" href="#">link3</a>
                    </div>
                </li>
                <li class="nav-item mx-md-2">
                    <a href="" class="nav-link">Testimonial</a>
                </li>
            </ul>



            @guest
                <!-- mobile button  -->
                <form class="from-inline my-2 d-sm-block d-md-none">
                    <button class="btn btn-login my-2 my-sm-0 px-4 btn-navbar-mobile" type="button"
                        onclick="event.preventDefault(); location.href='{{ url('login') }}';">
                        <b>Sign In</b>
                    </button>
                </form>
                <!-- destkop button -->
                <form class="from-inline my-2 my-lg-0 d-none d-md-block">
                    <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="button"
                        onclick="event.preventDefault(); location.href='{{ url('login') }}';">
                        Sign In
                    </button>
                </form>
            @endguest

            @auth
                <!-- mobile button  -->
                <form class="from-inline my-2 d-sm-block d-md-none" action="{{ url('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-login my-2 my-sm-0 px-4 btn-navbar-mobile">
                        <b>Logout</b>
                    </button>
                </form>
                <!-- destkop button -->
                <form class="from-inline my-2 my-lg-0 d-none d-md-block" action="{{ url('logout') }}" method="post">
                    @csrf
                    <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="submit">
                        Logout
                    </button>
                </form>
            @endauth


        </div>
    </nav>
</div>

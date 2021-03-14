<body class="@yield("body-classes")">
<div class="container-fluid account-bar pr-md-4 pr-lg-5">
    <div class="d-flex justify-content-end">
        <a href="{{ route("registerPage") }}" class="cf-button cf-button-small">Register</a>
        <a href="{{ route("loginPage") }}" class="cf-button cf-button-small ml-2">Login</a>
    </div>
</div>
<div class="container-fluid fh5co_header_bg">
    <div class="container">
        <div class="row">
            <div class="col-12 fh5co_mediya_center">

            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3 fh5co_padding_menu">
                <img width="250" src="{{ asset("assets/images/logo.jpg") }}" alt="img"/>
            </div>
            <div class="col-12 col-md-9 align-self-center justify-content-end align-items-center d-none d-md-flex">
                <div class="d-none d-lg-flex">
                    <div class="form-outline fh5co_verticle_middle flex-grow-1 search-input-container">
                        <input type="search" id="search-input" class="form-control search-input" placeholder="Search"
                               aria-label="Search"/>
                    </div>
                    <div class="text-center d-inline-block">
                        <a class="fh5co_display_table">
                            <div class="fh5co_verticle_middle search-btn"><i class="fa fa-search"></i></div>
                        </a>
                    </div>
                    <div class="text-center d-inline-block">
                        <a class="fh5co_display_table">
                            <div class="fh5co_verticle_middle"><i class="fa fa-linkedin"></i></div>
                        </a>
                    </div>
                    <div class="text-center d-inline-block">
                        <a class="fh5co_display_table">
                            <div class="fh5co_verticle_middle"><i class="fa fa-google-plus"></i></div>
                        </a>
                    </div>
                    <div class="text-center d-inline-block">
                        <a href="https://twitter.com/fh5co" target="_blank" class="fh5co_display_table">
                            <div class="fh5co_verticle_middle"><i class="fa fa-twitter"></i></div>
                        </a>
                    </div>
                    <div class="text-center d-inline-block">
                        <a href="https://fb.com/fh5co" target="_blank" class="fh5co_display_table">
                            <div class="fh5co_verticle_middle"><i class="fa fa-facebook"></i></div>
                        </a>
                    </div>
                </div>
                <div class="profile d-inline-block">
                    <img class="profile-img fh5co_verticle_middle" src="{{ asset("assets/images/profile-default.png") }}" alt="Profile deafult"/>
                    {{--                    <div class="fh5co_verticle_middle"><i class="fas fa-user-circle"></i></div>--}}
                </div>
                <!--<div class="d-inline-block text-center"><img src="images/country.png" alt="img" class="fh5co_country_width"/></div>-->
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid bg-faded fh5co_padd_mediya padding_786">
    <div class="container padding_786">
        <nav class="navbar navbar-toggleable-md navbar-light" id="navigation-bar">
            <div class="d-lg-none d-flex justify-content-between align-items-center mb-3">
                <button class="navbar-toggler d-inline-block mt-1" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false"
                        aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>

                <div class="d-flex">
                    <div class="form-outline fh5co_verticle_middle flex-grow-1 search-input-container d-inline-block">
                        <input type="search" id="search-input-on-navbar" class="form-control search-input" placeholder="Search"
                               aria-label="Search"/>
                    </div>
                    <div class="text-center d-inline-block">
                        <a class="fh5co_display_table">
                            <div class="fh5co_verticle_middle search-btn-on-navbar"><i class="fa fa-search"></i></div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="home.blade.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#">Blog <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="../../../../../24%20News%20Free%20Website%20Template%20-%20Free-CSS.com/24-news/single.html">Single <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton2" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">World <span class="sr-only">(current)</span></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink_1">
                            <a class="dropdown-item" href="#">Action in</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton3" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">Community<span class="sr-only">(current)</span></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink_1">
                            <a class="dropdown-item" href="#">Action in</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="../../../../../24%20News%20Free%20Website%20Template%20-%20Free-CSS.com/24-news/Contact_us.html">Contact <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item d-md-none d-block">
                        <div class="profile d-flex justify-content-between nav-link">
                            <div>Account</div>
                            <img class="profile-img fh5co_verticle_middle" src="{{ asset("assets/images/profile-default.png") }}" alt="Profile deafult"/>
                            {{--                    <div class="fh5co_verticle_middle"><i class="fas fa-user-circle"></i></div>--}}
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>


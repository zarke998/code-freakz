<body class="@yield("body-classes")">
<div class="container-fluid account-bar pr-md-4 pr-lg-5">
    <div class="d-flex justify-content-end">
        @if(session("user"))
            @if(session("user")->role->name == "admin")
                <a href="{{ route("admin.coursesPage") }}" class="admin-panel-link mr-4">
                    <span>Admin panel</span>
                    <i class="lni lni-layout admin-panel-icon"></i>
                </a>
            @endif
            <a href="{{ route("logout") }}" class="cf-button cf-button-small">Logout</a>
        @else
            <a href="{{ route("registerPage") }}" class="cf-button cf-button-small">Register</a>
            <a href="{{ route("loginPage") }}" class="cf-button cf-button-small ml-2">Login</a>
        @endif
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
                <a href="{{ route("home") }}"><img width="250" src="{{ asset("assets/images/logo.jpg") }}" alt="img"/></a>
            </div>
            <div class="col-12 col-md-9 align-self-center justify-content-end align-items-center d-none d-md-flex">
                <div class="d-none d-lg-flex">
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
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    @foreach($header_menu as $menu_item)
                        <li class="nav-item @if( Route::is($menu_item->route) ) active @endif">
                            <a class="nav-link" href="{{ route($menu_item->route) }}">{{ $menu_item->name }} <span class="sr-only">(current)</span></a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </nav>
    </div>
</div>


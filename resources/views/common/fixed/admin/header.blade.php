<body>
    <div class="row position-fixed fixed-top admin-top-nav p-2">
        <div class="col-12 d-flex justify-content-between align-items-center pl-4">
            <i id="left-nav-expand-btn" class="lni lni-menu"></i>
            <a href="{{ route("home") }}"><img class="logo" width="150" src="{{ asset("assets/images/logo-white.png") }}" alt="img"/></a>
            <div class="d-flex align-items-center">
                <a href="{{ route("logout") }}" class="cf-button cf-button-small mr-2">Logout</a>
                <div class="d-flex align-items-center">
                    <span class="mx-2 text-on-dark admin-name"> {{ session("user")->name }}</span>
                    <img class="profile-img fh5co_verticle_middle"
                         src="{{ asset("assets/images/profile-default.png") }}" alt="Profile deafult"/>
                </div>
            </div>
        </div>
    </div>
    <div class="admin-left-nav position-fixed">
        <h2 class="my-3 mb-4 text-center">Control panel</h2>
        <ul class="my-3 px-0 admin-control-panel">
            @foreach($menu_grouped as $group)
                <li><a class="@if(Route::is($group[0]->route)) admin-control-panel-selected @endif" href="@if($group[0]->route != "") {{ route($group[0]->route) }} @endif"><i class="lni lni-library"></i>{{ $group[0]->name }}</a></li>
                <ul class="pl-0">
                @foreach($group as $sub_item)
                    @if($loop->first) @continue @endif
                    <li class="pl-5"><a class="@if(Route::is($sub_item->route)) admin-control-panel-selected @endif" href="{{ route($sub_item->route) }}">{{ $sub_item->name }}</a></li>
                @endforeach
                </ul>
            @endforeach
        </ul>
    </div>

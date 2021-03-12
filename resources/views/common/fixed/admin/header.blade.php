<body>
    <div class="row position-fixed fixed-top admin-top-nav p-2">
        <div class="col-12 d-flex justify-content-between align-items-center pl-4">
            <img width="150" src="{{ asset("assets/images/logo-white.png") }}" alt="img"/>
            <div class="d-flex align-items-center">
                <a href="#" class="cf-button cf-button-small mr-2">Logout</a>
                <div class="d-flex align-items-center">
                    <span class="mx-2 text-on-dark admin-name"> Andrej Zarkovski</span>
                    <img class="profile-img fh5co_verticle_middle"
                         src="{{ asset("assets/images/profile-default.png") }}" alt="Profile deafult"/>
                </div>
            </div>
        </div>
    </div>
    <div class="admin-left-nav position-fixed">
        <h2 class="my-3 mb-4 text-center">Control panel</h2>
        <ul class="my-3 px-0 admin-control-panel">
            <li><a href="#"><i class="lni lni-library"></i>Content managment</a></li>
            <li><a href="#"><i class="lni lni-text-align-left"></i>Logs</a></li>
        </ul>
    </div>

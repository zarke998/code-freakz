<div class="container-fluid fh5co_footer_bg pb-3">
    <div class="container animate-box">
        <div class="row">
            <div class="col-12 spdp_right py-5 logo-footer-container"><img src="{{ asset("assets/images/logo-white.png") }}" alt="img" class="logo-footer"/></div>
            <div class="clearfix"></div>
            <div class="col-12 col-md-4 col-lg-3">
                <div class="footer_main_title py-3"> About</div>
                <div class="footer_sub_about pb-3"> Welcome to CodeFreakz. Here you can perfect your skills in various programming areas. From web development to OS development. Video tutorials are made by top of the class programmers with in depth coverage of the material being presented. Tutorial difficulties range from begginer to advanced, and on top of all, we have best prices.</div>
                <div class="footer_mediya_icon">
                    <div class="text-center d-inline-block"><a href="https://www.linkedin.com/in/andrej-zarkovski-01b8a4188/" target="_blank" class="fh5co_display_table_footer">
                            <div class="fh5co_verticle_middle"><i class="fa fa-linkedin"></i></div>
                        </a></div>
                    <div class="text-center d-inline-block"><a href="https://youtube.com" target="_blank" class="fh5co_display_table_footer">
                            <div class="fh5co_verticle_middle"><i class="fa fa-youtube"></i></div>
                        </a></div>
                    <div class="text-center d-inline-block"><a href="https://twitter.com" target="_blank" class="fh5co_display_table_footer" target="_blank" class="fh5co_display_table_footer">
                            <div class="fh5co_verticle_middle"><i class="fa fa-twitter"></i></div>
                        </a></div>
                    <div class="text-center d-inline-block"><a href="https://facebook.com" target="_blank" class="fh5co_display_table_footer">
                            <div class="fh5co_verticle_middle"><i class="fa fa-facebook"></i></div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-2">
                <div class="footer_main_title py-3"> Category</div>
                <ul class="footer_menu">
                    @foreach($footer_categories as $category)
                        <li><a href="#" class="footer_cat"><i class="fa fa-angle-right"></i>&nbsp;&nbsp; {{ $category->name }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-12 col-md-5 col-lg-3 position_footer_relative">
                <div class="footer_main_title py-3">Recommended courses</div>
                @foreach($footer_courses as $course)
                    <div class="footer_makes_sub_font"> {{ $course->release_date }}</div>
                    <a href="{{ route("courses.show", ["id" => $course->id]) }}" class=" footer_post pb-4">{{ $course->name }}</a>
                @endforeach
                <div class="footer_position_absolute"><img src="{{ asset("assets/images/footer_sub_tipik.png") }}" alt="img" class="width_footer_sub_img"/></div>
            </div>
            <div class="col-12 col-md-12 col-lg-4 latest-youtube-video ">
                <div class="footer_main_title py-3"> Our latest YouTube video</div>
                <iframe class="youtube-video" style="width: 100%" height="190px" src="https://www.youtube.com/embed/F-sFp_AvHc8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid fh5co_footer_right_reserved">
    <div class="container">
        <div class="row  ">
            <div class="col-12 col-md-6 py-4 Reserved"> © Copyright {{ date("Y") }}, Code Mastery. All rights reserved. </div>
            <div class="col-12 col-md-6 spdp_right py-4 d-flex flex-wrap justify-content-center">
                @foreach($header_menu as $menu_item)
                    <a href="{{ route($menu_item->route) }}" class="footer_last_part_menu"> {{ $menu_item->name }}</a>
                @endforeach
        </div>
    </div>
</div>

{{--Scroll up arrow--}}
<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="fa fa-arrow-up"></i></a>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="{{ asset("assets/js/owl.carousel.min.js") }}"></script>
<!--<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>
<!-- Waypoints -->
<script src="{{ asset("assets/js/jquery.waypoints.min.js") }}"></script>

<!-- Main -->
<script src="{{ asset("assets/js/main.js") }}"></script>
<script src="{{ asset("assets/js/cf-main.js") }}"></script>
@yield("scripts")
</body>
</html>

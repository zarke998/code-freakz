@extends("common.layouts.layout")

@section("title") CodeFreakz | Courses @endsection

@section("stylesheets")
    <link href="{{ asset("assets/css/courses.css") }}" rel="stylesheet" type="text/css" />
@endsection

@section("content")
<div class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0">
            <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Courses</div>
                </div>

                <div class="row pb-4">
                    <div class="col-md-5">
                        <div class="fh5co_hover_news_img">
                            <div class="fh5co_news_img"><img src="images/nathan-mcbride-229637.jpg" alt=""/></div>
                            <div></div>
                        </div>
                    </div>
                    <div class="col-md-7 animate-box">
                        <a href="../product_single.blade.php" class="fh5co_magna py-2"> Magna aliqua ut enim ad minim veniam quis
                        nostrud quis xercitation ullamco. </a> <a href="#" class="fh5co_mini_time py-3"> Thomson Smith -
                        April 18,2016 </a>
                        <div class="fh5co_consectetur"> Amet consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                        </div>
                    </div>
                </div>
                <div class="row pb-4">
                    <div class="col-md-5">
                        <div class="fh5co_hover_news_img">
                            <div class="fh5co_news_img"><img src="images/ryan-moreno-98837.jpg" alt=""/></div>
                            <div></div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <a href="../product_single.blade.php" class="fh5co_magna py-2"> Magna aliqua ut enim ad minim veniam quis
                        nostrud quis xercitation ullamco. </a> <a href="#" class="fh5co_mini_time py-3"> Thomson Smith -
                        April 18,2016 </a>
                        <div class="fh5co_consectetur"> Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                            dolore.
                        </div>
                    </div>
                </div>
                <div class="row pb-4">
                    <div class="col-md-5">
                        <div class="fh5co_hover_news_img">
                            <div class="fh5co_news_img">
                                <img src="images/photo-1449157291145-7efd050a4d0e-578x362.jpg" alt=""/>
                            </div>
                            <div></div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <a href="../product_single.blade.php" class="fh5co_magna py-2"> Magna aliqua ut enim ad minim veniam quis
                        nostrud quis xercitation ullamco. </a> <a href="#" class="fh5co_mini_time py-3"> Thomson Smith -
                        April 18,2016 </a>
                        <div class="fh5co_consectetur"> Quis nostrud xercitation ullamco laboris nisi aliquip ex ea commodo
                            consequat.
                        </div>
                    </div>
                </div>
                <div class="row pb-4">
                    <div class="col-md-5">
                        <div class="fh5co_hover_news_img">
                            <div class="fh5co_news_img"><img src="images/office-768x512.jpg" alt=""/></div>
                            <div></div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <a href="../product_single.blade.php" class="fh5co_magna py-2"> Magna aliqua ut enim ad minim veniam quis
                        nostrud quis xercitation ullamco. </a> <a href="#" class="fh5co_mini_time py-3"> Thomson Smith -
                        April 18,2016 </a>
                        <div class="fh5co_consectetur"> Amet consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center pb-4 pt-4 pl-sm-4 pr-sm-4 pl-0 pr-0 d-flex flex-wrap justify-content-center">
                        <a href="#" class="btn_mange_pagging mb-2"><i class="fa fa-long-arrow-left"></i><span class="d-lg-inline-block d-none"> Previous </span></a>
                        <a href="#" class="btn_pagging mb-2">1</a>
                        <a href="#" class="btn_pagging mb-2">2</a>
                        <a href="#" class="btn_pagging mb-2">3</a>
                        <a href="#" class="btn_pagging mb-2">...</a>
                        <a href="#" class="btn_mange_pagging mb-2"><span class="d-lg-inline-block d-none">Next</span> <i class="fa fa-long-arrow-right"></i>&nbsp;&nbsp; </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Filters</div>
                    <div class="search">
                        <input type="text" name="search" placeholder="Search courses...">
                    </div>

                    <div class="sub-filter">
                        <h4>Categories</h4>
                        <ul>
                            <li class="mb-2">
                                <div class="d-flex align-items-center cf-checkbox">
                                    <div>
                                        <input type="checkbox" id="customCheck1"/>
                                        <i class="material-icons cf-checked">check_box</i>
                                        <i class="material-icons cf-unchecked">check_box_outline_blank</i>
                                    </div>
                                    <label class="mb-0 ml-2" for="customCheck1">Check this custom checkbox</label>
                                </div>
                            </li>
                            <li class="mb-2">
                                <div class="d-flex align-items-center cf-checkbox">
                                    <div>
                                        <input type="checkbox" id="customCheck1"/>
                                        <i class="material-icons cf-checked">check_box</i>
                                        <i class="material-icons cf-unchecked">check_box_outline_blank</i>
                                    </div>
                                    <label class="mb-0 ml-2" for="customCheck1">Check this custom checkbox</label>
                                </div>
                            </li>
                            <li class="mb-2">
                                <div class="d-flex align-items-center cf-checkbox">
                                    <div>
                                        <input type="checkbox" id="customCheck1"/>
                                        <i class="material-icons cf-checked">check_box</i>
                                        <i class="material-icons cf-unchecked">check_box_outline_blank</i>
                                    </div>
                                    <label class="mb-0 ml-2" for="customCheck1">Check this custom checkbox</label>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="sub-filter">
                        <h4>Language</h4>
                        <ul>
                            <li class="mb-2">
                                <div class="d-flex align-items-center cf-checkbox">
                                    <div>
                                        <input type="checkbox" id="customCheck1"/>
                                        <i class="material-icons cf-checked">check_box</i>
                                        <i class="material-icons cf-unchecked">check_box_outline_blank</i>
                                    </div>
                                    <label class="mb-0 ml-2" for="customCheck1">Check this custom checkbox</label>
                                </div>
                            </li>
                            <li class="mb-2">
                                <div class="d-flex align-items-center cf-checkbox">
                                    <div>
                                        <input type="checkbox" id="customCheck1"/>
                                        <i class="material-icons cf-checked">check_box</i>
                                        <i class="material-icons cf-unchecked">check_box_outline_blank</i>
                                    </div>
                                    <label class="mb-0 ml-2" for="customCheck1">Check this custom checkbox</label>
                                </div>
                            </li>
                            <li class="mb-2">
                                <div class="d-flex align-items-center cf-checkbox">
                                    <div>
                                        <input type="checkbox" id="customCheck1"/>
                                        <i class="material-icons cf-checked">check_box</i>
                                        <i class="material-icons cf-unchecked">check_box_outline_blank</i>
                                    </div>
                                    <label class="mb-0 ml-2" for="customCheck1">Check this custom checkbox</label>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="sub-filter">
                        <h4>Difficulty</h4>
                        <ul>
                            <li class="mb-2">
                                <div class="d-flex align-items-center cf-checkbox">
                                    <div>
                                        <input type="checkbox" id="customCheck1"/>
                                        <i class="material-icons cf-checked">check_box</i>
                                        <i class="material-icons cf-unchecked">check_box_outline_blank</i>
                                    </div>
                                    <label class="mb-0 ml-2" for="customCheck1">Check this custom checkbox</label>
                                </div>
                            </li>
                            <li class="mb-2">
                                <div class="d-flex align-items-center cf-checkbox">
                                    <div>
                                        <input type="checkbox" id="customCheck1"/>
                                        <i class="material-icons cf-checked">check_box</i>
                                        <i class="material-icons cf-unchecked">check_box_outline_blank</i>
                                    </div>
                                    <label class="mb-0 ml-2" for="customCheck1">Check this custom checkbox</label>
                                </div>
                            </li>
                            <li class="mb-2">
                                <div class="d-flex align-items-center cf-checkbox">
                                    <div>
                                        <input type="checkbox" id="customCheck1"/>
                                        <i class="material-icons cf-checked">check_box</i>
                                        <i class="material-icons cf-unchecked">check_box_outline_blank</i>
                                    </div>
                                    <label class="mb-0 ml-2" for="customCheck1">Check this custom checkbox</label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

    </div>
</div>
<div class="container-fluid pb-4 pt-5">
    <div class="container animate-box">
        <div>
            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Most Popular</div>
        </div>
        <div class="owl-carousel owl-theme" id="slider2">
            <div class="item px-2">
                <div class="fh5co_hover_news_img">
                    <div class="fh5co_news_img"><img src="images/39-324x235.jpg" alt=""/></div>
                    <div>
                        <a href="#" class="d-block fh5co_small_post_heading"><span class="">The top 10 best computer speakers in the market</span></a>
                        <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2017</div>
                    </div>
                </div>
            </div>
            <div class="item px-2">
                <div class="fh5co_hover_news_img">
                    <div class="fh5co_news_img"><img src="images/joe-gardner-75333.jpg" alt=""/></div>
                    <div>
                        <a href="#" class="d-block fh5co_small_post_heading"><span class="">The top 10 best computer speakers in the market</span></a>
                        <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2017</div>
                    </div>
                </div>
            </div>
            <div class="item px-2">
                <div class="fh5co_hover_news_img">
                    <div class="fh5co_news_img"><img src="images/ryan-moreno-98837.jpg" alt=""/></div>
                    <div>
                        <a href="#" class="d-block fh5co_small_post_heading"><span class="">The top 10 best computer speakers in the market</span></a>
                        <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2017</div>
                    </div>
                </div>
            </div>
            <div class="item px-2">
                <div class="fh5co_hover_news_img">
                    <div class="fh5co_news_img"><img src="images/seth-doyle-133175.jpg" alt=""/></div>
                    <div>
                        <a href="#" class="d-block fh5co_small_post_heading"><span class="">The top 10 best computer speakers in the market</span></a>
                        <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2017</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends("common.layouts.layout")

@section("title") CodeFreakz | Home @endsection

@section("stylesheets")
    <link href="{{ asset('assets/css/home.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section("content")
<div class="container-fluid paddding mb-5">
    <div class="row mx-0">
        @foreach($recommended_courses as $course)
            @if($loop->first)
                <div class="col-md-6 col-12 paddding animate-box" data-animate-effect="fadeIn">
                    <div class="fh5co_suceefh5co_height">
                        <img src="{{ asset($course->images[0]->src) }}" alt="img"/>
                        <div class="fh5co_suceefh5co_height_position_absolute"></div>
                        <div class="fh5co_suceefh5co_height_position_absolute_font">
                            <div class="">
                                <a href="#" class="color_fff">
                                    <i class="fa fa-clock-o"></i>
                                    {{ $course->release_date }}
                                </a>
                            </div>
                            <div class="">
                                <a href="../../../../../24%20News%20Free%20Website%20Template%20-%20Free-CSS.com/24-news/single.html" class="fh5co_good_font">
                                    {{ $course->name }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
{{--            @else--}}
{{--                <div class="col-md-6">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-md-6 col-6 paddding animate-box" data-animate-effect="fadeIn">--}}
{{--                            <div class="fh5co_suceefh5co_height_2"><img src="{{ asset("assets/images/science-578x362.jpg") }}" alt="img"/>--}}
{{--                                <div class="fh5co_suceefh5co_height_position_absolute"></div>--}}
{{--                                <div class="fh5co_suceefh5co_height_position_absolute_font_2">--}}
{{--                                    <div class=""><a href="#" class="color_fff"> <i class="fa fa-clock-o"></i>&nbsp;&nbsp;Oct--}}
{{--                                            28,2017 </a></div>--}}
{{--                                    <div class=""><a href="../../../../../24%20News%20Free%20Website%20Template%20-%20Free-CSS.com/24-news/single.html" class="fh5co_good_font_2"> After all is said and done, <br>more is said than done </a></div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-6 col-6 paddding animate-box" data-animate-effect="fadeIn">--}}
{{--                            <div class="fh5co_suceefh5co_height_2"><img src="{{ asset("assets/images/joe-gardner-75333.jpg") }}" alt="img"/>--}}
{{--                                <div class="fh5co_suceefh5co_height_position_absolute"></div>--}}
{{--                                <div class="fh5co_suceefh5co_height_position_absolute_font_2">--}}
{{--                                    <div class=""><a href="#" class="color_fff"> <i class="fa fa-clock-o"></i>&nbsp;&nbsp;Oct 28,2017 </a></div>--}}
{{--                                    <div class=""><a href="../../../../../24%20News%20Free%20Website%20Template%20-%20Free-CSS.com/24-news/single.html" class="fh5co_good_font_2"> After all is said and done... </a></div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-6 col-6 paddding animate-box" data-animate-effect="fadeIn">--}}
{{--                            <div class="fh5co_suceefh5co_height_2"><img src="{{ asset("assets/images/ryan-moreno-98837.jpg") }}" alt="img"/>--}}
{{--                                <div class="fh5co_suceefh5co_height_position_absolute"></div>--}}
{{--                                <div class="fh5co_suceefh5co_height_position_absolute_font_2">--}}
{{--                                    <div class=""><a href="#" class="color_fff"> <i class="fa fa-clock-o"></i>&nbsp;&nbsp;Oct--}}
{{--                                            28,2017 </a></div>--}}
{{--                                    <div class=""><a href="../../../../../24%20News%20Free%20Website%20Template%20-%20Free-CSS.com/24-news/single.html" class="fh5co_good_font_2"> After all is said and done, more is said than done </a></div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-6 col-6 paddding animate-box" data-animate-effect="fadeIn">--}}
{{--                            <div class="fh5co_suceefh5co_height_2"><img src="{{ asset("assets/images/10-1-1-875x500.jpg") }}" alt="img"/>--}}
{{--                                <div class="fh5co_suceefh5co_height_position_absolute"></div>--}}
{{--                                <div class="fh5co_suceefh5co_height_position_absolute_font_2">--}}
{{--                                    <div class=""><a href="#" class="color_fff"> <i class="fa fa-clock-o"></i>&nbsp;&nbsp;Oct--}}
{{--                                            28,2017 </a></div>--}}
{{--                                    <div class=""><a href="../../../../../24%20News%20Free%20Website%20Template%20-%20Free-CSS.com/24-news/single.html" class="fh5co_good_font_2"> After all is said and done, more is said... </a></div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            @endif
        @endforeach
        <div class="intro-slider-title">
            Recommended
        </div>
    </div>
</div>
<div class="container-fluid pb-4 pt-5">
    <div class="container animate-box">
        <div>
            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">On Discount</div>
        </div>
        <div class="owl-carousel owl-theme" id="slider2">
            <div class="item px-2">
                <div class="fh5co_hover_news_img">
                    <div class="fh5co_news_img"><img src="{{ asset("assets/images/39-324x235.jpg") }}" alt=""/></div>
                    <div>
                        <a href="../../../../../24%20News%20Free%20Website%20Template%20-%20Free-CSS.com/24-news/single.html" class="d-block fh5co_small_post_heading"><span class="">The top 10 best computer speakers in the market</span></a>
                        <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2017</div>
                    </div>
                </div>
            </div>
            <div class="item px-2">
                <div class="fh5co_hover_news_img">
                    <div class="fh5co_news_img"><img src="{{ asset("assets/images/joe-gardner-75333.jpg") }}" alt=""/></div>
                    <div>
                        <a href="../../../../../24%20News%20Free%20Website%20Template%20-%20Free-CSS.com/24-news/single.html" class="d-block fh5co_small_post_heading"><span class="">The top 10 best computer speakers in the market</span></a>
                        <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2017</div>
                    </div>
                </div>
            </div>
            <div class="item px-2">
                <div class="fh5co_hover_news_img">
                    <div class="fh5co_news_img"><img src="{{ asset("assets/images/ryan-moreno-98837.jpg") }}" alt=""/></div>
                    <div>
                        <a href="../../../../../24%20News%20Free%20Website%20Template%20-%20Free-CSS.com/24-news/single.html" class="d-block fh5co_small_post_heading"><span class="">The top 10 best computer speakers in the market</span></a>
                        <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2017</div>
                    </div>
                </div>
            </div>
            <div class="item px-2">
                <div class="fh5co_hover_news_img">
                    <div class="fh5co_news_img"><img src="{{ asset("assets/images/seth-doyle-133175.jpg") }}" alt=""/></div>
                    <div>
                        <a href="../../../../../24%20News%20Free%20Website%20Template%20-%20Free-CSS.com/24-news/single.html" class="d-block fh5co_small_post_heading"><span class="">The top 10 best computer speakers in the market</span></a>
                        <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2017</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid fh5co_video_news_bg pb-4">
    <div class="container animate-box" data-animate-effect="fadeIn">
        <div>
            <div class="fh5co_heading fh5co_heading_border_bottom pt-5 pb-2 mb-4">FREE Courses</div>
        </div>
        <div>
            <div class="owl-carousel owl-theme" id="slider3">
                <div class="item px-2">
                    <div class="fh5co_hover_news_img">
                        <div class="fh5co_hover_news_img_video_tag_position_relative">
                            <div class="fh5co_news_img">
                                <iframe id="video" width="100%" height="200"
                                        src="https://www.youtube.com/embed/aM9g4r9QUsM?rel=0&amp;showinfo=0"
                                        frameborder="0" allowfullscreen></iframe>
                            </div>
                            <div class="fh5co_hover_news_img_video_tag_position_absolute fh5co_hide">
                                <img src="{{ asset("assets/images/ariel-lustre-208615.jpg") }}" alt=""/>
                            </div>
                        </div>
                        <div class="pt-2">
                            <a href="#" class="d-block fh5co_small_post_heading ">
                            <span class="">The top 10 funniest videos on YouTube </span></a>
                            <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2017</div>
                        </div>
                    </div>
                </div>
                <div class="item px-2">
                    <div class="fh5co_hover_news_img">
                        <div class="fh5co_hover_news_img_video_tag_position_relative">
                            <div class="fh5co_news_img">
                                <iframe id="video_2" width="100%" height="200"
                                        src="https://www.youtube.com/embed/aM9g4r9QUsM?rel=0&amp;showinfo=0"
                                        frameborder="0" allowfullscreen></iframe>
                            </div>
                            <div class="fh5co_hover_news_img_video_tag_position_absolute fh5co_hide_2">
                                <img src="{{ asset("assets/images/39-324x235.jpg") }}" alt=""/></div>
                        </div>
                        <div class="pt-2">
                            <a href="#" class="d-block fh5co_small_post_heading ">
                            <span class="">The top 10 embedded YouTube videos this month</span></a>
                            <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2017</div>
                        </div>
                    </div>
                </div>
                <div class="item px-2">
                    <div class="fh5co_hover_news_img">
                        <div class="fh5co_hover_news_img_video_tag_position_relative">
                            <div class="fh5co_news_img">
                                <iframe id="video_3" width="100%" height="200"
                                        src="https://www.youtube.com/embed/aM9g4r9QUsM?rel=0&amp;showinfo=0"
                                        frameborder="0" allowfullscreen></iframe>
                            </div>
                            <div class="fh5co_hover_news_img_video_tag_position_absolute fh5co_hide_3">
                                <img src="{{ asset("assets/images/joe-gardner-75333.jpg") }}" alt=""/></div>
                        </div>
                        <div class="pt-2">
                            <a href="#" class="d-block fh5co_small_post_heading ">
                            <span class="">The top 10 best computer speakers in the market</span></a>
                            <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2017</div>
                        </div>
                    </div>
                </div>
                <div class="item px-2">
                    <div class="fh5co_hover_news_img">
                        <div class="fh5co_hover_news_img_video_tag_position_relative">
                            <div class="fh5co_news_img">
                                <iframe id="video_4" width="100%" height="200"
                                        src="https://www.youtube.com/embed/aM9g4r9QUsM?rel=0&amp;showinfo=0"
                                        frameborder="0" allowfullscreen></iframe>
                            </div>
                            <div class="fh5co_hover_news_img_video_tag_position_absolute fh5co_hide_4">
                                <img src="{{ asset("assets/images/vil-son-35490.jpg") }}" alt=""/>
                            </div>
                        </div>
                        <div class="pt-2">
                            <a href="#" class="d-block fh5co_small_post_heading ">
                                <span class="">The top 10 best computer speakers in the market</span></a>
                            <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2017</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0">
            <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Recently uploaded</div>
                </div>
                <div class="row pb-4">
                    <div class="col-md-5">
                        <div class="fh5co_hover_news_img">
                            <div class="fh5co_news_img"><img src="{{ asset("assets/images/nathan-mcbride-229637.jpg") }}" alt=""/></div>
                            <div></div>
                        </div>
                    </div>
                    <div class="col-md-7 animate-box">
                        <a href="../../../../../24%20News%20Free%20Website%20Template%20-%20Free-CSS.com/24-news/single.html" class="fh5co_magna py-2"> Magna aliqua ut enim ad minim veniam quis
                        nostrud quis xercitation ullamco. </a> <a href="../../../../../24%20News%20Free%20Website%20Template%20-%20Free-CSS.com/24-news/single.html" class="fh5co_mini_time py-3"> Thomson Smith -
                        April 18,2016 </a>
                        <div class="fh5co_consectetur"> Amet consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                        </div>
                    </div>
                </div>
                <div class="row pb-4">
                    <div class="col-md-5">
                        <div class="fh5co_hover_news_img">
                            <div class="fh5co_news_img"><img src="{{ asset("assets/images/ryan-moreno-98837.jpg") }}" alt=""/></div>
                            <div></div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <a href="../../../../../24%20News%20Free%20Website%20Template%20-%20Free-CSS.com/24-news/single.html" class="fh5co_magna py-2"> Magna aliqua ut enim ad minim veniam quis
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
                                <img src="{{ asset("assets/images/photo-1449157291145-7efd050a4d0e-578x362.jpg") }}" alt=""/>
                            </div>
                            <div></div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <a href="../../../../../24%20News%20Free%20Website%20Template%20-%20Free-CSS.com/24-news/single.html" class="fh5co_magna py-2"> Magna aliqua ut enim ad minim veniam quis
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
                            <div class="fh5co_news_img"><img src="{{ asset("assets/images/office-768x512.jpg") }}" alt=""/></div>
                            <div></div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <a href="../../../../../24%20News%20Free%20Website%20Template%20-%20Free-CSS.com/24-news/single.html" class="fh5co_magna py-2"> Magna aliqua ut enim ad minim veniam quis
                        nostrud quis xercitation ullamco. </a> <a href="#" class="fh5co_mini_time py-3"> Thomson Smith -
                        April 18,2016 </a>
                        <div class="fh5co_consectetur"> Amet consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Popular categories</div>
                </div>
                <div class="clearfix"></div>
                <div class="fh5co_tags_all">
                    <a href="#" class="fh5co_tagg">Business</a>
                    <a href="#" class="fh5co_tagg">Technology</a>
                    <a href="#" class="fh5co_tagg">Sport</a>
                    <a href="#" class="fh5co_tagg">Art</a>
                    <a href="#" class="fh5co_tagg">Lifestyle</a>
                    <a href="#" class="fh5co_tagg">Three</a>
                    <a href="#" class="fh5co_tagg">Photography</a>
                    <a href="#" class="fh5co_tagg">Lifestyle</a>
                    <a href="#" class="fh5co_tagg">Art</a>
                    <a href="#" class="fh5co_tagg">Education</a>
                    <a href="#" class="fh5co_tagg">Social</a>
                    <a href="#" class="fh5co_tagg">Three</a>
                </div>
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom pt-3 py-2 mb-4">C#</div>
                </div>
                <div class="row pb-3">
                    <div class="col-lg-5 align-self-center">
                        <img src="{{ asset("assets/images/download (1).jpg") }}" alt="img" class="fh5co_most_trading"/>
                    </div>
                    <div class="col-lg-7 mt-1 px-lg-0">
                        <div class="most_fh5co_treding_font"> Magna aliqua ut enim ad minim veniam quis nostrud.</div>
                        <div class="most_fh5co_treding_font_123"> April 18, 2016</div>
                    </div>
                </div>
                <div class="row pb-3">
                    <div class="col-5 align-self-center">
                        <img src="{{ asset("assets/images/allef-vinicius-108153.jpg") }}" alt="img" class="fh5co_most_trading"/>
                    </div>
                    <div class="col-7 paddding">
                        <div class="most_fh5co_treding_font"> Enim ad minim veniam nostrud xercitation ullamco.</div>
                        <div class="most_fh5co_treding_font_123"> April 18, 2016</div>
                    </div>
                </div>
                <div class="row pb-3">
                    <div class="col-5 align-self-center">
                        <img src="{{ asset("assets/images/download (2).jpg") }}" alt="img" class="fh5co_most_trading"/>
                    </div>
                    <div class="col-7 paddding">
                        <div class="most_fh5co_treding_font"> Magna aliqua ut enim ad minim veniam quis nostrud.</div>
                        <div class="most_fh5co_treding_font_123"> April 18, 2016</div>
                    </div>
                </div>
                <div class="row pb-3">
                    <div class="col-5 align-self-center"><img src="{{ asset("assets/images/seth-doyle-133175.jpg") }}" alt="img"
                                                              class="fh5co_most_trading"/></div>
                    <div class="col-7 paddding">
                        <div class="most_fh5co_treding_font"> Magna aliqua ut enim ad minim veniam quis nostrud.</div>
                        <div class="most_fh5co_treding_font_123"> April 18, 2016</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mx-0 animate-box" data-animate-effect="fadeInUp">

        </div>
    </div>
</div>
@endsection

@extends("common.layouts.layout")

@section("title") CodeFreakz | Home @endsection

@section("stylesheets")
    <link href="{{ asset('assets/css/home.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section("content")
<div class="container-fluid paddding mb-5">
    <div class="row mx-0 intro-slider">
        <div class="col-md-6 col-12 paddding animate-box" data-animate-effect="fadeIn">
            <div class="fh5co_suceefh5co_height">
                <img src="{{ asset("storage/".$recommended_courses[0]->images[0]->src) }}" alt="img"/>
                <div class="fh5co_suceefh5co_height_position_absolute"></div>
                <div class="fh5co_suceefh5co_height_position_absolute_font">
                    <div class="">
                        {{ $recommended_courses[0]->release_date }}
                    </div>
                    <div class="">
                        <a href="../../../../../24%20News%20Free%20Website%20Template%20-%20Free-CSS.com/24-news/single.html" class="fh5co_good_font">
                            {{ $recommended_courses[0]->name }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                @for($i = 1; $i < $recommended_courses->count(); $i++)
                    <div class="col-md-6 col-6 paddding animate-box" data-animate-effect="fadeIn">
                        <div class="fh5co_suceefh5co_height_2">
                            <img src="{{ asset("storage/".$recommended_courses[$i]->images[0]->src) }}" alt="img"/>
                            <div class="fh5co_suceefh5co_height_position_absolute"></div>
                            <div class="fh5co_suceefh5co_height_position_absolute_font_2">
                                <div class="">
                                        {{ $recommended_courses[0]->release_date }}
                                </div>
                                <div class=""><a href="../../../../../24%20News%20Free%20Website%20Template%20-%20Free-CSS.com/24-news/single.html" class="fh5co_good_font_2">
                                        {{ $recommended_courses[$i]->name }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
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
            @foreach($discounted_courses as $course)
                <div class="item px-2">
                    <div class="fh5co_hover_news_img">
                        <div class="fh5co_news_img">
                            <img style="object-fit: cover" src="{{ asset("storage/".$course->images[0]->src) }}" alt=""/></div>
                        <div>
                            <a href="../../../../../24%20News%20Free%20Website%20Template%20-%20Free-CSS.com/24-news/single.html" class="d-block fh5co_small_post_heading"><span class="">{{ $course->name }}</span></a>
                            <div class="c_g"><i class="fa fa-clock-o"></i> {{ $course->release_date }}</div>
                        </div>
                    </div>
                </div>
            @endforeach
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
                @foreach($free_courses as $course)
                    <div class="item px-2">
                        <div class="fh5co_hover_news_img">
                            <div class="fh5co_news_img">
                                <img style="object-fit: cover" src="{{ asset("storage/".$course->images[0]->src) }}" alt=""/></div>
                            <div>
                                <a href="../../../../../24%20News%20Free%20Website%20Template%20-%20Free-CSS.com/24-news/single.html" class="d-block fh5co_small_post_heading"><span class="">{{ $course->name }}</span></a>
                                <div class="c_g"><i class="fa fa-clock-o"></i> {{ $course->release_date }}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
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
                @foreach($recent_courses as $course)
                    <div class="row pb-4">
                        <div class="col-md-5">
                            <div class="fh5co_hover_news_img">
                                <div class="fh5co_news_img"><img style="object-fit: cover" src="{{ asset("storage/".$course->images[0]->src) }}" alt=""/></div>
                                <div></div>
                            </div>
                        </div>
                        <div class="col-md-7 animate-box">
                            <a style="display: block" href="../../../../../24%20News%20Free%20Website%20Template%20-%20Free-CSS.com/24-news/single.html" class="fh5co_magna py-2">
                                {{ $course->name }}
                            </a> <a href="../../../../../24%20News%20Free%20Website%20Template%20-%20Free-CSS.com/24-news/single.html" class="fh5co_mini_time pb-3">
                                {{ $course->author->first_name . " " . $course->author->last_name }} <span class="pl-1"> {{ $course->release_date }}</span>
                            </a>
                            <div class="fh5co_consectetur">
                                {{ substr($course->description,0, 50) }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Popular categories</div>
                </div>
                <div class="clearfix"></div>
                <div class="fh5co_tags_all popular-categories">
                    @foreach($categories as $category)
                        <a href="#" class="fh5co_tagg">{{ $category->name }}</a>
                    @endforeach
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

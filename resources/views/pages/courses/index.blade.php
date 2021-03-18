@extends("common.layouts.layout")

@section("title") CodeFreakz | Courses @endsection

@section("stylesheets")
    <link href="{{ asset("assets/css/courses.css") }}" rel="stylesheet" type="text/css" />
@endsection
@section("scripts")
    <script src="{{ asset("assets/js/courses.js") }}"></script>
@endsection

@section("content")
<div class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0">
            <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Courses</div>
                </div>
                <div class="course-container">

                </div>
                <div class="row">
                    <div id="pagination-container" class="col-12 text-center pb-4 pt-4 pl-sm-4 pr-sm-4 pl-0 pr-0 d-flex flex-wrap justify-content-center">
                        <a href="#" class="btn_mange_pagging mb-2 pagination-btn prev-next-btn" data-inc="-1">
                            <i class="fa fa-long-arrow-left"></i><span class="d-lg-inline-block d-none"> Previous </span>
                        </a>
                        <a href="#" class="btn_pagging mb-2 pagination-btn page-btn" data-page="1">1</a>
                        <a href="#" class="btn_mange_pagging mb-2 pagination-btn prev-next-btn" data-inc="1">
                            <span class="d-lg-inline-block d-none">Next</span> <i class="fa fa-long-arrow-right"></i>&nbsp;&nbsp;
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Filters</div>
                    <div class="search">
                        <input id="course-search" type="text" name="search" placeholder="Search courses..." class="py-1 px-3">
                    </div>
                    <div class="sub-filter">
                        <h4>Language</h4>
                        <ul>
                            @foreach($languages as $language)
                                <li class="mb-2">
                                    <div class="d-flex align-items-center cf-checkbox">
                                        <div>
                                            <input class="language-filter" name="language[]" type="checkbox" id="language{{ $language->id }}" value="{{ $language->id }}"/>
                                            <i class="material-icons cf-checked">check_box</i>
                                            <i class="material-icons cf-unchecked">check_box_outline_blank</i>
                                        </div>
                                        <label class="mb-0 ml-2" for="language{{ $language->id }}">{{ $language->name }}</label>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="sub-filter mb-4">
                        <h4>Difficulty</h4>
                        <select id="difficulty-filter" name="difficulty" class="cf-input cf-select p-2 w-100">
                            <option value="-1">(None)</option>
                            @foreach($difficulties as $difficulty)
                                <option value="{{ $difficulty->id }}">{{ $difficulty->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="sub-filter">
                        <h4>Category</h4>
                        <select id="category-filter" name="category" class="cf-input cf-select p-2 w-100">
                            <option value="-1">(None)</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button id="apply-filters-btn" type="button" class="cf-input cf-button w-100 my-4">Apply</button>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid pb-4 pt-5">
    <div class="container animate-box">
        <div>
            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Recommended courses</div>
        </div>
        <div class="owl-carousel owl-theme" id="slider2">
            @foreach($recommended_courses as $course)
                <div class="item px-2">
                    <div class="fh5co_hover_news_img">
                        <div class="fh5co_news_img"><img  style="object-fit: cover"  src="{{ asset("storage/".$course->images[0]->src)  }}" alt=""/></div>
                        <div>
                            <a href="#" class="d-block fh5co_small_post_heading"><span class="">{{ $course->name }}</span></a>
                            <div class="c_g"><i class="fa fa-clock-o"></i> {{ $course->release_date }}</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

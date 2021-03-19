@extends("common.layouts.layout")

@section("title") CodeFreakz | Course @endsection

@section("scripts")
    {{--Parallax--}}
    <script src="{{ asset("assets/js/jquery.stellar.min.js") }}"></script>
    <script>if (!navigator.userAgent.match(/Android|BlackBerry|iPhone|iPad|iPod|Opera Mini|IEMobile/i)){$(window).stellar();}</script>
@endsection

@section("body-classes") single @endsection

@section("content")
<div id="fh5co-title-box" >
    <div class="overlay" style="background-image: url(&apos;{{ asset('assets/images/course wallpaper - compressed.jpg') }}&apos;); background-size: cover; background-repeat: no-repeat";></div>
    <div class="page-title">
        <span>{{ $course->release_date }}</span>
        <h2>{{ $course->name }}</h2>
    </div>
</div>
<div id="fh5co-single-content" class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0">
            <div class="col-md-8 animate-box my-5" data-animate-effect="fadeInLeft">
                <div>
                    <img style="object-fit: cover" class="w-100" height="400px" src="{{ $course->images[0]->src }}" alt="" />
                </div>
                <div>
                    <h2 class="my-5">Description</h2>
                    {!! $course->description !!}
                </div>

                <div class="d-flex align-items-center">
                    <h2 class="py-5">Price: </h2>
                    <p class="my-1 ml-3 pb-1" style="font-size:24px">{{ $course->price }}$</p>
                </div>

                <div class="d-flex justify-content-center mt-2">
                    <button class="cf-input cf-button w-50">Add to cart</button>
                </div>
            </div>

            <div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Tags</div>
                </div>
                <div class="clearfix"></div>
                <div class="fh5co_tags_all">
                    <a href="#" class="fh5co_tagg link-disabled">{{ $course->category->name }}</a>
                    <a href="#" class="fh5co_tagg link-disabled">{{ $course->difficulty->name }}</a>
                    @foreach($course->languages as $language)
                        <a href="#" class="fh5co_tagg link-disabled">{{ $language->name }}</a>
                    @endforeach
                </div>
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom pt-3 py-2 mb-4">From the author</div>
                </div>
                @foreach($course->author->topFourCourses() as $course)
                    <div class="row pb-3">
                        <div class="col-lg-5 align-self-center">
                            <img src="{{ asset("storage/".$course->images[0]->src) }}" alt="img" class="fh5co_most_trading"/>
                        </div>
                        <div class="col-lg-7 mt-1 px-lg-0">
                            <div class="most_fh5co_treding_font">{{ $course->name }}</div>
                            <div class="most_fh5co_treding_font_123">{{ $course->release_date }}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection

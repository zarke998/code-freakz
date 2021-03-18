@extends("common.layouts.admin")

@section("title") CodeFreakz | Admin - Courses @endsection

@section("scripts")
    <script src="{{ asset("assets/js/admin/course-page.js") }}"></script>
@endsection

@section("content")
    <div class="row content-container justify-content-center">
        <div class="content-section col-12 px-5 mb-2">
            <h2 class="text-center my-4 mr-3">Courses</h2>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Course</th>
                    <th scope="col">From Author</th>
                    <th scope="col" class="d-flex justify-content-center">Actions</th>
                </tr>
                </thead>
                <tbody id="courses-container">

                </tbody>
            </table>
            <div class="row">
                <div class="col-12 text-center pb-4 pt-4 pl-sm-4 pr-sm-4 pl-0 pr-0 d-flex flex-wrap justify-content-between">
                    <a href="#" class="course-page-btn btn_mange_pagging mb-2" data-inc="-1"><i class="fa fa-long-arrow-left"></i><span class="d-lg-inline-block d-none"> Previous </span></a>
                    <a href="#" class="course-page-btn btn_mange_pagging mb-2" data-inc="1" >
                        <span class="d-lg-inline-block d-none">Next</span>
                        <i class="fa fa-long-arrow-right"></i>&nbsp
                    </a>
                </div>
            </div>
            <div class="d-flex justify-content-center align-items-center flex-wrap">
                <div class="d-flex align-items-center mb-3 mx-4">
                    {{--                    <span class="mr-3 d-block">Add course</span>--}}
                    <a href="{{ route("course.create") }}" class="w-100 cf-button px-5">Add Course</a>
                </div>
            </div>
            @if(session("entityInsertMsg"))
                <div class="success-msg">
                    {{ session("entityInsertMsg") }}
                </div>
            @endif
        </div>

    </div>
@endsection

@extends("common.layouts.admin")

@section("title") CodeFreakz | Admin - Courses @endsection

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
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td class="table-actions d-flex justify-content-center">
                        <a href="#" class="cf-link"><i class="lni lni-pencil"></i></a>
                        <a href="#" class="cf-link ml-3"><i class="lni lni-trash"></i></a>
                    </td>
                </tr>
                </tbody>
            </table>
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
            <div class="d-flex justify-content-center align-items-center flex-wrap">
                <div class="d-flex align-items-center mb-3 mx-4">
                    {{--                    <span class="mr-3 d-block">Add course</span>--}}
                    <button type="button" class="w-100 cf-button">Add Course</button>
                </div>
            </div>
        </div>

    </div>
@endsection

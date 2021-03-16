@extends("common.layouts.admin")

@section("title") CodeFreakz | Admin - Courses @endsection

@section("content")
    <div class="row content-container justify-content-center">
        <div class="content-section col-12 px-4 px-sm-5 mb-2">
            <h2 class="text-center my-4 mr-3">Authors</h2>
            <div style="">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Birth Date</th>
                        <th scope="col" class="d-flex justify-content-center">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($authors as $author)
                        <tr>
                            <th scope="row">{{ $author->id }}</th>
                            <td>{{ $author->first_name }}</td>
                            <td>{{ $author->last_name }}</td>
                            <td>{{ $author->birth_date }}</td>
                            <td class="table-actions d-flex justify-content-center">
                                <a href="#" class="cf-link"><i class="lni lni-pencil"></i></a>
                                <a href="#" class="cf-link ml-3"><i class="lni lni-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-center align-items-center flex-wrap">
                <div class="d-flex align-items-center mb-3 mx-4">
                    {{--                    <span class="mr-3 d-block">Add course</span>--}}
                    <a href="{{ route("authors.create") }}" class="w-100 cf-button px-5">Add Author</a>
                </div>
            </div>
            @if(session("authorCreateMsg"))
                <div class="success-msg">
                    {{ session("authorCreateMsg") }}
                </div>
            @endif
        </div>

    </div>
@endsection

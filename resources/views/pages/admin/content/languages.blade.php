@extends("common.layouts.admin")

@section("title") CodeFreakz | Admin - Courses @endsection

@section("content")
    <div class="row content-container justify-content-center">
        <div class="content-section col-12 px-4 px-sm-5 mb-2">
            <h2 class="text-center my-4 mr-3">Languages</h2>
            <div style="">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col" class="d-flex justify-content-center">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($languages as $language)
                        <tr>
                            <th scope="row">{{ $language->id }}</th>
                            <td>{{ $language->name }}</td>
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
                    <a href="{{ route("languages.create") }}" class="w-100 cf-button px-5">Add Language</a>
                </div>
            </div>
            @if(session("entityCreateMsg"))
                <div class="success-msg">
                    {{ session("entityCreateMsg") }}
                </div>
            @endif
        </div>

    </div>
@endsection

@extends("common.layouts.layout")

@section("title") CodeFreakz | Course Update @endsection

@section("content")
    <div class="row my-5">
        <div class="col-12">
            <h1 class="text-center py-4">Update Author</h1>
        </div>
        <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 px-4 px-sm-auto">
                    <form action="{{ route("authors.update", ["id" => $author->id]) }}" method="POST">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" class="form-control cf-input" name="first_name" placeholder="First Name"
                                   aria-label="Email" aria-describedby="basic-addon1" value="{{ old("first_name") ? old("first_name") : $author->first_name}}">
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control cf-input" name="last_name" placeholder="Last Name"
                                   aria-label="Email" aria-describedby="basic-addon1" value="{{ old("last_name") ? old("last_name") : $author->last_name}}">
                        </div>
                        <div class="mb-3">
                            <span>Birth Date</span>
                            <input type="date" class="form-control cf-input" name="birth_date" placeholder="Last Name"
                                   aria-label="Email" aria-describedby="basic-addon1" value="{{ old("birth_date") ? old("birth_date") : $author->birth_date}}">
                        </div>
                        <div>
                            <button type="submit" class="w-100 cf-button mt-3">Update Author</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

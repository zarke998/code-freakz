@extends("common.layouts.layout")

@section("title") CodeFreakz | Category Create@endsection

@section("content")
    <div class="row my-5">
        <div class="col-12">
            <h1 class="text-center py-4">Edit Category</h1>
        </div>
        <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 px-4 px-sm-auto">
                    <form action="{{ route("categories.update", ["id" => $category->id]) }}" method="POST">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" class="form-control cf-input" name="name" placeholder="Name"
                                   aria-label="Email" aria-describedby="basic-addon1" value="{{ old("name") ? old("name") : $category->name}}">
                        </div>
                        <div>
                            <button type="submit" class="w-100 cf-button mt-3">Update Category</button>
                        </div>
                    </form>
                    @foreach($errors->all() as $error)
                        <div class="error-msg">
                            {{ $error }}
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

@extends("common.layouts.layout")

@section("title") CodeFreakz | Course Create @endsection

@section("content")
    <div class="row my-5">
        <div class="col-12">
            <h1 class="text-center py-4">Create Language</h1>
        </div>
        <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 px-4 px-sm-auto">
                    <form action="{{ route("languages.update", ["id" => $language->id]) }}" method="POST">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" class="form-control cf-input" name="name" placeholder="Name"
                                   aria-label="Email" aria-describedby="basic-addon1" value="{{ old("name") ? old("name") : $language->name}}">
                        </div>
                        <div>
                            <button type="submit" class="w-100 cf-button mt-3">Update Language</button>
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

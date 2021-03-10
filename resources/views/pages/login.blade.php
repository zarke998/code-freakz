@extends("common.layouts.layout")

@section("title") CodeFreakz | Login @endsection


@section("content")
    <div class="row mb-5">
        <div class="col-12">
            <h1 class="text-center py-4">Login</h1>
        </div>
        <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
            <div class="row">
                <div class="col-10 offset-1 col-sm-8 offset-sm-2">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control cf-input" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-2">
                        <input type="password" class="form-control cf-input" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
                    </div>
                    <div class="d-flex justify-content-end">
                        <a href="#">Forgot password?</a>
                    </div>
                    <div>
                        <button type="button" class="w-100 cf-button mt-3">Login</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

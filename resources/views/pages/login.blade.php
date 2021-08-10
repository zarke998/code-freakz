@extends("common.layouts.layout")

@section("title") CodeFreakz | Login @endsection


@section("content")
    <div class="row mb-5 mx-0">
        <div class="col-12">
            <h1 class="text-center py-4">Login</h1>
        </div>
        <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
            <div class="row">
                <div class="col-10 offset-1 col-sm-8 offset-sm-2">
                    <form action="{{ route("login") }}" method="POST">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" name="email" class="form-control cf-input" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1" value="{{old("email")}}">
                        </div>
                        <div class="input-group mb-2">
                            <input type="password" name="password" class="form-control cf-input" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
                        </div>
                        <div>
                            <button type="submit" class="w-100 cf-button mt-3">Login</button>
                        </div>
                        @if(session("registrationSuccessfullMsg"))
                        <div class="success-msg my-2">
                            Registration successfull.
                        </div>
                        @endif
                        @if($errors->any())
                            <ul class="my-2 error-msg-list">
                                @foreach($errors->all() as $error)
                                    <li>
                                        {{ $error }}
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                        @if(session("loginErrorMsg"))
                            <div class="error-msg my-2">
                                {{ session("loginErrorMsg") }}
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

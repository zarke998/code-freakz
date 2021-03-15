@extends("common.layouts.layout")

@section("title") CodeFreakz | Course Edit @endsection

@section("content")
    <div class="row mb-5">
        <div class="col-12">
            <h1 class="text-center py-4">Edit</h1>
        </div>
        <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 px-4 px-sm-auto">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control cf-git input" name="name" placeholder="Course name" aria-label="Email" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <select class="form-control cf-input cf-select" name="author" placeholder="Author" aria-label="Author" aria-describedby="basic-addon1">
                            <option value="1">Author 1</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <textarea name="description" placeholder="Description..." class="w-100 cf-text-area"></textarea>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control cf-input" name="price" placeholder="Price ($)" aria-label="Email" aria-describedby="basic-addon1">
                    </div>
                    <div class="mb-4">
                        <p class="cf-text-medium text-center mb-2">Category</p>
                        <select class="form-control cf-input cf-select" name="category" placeholder="Category" aria-label="Author" aria-describedby="basic-addon1">
                            <option value="1">Web development</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <p class="text-center w-100 cf-text-medium mb-2">Difficulty</p>
                        <div class="d-flex justify-content-between flex-wrap">
                            <div class="d-flex align-items-center cf-checkbox">
                                <div>
                                    <input type="checkbox" id="customCheck1"/>
                                    <i class="material-icons cf-checked">check_box</i>
                                    <i class="material-icons cf-unchecked">check_box_outline_blank</i>
                                </div>
                                <label class="mb-0 ml-2" for="customCheck1">Beginner</label>
                            </div>
                            <div class="d-flex align-items-center cf-checkbox">
                                <div>
                                    <input type="checkbox" id="customCheck1"/>
                                    <i class="material-icons cf-checked">check_box</i>
                                    <i class="material-icons cf-unchecked">check_box_outline_blank</i>
                                </div>
                                <label class="mb-0 ml-2" for="customCheck1">Intermediate</label>
                            </div>
                            <div class="d-flex align-items-center cf-checkbox">
                                <div>
                                    <input type="checkbox" id="customCheck1"/>
                                    <i class="material-icons cf-checked">check_box</i>
                                    <i class="material-icons cf-unchecked">check_box_outline_blank</i>
                                </div>
                                <label class="mb-0 ml-2" for="customCheck1">Advanced</label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <p class="text-center w-100 cf-text-medium mb-2">Languages</p>
                        <div class="d-flex justify-content-center flex-wrap">
                            <div class="d-flex align-items-center cf-checkbox mr-3 mb-1">
                                <div>
                                    <input type="checkbox" id="customCheck1"/>
                                    <i class="material-icons cf-checked">check_box</i>
                                    <i class="material-icons cf-unchecked">check_box_outline_blank</i>
                                </div>
                                <label class="mb-0 ml-2" for="customCheck1">SQL</label>
                            </div>
                            <div class="d-flex align-items-center cf-checkbox mr-3 mb-1">
                                <div>
                                    <input type="checkbox" id="customCheck1"/>
                                    <i class="material-icons cf-checked">check_box</i>
                                    <i class="material-icons cf-unchecked">check_box_outline_blank</i>
                                </div>
                                <label class="mb-0 ml-2" for="customCheck1">C#</label>
                            </div>
                            <div class="d-flex align-items-center cf-checkbox mr-3 mb-1">
                                <div>
                                    <input type="checkbox" id="customCheck1"/>
                                    <i class="material-icons cf-checked">check_box</i>
                                    <i class="material-icons cf-unchecked">check_box_outline_blank</i>
                                </div>
                                <label class="mb-0 ml-2" for="customCheck1">Java</label>
                            </div>
                            <div class="d-flex align-items-center cf-checkbox mr-3 mb-1">
                                <div>
                                    <input type="checkbox" id="customCheck1"/>
                                    <i class="material-icons cf-checked">check_box</i>
                                    <i class="material-icons cf-unchecked">check_box_outline_blank</i>
                                </div>
                                <label class="mb-0 ml-2" for="customCheck1">PHP</label>
                            </div>
                            <div class="d-flex align-items-center cf-checkbox mr-3 mb-1">
                                <div>
                                    <input type="checkbox" id="customCheck1"/>
                                    <i class="material-icons cf-checked">check_box</i>
                                    <i class="material-icons cf-unchecked">check_box_outline_blank</i>
                                </div>
                                <label class="mb-0 ml-2" for="customCheck1">Flutter</label>
                            </div>
                            <div class="d-flex align-items-center cf-checkbox mr-3 mb-1">
                                <div>
                                    <input type="checkbox" id="customCheck1"/>
                                    <i class="material-icons cf-checked">check_box</i>
                                    <i class="material-icons cf-unchecked">check_box_outline_blank</i>
                                </div>
                                <label class="mb-0 ml-2" for="customCheck1">Kotlin</label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 mt-2">
                        <p class="cf-text-medium text-center">Course cover</p>
                        <input type="file" class="form-control cf-input" name="name" placeholder="Course name" aria-label="Email" aria-describedby="basic-addon1">
                        <img class="w-100 mt-2" src="{{ asset("assets/images/joe-gardner-75333.jpg") }}" alt="Course cover"/>
                    </div>
                    <div>
                        <button type="button" class="w-100 cf-button mt-3">Update course</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

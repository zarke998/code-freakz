@extends("common.layouts.layout")

@section("title") CodeFreakz | Course Edit @endsection

@section("scripts")
    <script src="{{ asset("assets/js/course_create.js") }}"></script>
@endsection

@section("content")
    <div class="row mx-0 mb-5">
        <div class="col-12">
            <h1 class="text-center py-4">Edit</h1>
        </div>
        <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 px-4 px-sm-auto">
                    <form action="{{ route("course.update",[ "id" => $course->id ]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" class="form-control cf-input" name="name" placeholder="Course name"
                                   aria-label="Email" aria-describedby="basic-addon1" value="{{ old("name") ? old("name") : $course->name }}" }}>
                        </div>
                        <div class="mb-3">
                            <span>Author</span>
                            <select class="form-control cf-input cf-select" name="author_id" placeholder="Author"
                                    aria-label="Author" aria-describedby="basic-addon1">
                                @foreach($authors as $author)
                                    <option
                                        value="{{ $author->id }}" @if($author->id == $course->author_id) selected @endif>{{ $author->first_name . " " . $author->last_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <span>Description</span>
                            <textarea name="description" placeholder="Description..."
                                      class="w-100 cf-text-area">{{ old("description") ? old("description") : $course->description }}</textarea>
                        </div>
                        <div class="mb-3">
                            <span>Release date</span>
                            <input type="date" class="form-control cf-input" name="release_date" placeholder="Release Date"
                                   aria-label="Email" aria-describedby="basic-addon1" value="{{ old("release_date") ? old("release_date") : $course->release_date  }}">
                        </div>
                        <div class="mb-3">
                            <span>Price ($)</span>
                            <input type="text" class="form-control cf-input" name="price" placeholder="Price ($)"
                                   aria-label="Email" aria-describedby="basic-addon1" value="{{ old("price") ? old("price") : $course->price}}">
                        </div>
                        <div class="mb-3">
                            <span>Discount (%)</span>
                            <input type="text" class="form-control cf-input" name="discount" placeholder="Discount in %)"
                                   aria-label="Email" aria-describedby="basic-addon1" value="{{ old("discount") ? old("discount") : $course->discount}}">
                        </div>
                        <div class="mb-4">
                            <p class="cf-text-medium text-center mb-2">Category</p>
                            <select class="form-control cf-input cf-select" name="category_id" placeholder="Category"
                                    aria-label="Author" aria-describedby="basic-addon1">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" @if($category->id == $course->category_id) selected @endif>{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4">
                            <p class="cf-text-medium text-center mb-2">Difficulty</p>
                            <select class="form-control cf-input cf-select" name="difficulty_id" placeholder="Category"
                                    aria-label="Author" aria-describedby="basic-addon1">
                                @foreach($difficulties as $difficulty)
                                    <option value="{{ $difficulty->id }}" @if($difficulty->id == $course->difficulty_id) selected @endif>{{ $difficulty->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <p class="text-center w-100 cf-text-medium mb-2">Languages</p>
                            <div class="d-flex justify-content-center flex-wrap">
                                @foreach($languages as $language)
                                    <div class="d-flex align-items-center cf-checkbox mr-3 mb-1">
                                        <div>
                                            <input type="checkbox" id="language{{ $loop->index }}" name="language_id[]"
                                                   value="{{ $language->id }}"
                                                    @if($course->languages->contains("id", $language->id))
                                                        checked
                                                    @endif
                                                        />
                                            <i class="material-icons cf-checked">check_box</i>
                                            <i class="material-icons cf-unchecked">check_box_outline_blank</i>
                                        </div>
                                        <label class="mb-0 ml-2"
                                               for="language{{ $loop->index }}">{{ $language->name }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="mb-3 mt-2">
                            <p class="cf-text-medium text-center">Course cover</p>
                            <input id="course_image_input" type="file" class="form-control cf-input" name="image"
                                   placeholder="Course cover" aria-label="Email" aria-describedby="basic-addon1">
                            <img class="w-100 mt-2" src="{{ $course->images[0]->src }}"
                                 alt="Course cover"/>
                        </div>
                        <div>
                            <button type="submit" class="w-100 cf-button mt-3">Update course</button>
                        </div>
                        @if($errors->any())
                            @foreach($errors->all() as $error)
                                <div class="error-msg my-2">
                                    {{ $error }}
                                </div>
                            @endforeach
                        @endif
                    </form>
                </div>
            </div>a
        </div>
    </div>
@endsection

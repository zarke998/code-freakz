<?php

namespace App\Http\Requests\Course;

use Illuminate\Foundation\Http\FormRequest;

class CourseCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "name" => "bail|required|unique:courses,name",
            "author_id" => "bail|required|exists:authors,id",
            "description" => "bail|required",
            "price" => "bail|required|numeric",
            "discount" => "bail|numeric",
            "category_id" => "bail|required|exists:categories,id",
            "difficulty_id" => "bail|required|exists:difficulties,id",
            "language_id" => "bail|required|array",
            "language_id.*" => "bail|required|exists:languages,id",
            "image" => "bail|required|mimes:jpg,png,jpeg|max:10000"
        ];
    }

    public function messages()
    {
        return [
            "name.required" => "Course name is required",
            "author_id.required" => "Author name is required",
            "description.required" => "Description is required",
            "price.required" => "Price is required",
            "discount" => "Discount must be a whole number",
            "category_id.required" => "Category is required",
            "difficulty_id.required" => "Difficulty is required",
            "language_id.required" => "Languages is required",
            "image.required" => "Image is required",
            "release_date" => "bail|required|date",

            "name.unique" => "Course name must be unique",
            "author_id.exists" => "Author does not exits",
            "price.numeric" => "Price must be a number",
            "category_id.exists" => "Category does not exist",
            "difficulty_id.exists" => "Difficulty does not exists",
            "image" => "Uploaded wrong file. Image is required. JPG or PNG.",
            "release_date" => "Incorrect date format"
        ];
    }
}

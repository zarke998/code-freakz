<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthorUpdateRequest extends FormRequest
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
            "id" => "bail|required|exists:authors,id",
            "first_name" => "bail|required|min:3|alpha",
            "last_name" => "bail|required|min:3|alpha",
            "birth_date" => "bail|required|date"
        ];
    }

    public function messages()
    {
        return [
            "first_name" => "First name must be minimum 3 chars, and only alphabet.",
            "last_name" => "Last name must be minimum 3 chars, and only alphabet.",
            "birth_date" => "Incorrect date format."
        ];
    }
}

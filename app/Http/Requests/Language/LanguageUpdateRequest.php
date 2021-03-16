<?php

namespace App\Http\Requests\Language;

use Illuminate\Foundation\Http\FormRequest;

class LanguageUpdateRequest extends FormRequest
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
            "name" => "bail|required|unique:languages,name"
        ];
    }

    public function messages()
    {
        return [
            "name" => "Name is required and must be unique."
        ];
    }
}


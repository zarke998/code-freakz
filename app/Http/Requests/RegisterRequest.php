<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            "name" => "bail|required|alpha_num|unique:users,name|min:5|max:20",
            "email" => "bail|required|email|unique:users,email",
            "password" => "bail|required|confirmed|regex:/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)[A-Za-z\d]{8,}$/"
        ];
    }

    public function messages()
    {
        return [
            "name.required" => "Username empty.",
            "name.alphanumeric" => "Username can contain only letters and numbers.",
            "name.unique" => "Username already exists.",
            "name.min" => "Username must be larger than 5 characters.",
            "name.max" => "Username must be smaller than 20 characters.",

            "email.required" => "Email empty.",
            "email.unique" => "Email already registerd.",
            "email.email" => "Email is not in correct format.",

            "password.required" => "Password empty.",
            "password.regex" => "Password must be at least 8 characters, and must contain 1 lowercase letter, 1 uppercase letter, and a number.",
            "password.confirmed" => "Password do not match"
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequestValidation extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'firstName' => 'required|string|min:2',
            'lastName' => 'required|string|min:2',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|min:6',
            'date' => 'required|date',
            'gender' => 'in:female,male'
        ];
    }
    // public function massages()
    // {
    //     // return 'this :Attribute required';
    //     return [
    //         'firstName.required' => 'this field is required',
    //         'firstName.min' => 'this field must be at least 2 characters',
    //         'lastName.required' => 'this field is required',
    //         'lastName.min' => 'this field must be at least 2 characters',
    //         // 'email.required' => 'this field is required',
    //         'email.email' => 'this field must be a valid email',
    //         'email.unique' => 'this field must be unique',
    //         'password.required' => 'this field is required',
    //         'password.min' => 'this field must be at least 6 characters',
    //         'date.required' => 'this field is required',
    //         'date.date' => 'this field must be a valid date',
    //         'gender.in' => 'this field is female male required',

    //     ];
    // }
    public function attributes()
    {
        return [
            'email' => 'فیلد ایمیل',
            'firstName' => 'نام',
            'lastName' => 'نام خانوادگی'
        ];
    }
}

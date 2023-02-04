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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
                'email' =>'required|email|unique:registeredtables',
                'password' => 'required|min:6',
                'confirm_password' => ['required','min:6','same:password'],
                'address'=> 'required|min:5',
                'phone' => 'required|numeric|digits:10|min:9700000000|max:9999999999',
                
        ];
    }
}

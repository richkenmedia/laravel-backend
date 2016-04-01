<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserSignupRequest extends Request
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
        'username' => 'required|unique:users,username',
        'email' => 'required|unique:users|email',
        'first_name' => 'required',
        'last_name' => 'required',
        'password' => 'required',
        'password_confirmation' => 'required|same:password'            
        ];
    }
}

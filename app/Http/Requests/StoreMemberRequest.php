<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMemberRequest extends FormRequest
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
            'name' => 'required|min:3|max:191',
            'email' => 'required|email|unique:members',
            'phone' => ['sometimes', 'regex:/^(?:00971|\+971|0)?(?:50|51|52|55|56|58|2|3|4|6|7|9)\d{7}$/i'],
            'nationality' => 'sometimes',
            'package_id' => 'required|exists:packages,id'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Please enter member\'s name',
            'name.min' => 'Name must contain at least 3 characters long',
            'name.max' => 'Name must only be 191 characters long',

            'email.required' => 'Please enter member\'s email',
            'email.email' => 'Please enter a valid email address',
            'email.unique' => 'This email is already registerd',

            'phone.regex' => "Please enter a valid mobile number",

            'package_id.required' => "Please select a package",
            'package_id.exists' => "Please select a package",
        ];
    }
}

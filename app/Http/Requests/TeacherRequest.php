<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;

class TeacherRequest extends Request
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
            'first_name'       => 'string|min:2|max:30',
            'last_name'        => 'string|min:2|max:30',
            'second_name'        => 'string|min:2|max:30',
            'email'            => [
                'email',
                'max:255',
                Rule::unique('users')
                    ->ignore($this->user()->id)
            ],
            'password'         => 'max:20|min:8|regex:/(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]/',
        ];

    }

    public function messages()
    {
        return [
            'email.unique'           => 'Email is not available',
            'current_password.regex' => 'The password must include both uppercase and lowercase letters and at least one number',
            'password.regex'         => 'The password must include both uppercase and lowercase letters and at least one number'
        ];

    }
}

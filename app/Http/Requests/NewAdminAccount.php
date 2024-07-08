<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewAdminAccount extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'terms' => 'required',
            'username' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ];
    }

    public function messages(): array
    {
        return [
            'password.required' => 'Password is required.',
            'password.min' => 'Password must have at least 6 characters.',
            'password.confirmed' => 'Confirm passwords do not match.',

            'terms.required' => 'You must agreed with our terms.',

            'username.required' => 'username is required.',
            'username.string' => 'username must be a string of characters.',

            'email.required' => 'email is required.',
            'email.email' => 'your email must true format of email.',
            'email.unique' => 'this email was used for register before!'
        ];
    }
}

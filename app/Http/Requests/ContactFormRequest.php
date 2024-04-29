<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
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

            'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'password' => 'required|string|min:8|confirmed',
        'age' => 'required|integer|min:18',
        'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'bio' => 'nullable|string|max:255',
        'interests' => 'nullable|array',
        'interests.*' => 'in:sports,music,movies',
        'gender' => 'required|in:male,female',
        'country' => 'required|string',
        'phone' => 'required|string',
        'address' => 'required|string|max:255',
        'postal_code' => 'required|string|max:20',
        'website' => 'nullable|url',
        'agree' => 'accepted',

        ];
    }
}

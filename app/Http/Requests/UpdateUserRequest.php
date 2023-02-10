<?php

namespace App\Http\Requests;

class UpdateUserRequest extends UserRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return parent::authorize();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        $rules = parent::rules();
        $rules['email'] = 'nullable|string|email|unique:user,email';
        $rules['name'] = 'nullable|string';
        $rules['lastName'] = 'nullable|string';
        $rules['age'] = 'nullable|integer';
        return $rules;
    }
}

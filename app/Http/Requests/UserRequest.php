<?php


namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    protected array $genders = ['Female', 'Male', 'Intersex'];

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'email' => 'required|string|email|unique:users,email',
            'name' => 'required|string',
            'lastName' => 'required|string',
            'age' => 'required|integer',
            'gender' => 'nullable|string',
        ];
    }
}
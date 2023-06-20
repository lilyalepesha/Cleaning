<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 *
 */
class RegisterRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'min:3', 'max:50'],
            'email' => ['required', 'email', 'unique:users', 'max:50'],
            'password' => ['required', 'confirmed', 'min:8', 'max:50'],
            'phone' => ['required', 'regex:/^\+375\(\d{2}\)\d{2}-\d{2}-\d{3}$/', 'min:13'],
        ];
    }

    /**
     * @return string[]
     */
    public function messages()
    {
        return [
          'name.required' => 'Введите имя',
            'name.min' => 'Минимум 3 символа',
            'name.max' => 'Максимум 50 символа',
            'email.required' => 'Введите email',
            'email.unique' => 'Такой email уже существует',
            'email.email' => 'Введите email',
            'password.confirmed' => 'Пароли не совпадают',
            'phone.regex' => 'Формат номер телефона должен быть такой: +375999999999',
            'phone.min' => 'Минимальная длина номера телефона 13 символов',
            'phone.required' => 'Введите номер телефон'
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSubcriptionRequest extends FormRequest
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
            'title' => 'required|max:255|string',
            'description' => 'required|string',
            'breakfast'=>'required|string|max:255',
            'lunch'=>'required|string|max:255',
            'dinner'=>'required|string|max:255',
            'user_id'=>'required|integer|exists:users,id',
        ];
    }
}

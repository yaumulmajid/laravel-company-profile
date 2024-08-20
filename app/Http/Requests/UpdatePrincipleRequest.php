<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePrincipleRequest extends FormRequest
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
            'name'=>['sometimes','string','max:255'],
            'subtitle'=>['sometimes','string','max:255'],
            'thumbnail'=>['sometimes','image','mimes:jpg,png,jpeg'],
            'icon'=>['sometimes','image','mimes:jpg,png,jpeg'],
        ];
    }
}

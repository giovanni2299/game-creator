<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreWeaponRequest extends FormRequest
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
            'name' => 'required|max:50|string',
            'url_img' => 'nullable|max:500|url',
            'category' => 'required|max:50|string',
            'weight' => 'required|max:10|string',
            'cost' => 'required|max:12|string',
            'damage_dice' => 'nullable|max:5|string',
        ];
    }
}

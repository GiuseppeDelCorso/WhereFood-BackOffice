<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRestaurantRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "business_name" => ["required", "min:5", "max:255"],
            "address" => ["required", "min:5", "max:255"],
            "P_IVA" => ["required", ""],
            "phone" => ["required", "min:5", "max:255"],
            "types" => []
        ];
    }
}

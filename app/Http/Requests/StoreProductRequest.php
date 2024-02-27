<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\File;

class StoreProductRequest extends FormRequest
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
            "name" => "required|max:50",
            "image" => ["required", File::image()->max("2mb")],
            "ingredients" => "required|min:1",
            "description" => "required|min:1",
            "type_id" => "required",
            "price" => "required",
            "visibility" => "required",

        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateBookRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'title' => "string|required|max:255",
            'description' => "string|required|nullable",
            'isbn' => "string|unique:books,isbn|required",
            'published_year' => "nullable|integer|between:1000,2026",
            'author_id' => "required|exists:authors,id",
            'category_id' => "required|exists:categories,id"



        ];
    }
}

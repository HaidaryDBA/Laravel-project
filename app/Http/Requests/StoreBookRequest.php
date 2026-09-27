<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreBookRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => "required|string|max:255",
            'description' => "nullable|string",
            'isbn' => 'required|string|unique:books,isbn',
            'published_year' => 'nullable|integer|min:1000|max:2026',
            'author_id' => 'required|exists:authors,id',
            'category_id' => 'required|exists:categories,id',

        ];
    }
}

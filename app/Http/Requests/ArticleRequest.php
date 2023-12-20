<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => ['required', 'min:5'],
            'short_description' => ['required', 'min:10'],
            'description' => ['required', 'min:10'],
            'picture' => ['nullable', 'url:http,https'],
        ];
    }
}

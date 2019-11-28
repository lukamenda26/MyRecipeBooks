<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookPost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function attributes()
    {
        return [
            'name' => '書籍名',
            'link' => 'URL',
            'comment' => 'コメント',
        ];
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'max:100'],
            'link' => ['nullable', 'url', 'max:255'],
            'comment' => ['required', 'max:255'],
        ];
    }
}

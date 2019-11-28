<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MakePost extends FormRequest
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
            'img_pass' => '画像',
            'title' => 'レシピ名',
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
            'img_pass' => ['image','max:255'],
            'title' => ['max:255'],
            'comment' => ['required', 'max:255'],
        ];
    }
}

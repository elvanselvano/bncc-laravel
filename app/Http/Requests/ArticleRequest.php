<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //     'author' => 'required',
            //     'title' => 'required|max:255',
            //     'content' => 'required',
            //     'image' => 'required',
        ];
    }

    public function messages()
    {
        // return  [
        // //     'title.required'  => 'Please insert the title of the article.',
        // //     'title.max' => ...
        // //     ...
        // // ]
        // ]
    }
}

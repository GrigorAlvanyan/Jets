<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlocksRequest extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|min:3|max:255',
            'slug' => 'unique:blocks',
            'show_on_home' => 'required|integer|min:1|max:1',
            'summary' => 'required',
            'youtube_link' => 'required|min:1|max:255',
            'url' => 'required|url',
            'url_title' => 'required|min:3|max:255',
            'image_id' => 'required|integer',

        ];
    }
}

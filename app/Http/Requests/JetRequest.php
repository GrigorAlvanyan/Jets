<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JetRequest extends FormRequest
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
//            'image' => '',
            'title' => 'required|min:3|max:10',
//            'slug' => 'required|max:191',
            'is_top' => 'required|max:1',
            'manufacturer' => 'required|max:255',
            'speed' => 'required|max:255',
            'height' => 'required|max:255',
            'range' => 'required|max:255',
//            'created_at' => 'required'
        ];

    }
}

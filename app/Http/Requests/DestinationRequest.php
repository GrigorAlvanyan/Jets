<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DestinationRequest extends FormRequest
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
            'slug' => 'unique:destinations',
            'show_on_home' => 'required|integer|min:1|max:1',
            'is_top' => 'required|integer|min:1|max:1',
            'summary' => 'required',
            'body' => 'required',
            'image_id' => 'required|integer',
            'continent_id' => 'required|integer|exists:continents,id',
            'country_id' => 'required|integer|exists:countries,id',

        ];
    }
}

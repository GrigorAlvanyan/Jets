<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CabinSpecificationsRequest extends FormRequest
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
            'jet_id' => 'required|integer|exists:jets,id',
            'image_id' => 'required|integer',
            'title' => 'required|min:3|max:255',
            'summary' => 'required',
            'seats' => 'required|integer',
            'suitcase' => 'required|integer',
            'carry_on' => 'required|integer',
            'manufacturer' => 'required|min:2|max:255',
            'height' => 'required|min:2|max:255',
            'speed' => 'required|min:2|max:255'
        ];
    }
}

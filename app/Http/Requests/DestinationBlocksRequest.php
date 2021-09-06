<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DestinationBlocksRequest extends FormRequest
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
            'destination_id' => 'required|integer',
            'image_id' => 'integer',
            'title' => 'required|min:3|max:255',
            'summary' => 'required',
            'position' => 'required|integer',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuotesResquest extends FormRequest
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
            'from' => 'required|max:255',
            'to' => 'required|max:255',
            'when' => 'required|max:255',
//            'time' => '',
            'passangers_count' => 'required|integer',
            'adults' => 'required|integer',
            'childrens' => 'required|integer',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TempLambRequest extends FormRequest
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
            'nameOfFile' => 'required',
            'item' => 'required',
            'fileToUpload' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nameOfFile.required' => 'Description is required',
            'fileToUpload.required' => 'File is required',
            'item.required' => 'Item is required',
        ];
    }
}

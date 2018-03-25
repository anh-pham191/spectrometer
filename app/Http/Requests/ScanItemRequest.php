<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ScanItemRequest extends FormRequest
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
            'name' => 'required',
            'image' => 'required',
            'type' => 'required',
            'location' => 'required',
            'information' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Name is required',
            'image.required' => 'Image is required',
            'type.required' => 'Type is required',
            'cut_location.required' => 'Cut location is required',
            'information.required' => 'Other information is required',
        ];
    }
}

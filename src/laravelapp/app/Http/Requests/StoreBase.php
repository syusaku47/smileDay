<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBase extends FormRequest
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
            'base_name' => 'required|max:60',
            'potal_number' => 'required|max:7',
            'address' => 'required|max:255',
            'phone_number' => 'required|max:9',
            'base_type_id' => 'required'
        ];
    }
}

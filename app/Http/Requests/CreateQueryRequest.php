<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreateQueryRequest extends FormRequest
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
            'name' => 'required|alpha_spaces',
            'email' => 'required|Email',
            'phoneNum' => 'required|numeric',
            'program' => 'required',
            'serviceArea' => 'required',
            'workArea' => 'required',
            'problemDescription' => 'required',
        ];
    }
}

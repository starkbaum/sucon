<?php

namespace App\Http\Requests;

class CustomerRequest extends Request
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
            'name'          => 'required|unique:customers|min:5|max:50',
            'city'          => 'required|min:2|max:1000',
            'zipCode'       => 'required',
            'street'        => 'required',
            'email'         => 'required',
            'phoneNo'       => 'required',
        ];
    }
}

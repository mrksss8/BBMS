<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class ResidentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'image' => 'required',
            'last_name' => 'required|regex:/[a-zA-Z\s]+/',
            'first_name' => 'required|regex:/[a-zA-Z\s]+/',
            'middle_name' => 'required|regex:/[a-zA-Z\s]+/',
            'suffix_name' => 'required|regex:/[a-zA-Z\s]+/',
            'gender' => 'required|string',
            'birthday' => 'required|before:today',
            'birthplace'=> 'required|string',
            'civil_status' =>'required|string',
            'house_number' => 'required',
            'purok' => 'required|string',
            'street' => 'required|string',
            'occupation' => 'required|string',
            'student' => 'required|string',

           
            'type_of_house' =>'required|string',
            'pwd' => 'required|string',
            'membership_prog' => 'required|string',
        ];
    }

    public function messages()
{
    return [
        
        'image.required' => 'Capture Image Required',
    ];
}
}

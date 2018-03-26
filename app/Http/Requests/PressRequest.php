<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class PressRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // only allow updates if the user is logged in
        return \Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'print_method_id' => 'required|integer', 
            'click_black' => 'required|numeric', 
            'click_colour' => 'required|numeric', 
            'weight_min' => 'required|integer', 
            'weight_max' => 'required|integer', 
            'grip_top' => 'required|integer', 
            'grip_bottom' => 'required|integer', 
            'grip_sides' => 'required|integer', 
            'size_min_id' => 'required|integer', 
            'size_max_id' => 'required|integer'
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            //
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            //
        ];
    }
}

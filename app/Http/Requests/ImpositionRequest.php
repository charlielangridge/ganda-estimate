<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class ImpositionRequest extends FormRequest
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
            // 'name' => 'required|min:5|max:255'
            'press_id' => 'required|integer', 
            'impose_type_id' => 'required|integer', 
            'finished_size_id' => 'required|integer', 
            'sheet_size_id' => 'required|integer', 
            'duplex' => 'required|boolean', 
            'orientation' => 'required', 
            'rows' => 'required|integer', 
            'columns' => 'required|integer', 
            'bleed_x' => 'required|integer', 
            'bleed_y' => 'required|integer', 
            'gutter' => 'required|integer', 
            'marks' => 'required|boolean'
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

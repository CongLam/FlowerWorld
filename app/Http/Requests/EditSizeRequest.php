<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditSizeRequest extends FormRequest
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
            'size_name'=>'unique:sizes,'.$this->segment(4).',id',
            'description'=>'required',
            'status'=>'required',
        ];
    }
}

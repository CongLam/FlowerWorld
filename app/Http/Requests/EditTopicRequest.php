<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EditTopicRequest extends FormRequest
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
            ///xử lý loại trừ id hiện tại khi set trùng tên, để có thể không thay đổi tên mà ấn submit luôn
            //$this->segment(4): vị trí thứ 4 trong url tính từ admin-> (id)     ShopDienThoai/admin/category/edit/9
            'topic_name'=>'unique:topics,'.$this->segment(4).',id',
            'description'=>'required',
            'status'=>'required',
        ];
    }
}

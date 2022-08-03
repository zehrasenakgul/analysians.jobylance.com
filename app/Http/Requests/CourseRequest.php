<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
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
            'name' => 'required|max:255',
            'desc' => "required",
            "url" => "required",
            "price" => "required",
            "category_id" => "required",
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Bu alan zorunludur.',
            'desc.required' => 'Bu alan zorunludur.',
            'url.required' => 'Bu alan zorunludur.',
            'price.required' => 'Bu alan zorunludur.',
            'category_id.required' => 'Bu alan zorunludur.',
        ];
    }
}

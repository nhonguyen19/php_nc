<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateQuestionRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'id'=>['required'],
            'category'=>['required'],
            'category_id'=>['required'],
            'question'=>['required','unique:questions'],
            'a'=>['required'],
            'b'=>['required'],
            'c'=>['required'],
            'd'=>['required'],
        ];
    }
    public function messages()
    {
        return [
            'question.required'=>'Tên câu hỏi không được bỏ trống',
            'question.unique'=>'Têm câu hỏi đã tồn tại',
            'a.required'=>'Câu trả lời 1 không được bỏ trống',
            'b.required'=>'Câu trả lời 2 không được bỏ trống',
            'c.required'=>'Câu trả lời 3 không được bỏ trống',
            'd.required'=>'Câu trả lời 4 không được bỏ trống',
        ];
    }
}

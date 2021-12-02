<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreArticleRequest extends FormRequest
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
            'title' => 'required',
            'category_id' => 'required',
            'photo' => 'required',
            'description' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'ခေါင်းစဥ်ဖြည့်စွက်ပေးပါ',
            'category_id.required' => 'category လိုအပ်နေပါသည်',
            'photo.required' => 'ပုံထည့်ပေးရန်လိုအပ်နေသည်',
            'description.required' => 'ဖော်ပြချက်ကို ပြည့်စုံစွာထည့်ပေးပါ'
        ];
    }
}

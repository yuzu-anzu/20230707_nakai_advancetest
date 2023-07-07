<?php

namespace App\Http\Requests;

use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'fullname' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string'],
            'email' => ['required', 'string','email', 'max:255'],
            'zip01' => ['required','numeric'],
            'address' => ['required', 'string', 'max:255'],
            'building_name' => ['string', 'max:255'],
            'opinion' => ['required', 'string', 'max:120'],
        ];
    }

    public function messages()
    {
        return [
            'fullname.reguired' => '名前を入力してください',
            'fullname.string' => '名前を文字列で入力してください',
            'fullname.max' => '名前を255文字で入力してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => '有効なメールアドレスを入力してください',
            'email.max' => 'メールアドレスを255文字以下で入力してください',
            'zip01.required' => '郵便番号を入力してください',
            'zip01.numeric' => '数字で入力してください',
            'address.required' => '住所の入力をしてください',
            'address.string' => '住所を文字列で入力してください',
            'address.max' => '住所を255文字以内で入力してください',
            'building_name' => '建物名を入力してください',
            'building_name' => '建物名を255文字以内で入力してください',
            'opinion.required' => 'ご意見の入力をしてください',
            'opinion.string' => 'ご意見を文字列で入力してください',
            'opinion.max' => 'ご意見は120文字以内で入力してください',
        ];
    }
    
    public function prepareForValidation()
    {
        $this->merge(['zip01' => mb_convert_kana($this->zip01, 'as')]);
    }
}

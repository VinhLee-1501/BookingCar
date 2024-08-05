<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $rules = [
            'name' => 'required|string|max:50',
            'email' => 'required|email|unique:customers,email',
            'phone' => 'required|string|max:13',
            'address' => 'required|string|max:255',
            'cccd' => [
                'required',
                'regex:/^\d{12}$/', // Đảm bảo đúng 12 chữ số
                function ($attribute, $value, $fail) {
                    if ($value && strlen($value) != 12) {
                        $fail('Số căn cước công dân không đúng định dạng.');
                    }
                }
            ],
            'password' => 'required|string|min:6',
            'birthday' => 'required|date',
            'gender' => 'required|integer|in:0,1',
        ];
        if ($this->isMethod('put') || $this->isMethod('patch')) {
            $rules['email'] = 'required|email';
            $rules['password'] = 'nullable|string|min:6';
        };
        return $rules;
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên khách hàng là bắt buộc.',
            'name.string' => 'Tên khách hàng phải là chuỗi.',
            'name.max' => 'Tên khách hàng không được vượt quá 50 ký tự.',
            'email.required' => 'Địa chỉ email là bắt buộc.',
            'email.email' => 'Địa chỉ email không hợp lệ.',
            'email.unique' => 'Địa chỉ email đã được sử dụng.',
            'phone.required' => 'Số điện thoại là bắt buộc.',
            'phone.string' => 'Số điện thoại phải là chuỗi.',
            'phone.max' => 'Số điện thoại không được vượt quá 13 ký tự.',
            'address.required' => 'Địa chỉ là bắt buộc.',
            'address.max' => 'Địa chỉ không được vượt quá 255 ký tự.',
            'cccd.required' => 'Số căn cước công dân là bắt buộc.',
            'cccd.regex' => 'Số căn cước công dân phải là chuỗi gồm 12 chữ số.',
            'password.required' => 'Mật khẩu là bắt buộc.',
            'password.min' => 'Mật khẩu có ít nhất 6 kí tự',
            'birthday.required' => 'Ngày sinh là bắt buộc',
            'birthday.date' => 'Ngày sinh không hợp lệ.',
            // 'birthday.after_or_equal' => 'Ngày sinh phải là ít nhất 6 năm trước.',
            'gender.in' => 'Giới tính là bắt buộc.',
        ];
    }
}

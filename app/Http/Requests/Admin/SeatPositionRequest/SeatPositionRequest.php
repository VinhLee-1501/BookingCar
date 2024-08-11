<?php

namespace App\Http\Requests\Admin\SeatPositionRequest;

use Illuminate\Foundation\Http\FormRequest;

class SeatPositionRequest extends FormRequest
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
        return [
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'status' => 'required|in:0,1',
            'cars_id' => 'required|exists:cars,id'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên ghế là bắt buộc.',
            'price.required' => 'Giá là bắt buộc.',
            'price.numeric' => 'Giá phải là một số.',
            'status.required' => 'Trạng thái là bắt buộc.',
            'status.in' => 'Trạng thái không hợp lệ.',
            'cars_id.required' => 'Xe là bắt buộc.',
            'cars_id.exists' => 'Xe được chọn không tồn tại.'
        ];
    }
}

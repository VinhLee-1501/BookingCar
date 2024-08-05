<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarRequest extends FormRequest
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
            'license_plates' => 'required|string|max:20|unique:cars,license_plates',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'category_id' => 'nullable|exists:categories,id',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Tên xe là bắt buộc.',
            'license_plates.required' => 'Biển số xe là bắt buộc.',
            'license_plates.unique' => 'Biển số xe đã tồn tại.',
            'image.required' => 'Ảnh xe là bắt buộc.',
            'image.image' => 'Tệp phải là ảnh.',
            'image.mimes' => 'Ảnh phải có định dạng jpeg, png, hoặc jpg.',
            'image.max' => 'Ảnh không được vượt quá 2MB.',
            'category_id.exists' => 'Danh mục không tồn tại.',
        ];
    }
}

<?php

namespace App\Http\Requests\admin\TheRideRequest;

use Illuminate\Foundation\Http\FormRequest;

class StoreTheRideRequest extends FormRequest
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
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'time_to_go' => 'required|date_format:Y-m-d\TH:i',
            'estimated_arrival_time' => 'required|date_format:Y-m-d\TH:i|after:time_to_go',
            'estimated_departure_time' => 'required|date_format:Y-m-d\TH:i|after:time_to_go',
            'price' => 'required|numeric|min:0',
            'carriage_way_id' => 'required|exists:carriage_ways,id',
//            'car_id' => 'required|exists:cars,id',
            'start_location' => 'required|string|max:255',
            'end_location' => 'required|string|max:255',
        ];
    }

    /**
     * Get the custom messages for validation errors.
     *
     * @return array<string, string>
     */
    public function messages()
    {
        return [
            'name.required' => 'Tên chuyến đi là bắt buộc.',
            'time_to_go.required' => 'Thời gian khởi hành là bắt buộc.',
            'time_to_go.date_format' => 'Thời gian khởi hành không đúng định dạng.',
            'estimated_arrival_time.required' => 'Thời gian dự kiến đến là bắt buộc.',
            'estimated_arrival_time.date_format' => 'Thời gian dự kiến đến không đúng định dạng.',
            'estimated_arrival_time.after' => 'Thời gian dự kiến đến phải sau thời gian khởi hành.',
            'estimated_departure_time.required' => 'Thời gian dự kiến khởi hành là bắt buộc.',
            'estimated_departure_time.date_format' => 'Thời gian dự kiến khởi hành không đúng định dạng.',
            'estimated_departure_time.after' => 'Thời gian dự kiến khởi hành phải sau thời gian dự kiến đến.',
            'price.required' => 'Giá là bắt buộc.',
            'price.numeric' => 'Giá phải là số.',
            'price.min' => 'Giá không được nhỏ hơn 0.',
            'carriage_way_id.required' => 'Đường vận tải là bắt buộc.',
            'carriage_way_id.exists' => 'Đường vận tải không tồn tại.',
//            'car_id.required' => 'Xe là bắt buộc.',
//            'car_id.exists' => 'Xe không tồn tại.',
            'start_location.required' => 'Vị trí bắt đầu là bắt buộc.',
            'start_location.string' => 'Vị trí bắt đầu phải là chuỗi ký tự.',
            'start_location.max' => 'Vị trí bắt đầu không được vượt quá 255 ký tự.',
            'end_location.required' => 'Vị trí kết thúc là bắt buộc.',
            'end_location.string' => 'Vị trí kết thúc phải là chuỗi ký tự.',
            'end_location.max' => 'Vị trí kết thúc không được vượt quá 255 ký tự.',
        ];
    }
}

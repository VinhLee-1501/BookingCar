@extends('layouts.client.app')

@section('content')
    <!-- Form Start -->
    <div class="container ">
        <div class="row">
            <div class="col-12 col-md-4 mb-4">
                <div class="card">
                    <div class="card-header">
                        Bộ lộc tìm kiếm
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <ul class="list-group list-group-flush">
                                <h6>Giờ đi</h6>
                                <div class="d-flex p-2">
                                    <input type="checkbox" name="" id="" style="width:5%;">
                                    <h7 class="ms-2 mt-1">Sáng sớm 0:00 - 6:00 giờ</h7>
                                </div>
                                <div class="d-flex p-2">
                                    <input type="checkbox" name="" id="" style="width:5%;">
                                    <h7 class="ms-2 mt-1">Buổi sáng 6:00 - 12:00 giờ</h7>
                                </div>
                                <div class="d-flex p-2">
                                    <input type="checkbox" name="" id="" style="width:5%;">
                                    <h7 class="ms-2 mt-1">Buổ chiều 12:00 - 18:00 giờ</h7>
                                </div>
                                <div class="d-flex p-2">
                                    <input type="checkbox" name="" id="" style="width:5%;">
                                    <h7 class="ms-2 mt-1">Buổi tối 18:00 - 24:00 giờ</h7>
                                </div>
                            </ul>
                        </li>
                        <li class="list-group-item">
                            <h6>Loại xe</h6>
                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off"
                                       checked>
                                <label class="btn btn-outline-primary" for="btnradio1">Ghế</label>
                                <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio2">Giường</label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-8 p-4">
                @foreach ($ridefilterData as $ridefilter)
                <h5>Chuyến từ {{$ridefilter->name}}</h5>
                <div class="card mb-5">
                    <div class="card-header d-flex justify-content-between text-center">
                        <div>
                            <h5 class="text-danger">{{ Carbon\Carbon::parse($ridefilter->timeStart)->format('H:i') }}</h5>
                            <h6>{{$ridefilter->goto}}</h6>
                        </div>
                        <div>
                            <h6>Thời gian</h6>
                            <h6 class="text-success">{{$ridefilter->time}} giờ</h6>
                        </div>
                        <div>
                            <h5 class="text-danger">{{ Carbon\Carbon::parse($ridefilter->timeEnd)->format('H:i') }}</h5>
                            <h6>{{$ridefilter->gofrom}}</h6>
                        </div>
                        <div>
                            <h6 class="f-left">Chỗ trống: 15</h6>
                            <h5 class="text-danger">{{$ridefilter->price}}.000 đ</h5>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-tabs tab-custom" id="myTab-{{$ridefilter->id}}" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="seat-tab-{{$ridefilter->id}}" data-toggle="tab" href="#seat" role="tab"
                                    aria-controls="seat" aria-selected="true">Chọn ghế</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="schedule-tab-{{$ridefilter->id}}" data-toggle="tab" href="#schedule" role="tab"
                                    aria-controls="schedule" aria-selected="false">Lịch trình</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="transfer-tab-{{$ridefilter->id}}" data-toggle="tab" href="#transfer" role="tab"
                                    aria-controls="transfer" aria-selected="false">Trung chuyển</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="policy-tab-{{$ridefilter->id}}" data-toggle="tab" href="#policy" role="tab"
                                    aria-controls="policy" aria-selected="false">Chính sách</a>
                            </li>
                        </ul>
                        <div class="tab-content mt-3" id="myTabContent-{{$ridefilter->id}}">
                            <div class="tab-pane fade show active" id="seat" role="tabpanel"
                                aria-labelledby="seat-tab">
                                <a href=""><button class="btn btn-primary">Chọn chuyến</button></a>
                            </div>
                            <div class="tab-pane fade" id="schedule-{{$ridefilter->id}}" role="tabpanel" aria-labelledby="schedule-tab">
                                <p>{{ Carbon\Carbon::parse($ridefilter->timeStart)->format('H:i') }} - {{$ridefilter->goto}}</p>
                                <p>{{ Carbon\Carbon::parse($ridefilter->timeEnd)->format('H:i') }} - {{$ridefilter->gofrom}}</p>
                            </div>
                            <div class="tab-pane fade" id="transfer-{{$ridefilter->id}}" role="tabpanel" aria-labelledby="transfer-tab">
                                <p>Đón/ trả tận nơi:</p>
                                <p>- Thời gian nhận khách : Trước 4 tiếng.</p>
                                <p> - Thời gian xe đón : Chuẩn bị trước 2 -3 tiếng,
                                     do mật độ giao thông trong thành phố và sẽ kết hợp đón nhiều điểm
                                     khác nhau nên thời gian đón cụ thể tài xế sẽ liên hệ hẹn giờ.</p>
                                <p>  - Hẻm nhỏ xe không quay đầu được : Xe trung chuyển sẽ đón Khách đầu hẻm/ đầu đường.</p>
                                <p>- Khu vực có biển cấm dừng đỗ xe không đón được : Xe trung chuyển sẽ đón tại vị trí gần nhất có thể.</p>
                                <p>- Hành lý : Hành lý nhỏ gọn dưới 20 kg, không vận chuyển kèm động vật , thú cưng.</p>
                            </div>
                            <div class="tab-pane fade" id="policy-{{$ridefilter->id}}" role="tabpanel" aria-labelledby="policy-tab">
                                <p>Chính sách huỷ vé</p>
                                    Chỉ được chuyển đổi vé 1 lần duy nhất

                                    Chi phí hủy vé từ 10% – 30% giá vé tùy thuộc thời gian hủy vé so với giờ khởi hành ghi trên vé và số lượng vé cá nhân/tập thể áp dụng theo các quy định hiện hành.

                                    Quý khách khi có nhu cầu muốn thay đổi hoặc hủy vé đã thanh toán, cần liên hệ với Trung tâm tổng đài 1900 6067 hoặc quầy vé chậm nhất trước 24h so với giờ xe khởi hành được ghi trên vé, trên email hoặc tin nhắn để được hướng dẫn thêm.

                                    Yêu cầu khi lên xe
                                    Có mặt tại Văn phòng/Bến xe (Địa điểm xe đón trực tiếp) trước 30 phút để làm thủ tục lên xe (đối với ngày lễ tết cần ra trước 60 phút).
                                    Không mang thức ăn/đồ uống có mùi lên xe.

                                    Không hút thuốc, không sử dụng đồ uống có cồn hoặc sử dụng chất kích thích trên xe.

                                    Không mang các vật dễ cháy nổ lên xe.

                                    Không vứt rác trên xe.

                                    Không mang động vật lên xe.

                                    Hành lý xách tay
                                    Tổng trọng lượng hành lý không vượt quá 20kg

                                    Không vận chuyển hàng hoá cồng kềnh

                                    Trẻ em dưới 6 tuổi và phụ nữ có thai
                                    Trẻ em dưới 6 tuổi, cao từ 1.3m trở xuống, cân nặng dưới 30kg thì không phải mua vé.

                                    Trong trường hợp trẻ em không thoả 1 trong 3 tiêu chí trên sẽ mua 01 vé tương đương với người lớn.

                                    Mỗi người lớn sẽ đi kèm tối đa một trẻ em.

                                    Phụ nữ có thai cần đảm bảo sức khoẻ trong suốt quá trình di chuyển.

                                    Vé đón đường
                                    Trường hợp có nhu cầu lên xe dọc đường, Quý khách vui lòng liên hệ tổng đài 19006067 để đăng kí trước ít nhất 2 tiếng so với giờ xe khởi hành và vui lòng chuẩn bị hành lý nhỏ gọn (tối đa 20kg).

                                    Lưu ý, chúng tôi chỉ hỗ trợ đón ở một số địa điểm thuận tiện nằm trên lộ trình</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>

    <!-- Form End -->
@endsection

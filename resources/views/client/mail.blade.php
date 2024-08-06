<!DOCTYPE html>
<html>
<head>
    <title>BeeCar-Đặt vé</title>
</head>
<body>
<h1>Thông tin khách hàng</h1>
<p><strong>Tên:</strong> {{ $contactData['name'] }}</p>
<p><strong>Email:</strong> {{ $contactData['email'] }}</p>
<p><strong>Số điện thoại:</strong> {{ $contactData['phone'] }}</p>
<p><strong>Chuyến xe:</strong> {{ $contactData['subject'] }}</p>
<p><strong>Ngày dự kiến đi:</strong> {{ $contactData['departure_date'] }}</p>
<p><strong>Ghi chú:</strong> {{ $contactData['message'] }}</p>
</body>
</html>

// In your Javascript (external .js resource or <script> tag)
$(document).ready(function () {
    $('.select-input-end-location').select2({
        placeholder: "Chọn điểm đến",
        allowClear: true

    });
});

$(document).ready(function () {
    $('.select-input-start-location').select2({
        placeholder: "Chọn điểm đi",
        allowClear: true

    });
});

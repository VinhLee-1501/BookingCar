document.addEventListener("DOMContentLoaded", function () {
    const aCheckBoxes = document.querySelectorAll(".aSeat-checkbox");
    const bCheckBoxes = document.querySelectorAll(".bSeat-checkbox");

    aCheckBoxes.forEach((checkbox) => {
        checkbox.addEventListener("change", function () {
            const seatIndex = this.value;
            const aImg = document.getElementById(`aSeat-image-${seatIndex}`);

            if (this.checked) {
                aImg.src = "https://futabus.vn/images/icons/seat_selecting.svg"; // Hình ảnh cho trạng thái được chọn
            } else {
                aImg.src = "https://futabus.vn/images/icons/seat_active.svg"; // Hình ảnh cho trạng thái không được chọn
            }
        });
    });
    bCheckBoxes.forEach((checkbox) => {
        checkbox.addEventListener("change", function () {
            const seatIndex = this.value;
            const bImg = document.getElementById(`bSeat-image-${seatIndex}`);

            if (this.checked) {
                bImg.src = "https://futabus.vn/images/icons/seat_selecting.svg"; // Hình ảnh cho trạng thái được chọn
            } else {
                bImg.src = "https://futabus.vn/images/icons/seat_active.svg"; // Hình ảnh cho trạng thái không được chọn
            }
        });
    });
});

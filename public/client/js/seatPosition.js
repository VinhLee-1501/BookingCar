let selectedSeats = [];
let selectedSeatIds = [];
let totalPrice = 0;
const maxSeats = 4;

document.querySelector('form').addEventListener('submit', function (event) {
    console.log('Selected Seats before submit:', selectedSeats);
    console.log('Total Price before submit:', totalPrice);
    document.getElementById('selectedSeats').value = JSON.stringify(selectedSeats);
    document.getElementById('totalPrice').value = totalPrice;
});

function updateSeat(seatld, seatPrice, seatName) {
    console.log('Checkbox changed for seat:', seatld);
    const seatCheckbox = document.getElementById('seat' + seatld);
    const seatImg = document.getElementById('seat-img-' + seatld);

    if (seatCheckbox.checked) {
        if (selectedSeats.length < maxSeats) {
            seatImg.src = 'https://futabus.vn/images/icons/seat_selecting.svg';
            selectedSeats.push(seatName);
            selectedSeatIds.push(seatld);
            totalPrice += parseFloat(seatPrice);
        } else {
            // If already reached max seats, deselect checkbox
            seatCheckbox.checked = false;
        }
    } else {
        if (seatImg.src.includes('seat_selecting.svg')) {
            seatImg.src = 'https://futabus.vn/images/icons/seat_active.svg'; // Green (back to available)
        }
        const index = selectedSeats.indexOf(seatName);
        const id = selectedSeatIds.indexOf(seatld);
        if (index > -1) {
            selectedSeats.splice(index, 1);
            totalPrice -= parseFloat(seatPrice);
        }
        if (id > -1) {
            selectedSeatIds.splice(id, 1);
        }
    }

    document.getElementById('seat-count').innerText = selectedSeats.length + ' Ghế';
    document.getElementById('seat-names').innerText = selectedSeats.join(', ');
    let totalPriceElements = document.getElementsByClassName('total-price');
    if (totalPriceElements.length > 0) {
        console.log('Total price element found:', totalPriceElements[0]);
        totalPriceElements[0].innerText = totalPrice + '.000đ';
    } else {
        console.log('Total price element not found');
    }

    let allSeatCheckboxes = document.querySelectorAll('input[type="checkbox"]');
    allSeatCheckboxes.forEach(function (checkbox) {
        if (selectedSeats.length >= maxSeats && !checkbox.checked) {
            checkbox.parentElement.classList.add('cursor-not-allowed');
        } else {
            checkbox.parentElement.classList.remove('cursor-not-allowed');
        }
    });
    document.getElementById('selectedSeats').value = JSON.stringify(selectedSeats);
    document.getElementById('totalPrice').value = totalPrice;
    document.getElementById('seatID').value = JSON.stringify(selectedSeatIds);
}

const seatCheckboxes = document.querySelectorAll('input[type="checkbox"]');

// Payment

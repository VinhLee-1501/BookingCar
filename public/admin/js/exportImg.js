document.getElementById('export-btn').addEventListener('click', function() {
    html2canvas(document.querySelector('.exportImg')).then(canvas => {
      // Chuyển đổi canvas thành URL hình ảnh và tạo liên kết tải xuống
      const link = document.createElement('a');
      link.href = canvas.toDataURL('image/png');
      link.download = 'ticket.png'; // Đặt tên file hình ảnh mong muốn
      link.click();
    });
  });
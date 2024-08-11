// Chức năng tìm kiếm
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchInput');
    searchInput.addEventListener('input', function() {
        const query = searchInput.value;
        const searchUrl = document.querySelector('meta[name="search-user"]').getAttribute('content');
        console.log(searchUrl);
        fetch(`${searchUrl}?search=${query}`)
            .then(response => response.json())
            .then(data => {
                const tbody = document.querySelector('#search-table tbody');
                tbody.innerHTML = data.html;
                console.log(tbody.innerHTML);

            });
    });
});
// Chức năng tìm kiếm
document.addEventListener('DOMContentLoaded', function() {
    const searchInputTicket = document.getElementById('searchInput');
    searchInputTicket.addEventListener('input', function() {
        const queryTicket = searchInputTicket.value;
        const searchUrlTicket = document.querySelector('meta[name="search-ticket"]').getAttribute('content');
        console.log(searchUrlTicket);
        fetch(`${searchUrlTicket}?search=${queryTicket}`)
            .then(response => response.json())
            .then(data => {
                const tbody = document.querySelector('#search-table tbody');
                tbody.innerHTML = data.html;
                console.log(tbody.innerHTML);

            });
    });
});
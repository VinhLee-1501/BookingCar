<!-- Search Start -->
<div class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">
    <div class="container">
        <div class="row g-2">
            <div class="col-md-12">
                <form action="{{ route('user.booking')}}" method="get">
                    @csrf
                    <div class="row g-2 ">

                        <div class="col-md-3">
                            <select name="start[]" class="form-select form-select-lg mb-3 select-input-start-location"
                                    multiple="multiple">
                                {!! \App\Helper\Client\SearchTheRides::searchStartLocation() !!}
                            </select>
                        </div>
                        <div class="col-md-3 ">
                            <select name="end[]" class="form-select select-input-end-location" multiple="multiple">
                                {!! \App\Helper\Client\SearchTheRides::searchEndLocation() !!}
                            </select>
                        </div>
                        <div class="col-md-3">
                            <input type="date" class="form-control border-0 py-3" placeholder="Chọn ngày đi"
                                   name="departureDate">
                        </div>
                        <div class="col-md-3">
                            <button class="btn btn-secondary border-0 w-100 py-3">Tìm chuyến xe</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- Search End -->

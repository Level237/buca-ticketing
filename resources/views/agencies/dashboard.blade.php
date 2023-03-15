@extends('layouts.main')

@section("title")
Buca Dashboard
@endsection

@section('content')
<div class="row mb-3 align-items-center">
    <div class="col-6 col-lg-9">
        <h1 class="h2">
            Ticketing

        </h1>
    </div>
    <div class="col-6 col-lg-3">
        <a href="{{ route('ticket.date-of-travel') }}">
        <button type="button" class="btn buca-color p-2" data-bs-toggle="modal" data-bs-target="#createKeyModal" style="padding-left:22px;padding-right:12px">
            <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" height="14" width="14" class="me-1"><path d="M0,12a1.5,1.5,0,0,0,1.5,1.5h8.75a.25.25,0,0,1,.25.25V22.5a1.5,1.5,0,0,0,3,0V13.75a.25.25,0,0,1,.25-.25H22.5a1.5,1.5,0,0,0,0-3H13.75a.25.25,0,0,1-.25-.25V1.5a1.5,1.5,0,0,0-3,0v8.75a.25.25,0,0,1-.25.25H1.5A1.5,1.5,0,0,0,0,12Z" style="fill: currentColor"></path></svg>
            {{ __("Add Ticket")}}
        </button>
    </a>
    </div>

</div>

<div class="row">
    <div class="col-lg-6 col-xxl-3 d-flex">

        <!-- Card -->
        <div class="card border-0 flex-fill w-100">
            <div class="card-body">
                <div class="row">
                    <div class="col">

                        <!-- Title -->
                        <h5 class="text-uppercase text-muted fw-semibold mb-2">
                            Tickets
                        </h5>

                        <!-- Subtitle -->
                        <h2 class="mb-0">
                            6 328
                        </h2>
                    </div>
                    <div class="col-auto">

                        <!-- Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-ticket-detailed text-buca-theme" viewBox="0 0 16 16"> <path d="M4 5.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5Zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5ZM5 7a1 1 0 0 0 0 2h6a1 1 0 1 0 0-2H5Z"/> <path d="M0 4.5A1.5 1.5 0 0 1 1.5 3h13A1.5 1.5 0 0 1 16 4.5V6a.5.5 0 0 1-.5.5 1.5 1.5 0 0 0 0 3 .5.5 0 0 1 .5.5v1.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 11.5V10a.5.5 0 0 1 .5-.5 1.5 1.5 0 1 0 0-3A.5.5 0 0 1 0 6V4.5ZM1.5 4a.5.5 0 0 0-.5.5v1.05a2.5 2.5 0 0 1 0 4.9v1.05a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-1.05a2.5 2.5 0 0 1 0-4.9V4.5a.5.5 0 0 0-.5-.5h-13Z"/> </svg>
                    </div>
                </div> <!-- / .row -->
            </div>
            <div class="card-footer">
                <div class="row justify-content-between">
                    <div class="col-auto">

                        <!-- Label -->
                        <p class="fs-6 text-muted text-uppercase mb-0">
                            {{ __("This week")}}
                        </p>

                        <!-- Comment -->
                        <p class="fs-5 fw-bold mb-0">
                            200
                        </p>
                    </div>
                    <div class="col text-end text-truncate">

                        <!-- Label -->
                        <p class="fs-6 text-muted text-uppercase mb-0">
                            {{ __("Monthly")}}
                        </p>

                        <!-- Comment -->
                        <p class="fs-5 fw-bold mb-0">
                            1050
                        </p>
                    </div>
                </div> <!-- / .row -->
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-xxl-3 d-flex">

        <!-- Card -->
        <div class="card border-0 flex-fill w-100">
            <div class="card-body">
                <div class="row">
                    <div class="col">

                        <!-- Title -->
                        <h5 class="text-uppercase text-muted fw-semibold mb-2">
                            {{ __("Passengers")}}
                        </h5>

                        <!-- Subtitle -->
                        <h2 class="mb-0">
                            6,328
                        </h2>
                    </div>
                    <div class="col-auto">

                        <!-- Icon -->
                        <svg viewbox="0 0 24 24" height="30" width="30" class="text-buca-theme" xmlns="http://www.w3.org/2000/svg"><path d="M2.250 6.000 A2.250 2.250 0 1 0 6.750 6.000 A2.250 2.250 0 1 0 2.250 6.000 Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path><path d="M4.5,9.75A3.75,3.75,0,0,0,.75,13.5v2.25h1.5l.75,6H6" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path><path d="M17.250 6.000 A2.250 2.250 0 1 0 21.750 6.000 A2.250 2.250 0 1 0 17.250 6.000 Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path><path d="M19.5,9.75a3.75,3.75,0,0,1,3.75,3.75v2.25h-1.5l-.75,6H18" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path><path d="M9.000 3.750 A3.000 3.000 0 1 0 15.000 3.750 A3.000 3.000 0 1 0 9.000 3.750 Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path><path d="M17.25,13.5a5.25,5.25,0,0,0-10.5,0v2.25H9l.75,7.5h4.5l.75-7.5h2.25Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path></svg>
                    </div>
                </div> <!-- / .row -->
            </div>
            <div class="card-footer">
                <div class="row justify-content-between">
                    <div class="col-auto">

                        <!-- Label -->
                        <p class="fs-6 text-muted text-uppercase mb-0">
                            {{ __("This week")}}
                        </p>

                        <!-- Comment -->
                        <p class="fs-5 fw-bold mb-0">
                            200
                        </p>
                    </div>
                    <div class="col text-end text-truncate">

                        <!-- Label -->
                        <p class="fs-6 text-muted text-uppercase mb-0">
                            {{ __("Monthly")}}
                        </p>

                        <!-- Comment -->
                        <p class="fs-5 fw-bold mb-0">
                            1050
                        </p>
                    </div>
                </div> <!-- / .row -->
            </div>
        </div>
    </div>

    <div class="col-lg-6 col-xxl-3 d-flex">

        <!-- Card -->
        <div class="card border-0 flex-fill w-100">
            <div class="card-body">
                <div class="row">
                    <div class="col">

                        <!-- Title -->
                        <h5 class="text-uppercase text-muted fw-semibold mb-2">
                            {{ __("sale of the day")}}
                        </h5>

                        <!-- Subtitle -->
                        <h2 class="mb-0">
                            1 250 300 Fcfa
                        </h2>
                    </div>
                    <div class="col-auto">

                        <!-- Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" height="30" width="30" class="text-buca-theme"><defs><style>.a{fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5px;}</style></defs><title>monitor-graph-line</title><polygon class="a" points="15 23.253 9 23.253 9.75 18.753 14.25 18.753 15 23.253"></polygon><line class="a" x1="6.75" y1="23.253" x2="17.25" y2="23.253"></line><rect class="a" x="0.75" y="0.753" width="22.5" height="18" rx="3" ry="3"></rect><path class="a" d="M18.75,5.253H16.717a1.342,1.342,0,0,0-.5,2.588l2.064.825a1.342,1.342,0,0,1-.5,2.587H15.75"></path><line class="a" x1="17.25" y1="5.253" x2="17.25" y2="4.503"></line><line class="a" x1="17.25" y1="12.003" x2="17.25" y2="11.253"></line><path class="a" d="M.75,11.253,4.72,7.284a.749.749,0,0,1,1.06,0L7.72,9.223a.749.749,0,0,0,1.06,0l3.97-3.97"></path><line class="a" x1="0.75" y1="15.753" x2="23.25" y2="15.753"></line></svg>
                    </div>
                </div> <!-- / .row -->
            </div>
            <div class="card-footer">
                <div class="row justify-content-between">
                    <div class="col-auto">

                        <!-- Label -->
                        <p class="fs-6 text-muted text-uppercase mb-0">
                            {{ __("This week")}}
                        </p>

                        <!-- Comment -->
                        <p class="fs-5 fw-bold mb-0">
                           10 550 000 Fcfa
                        </p>
                    </div>
                    <div class="col text-end text-truncate">

                        <!-- Label -->
                        <p class="fs-6 text-muted text-uppercase mb-0">
                            {{ __("Monthly")}}
                        </p>

                        <!-- Comment -->
                        <p class="fs-5 fw-bold mb-0">
                            50 450 000 Fcfa
                        </p>
                    </div>
                </div> <!-- / .row -->
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-xxl-3 d-flex">

        <!-- Card -->
        <div class="card border-0 buca-color flex-fill w-100">
            <div class="card-body">

                <!-- Title -->
                <h4 class="text-uppercase fw-semibold mb-2">
                    {{ __("Current Balance")}}
                </h4>

                <!-- Subtitle -->
                <h2 class="mb-0">
                    100 440 000 Fcfa
                </h2>

                <!-- Chart -->
                <div class="chart-container h-70px">
                    <canvas id="currentBalanceChart"></canvas>
                </div>
            </div>
        </div>
    </div>
</div> <!-- / .row -->

<div class="row">
    <div class="col">

        <!-- Card -->
        <div class="card border-0 flex-fill w-100" data-list='{"valueNames": ["name", "email", "id", {"name": "date", "attr": "data-signed"}, "status"], "page": 8}' id="users">
            <div class="card-header border-0 card-header-space-between">

                <!-- Title -->
                <h2 class="card-header-title h4 text-uppercase">
                    {{ __("RECENT TICKETS")}}
                </h2>

                <!-- Dropdown -->
                <div class="dropdown ms-4">
                    <a href="javascript: void(0);" class="dropdown-toggle no-arrow text-secondary" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" height="14" width="14"><g><circle cx="12" cy="3.25" r="3.25" style="fill: currentColor"></circle><circle cx="12" cy="12" r="3.25" style="fill: currentColor"></circle><circle cx="12" cy="20.75" r="3.25" style="fill: currentColor"></circle></g></svg>
                    </a>
                    <div class="dropdown-menu">
                        <a href="javascript: void(0);" class="dropdown-item">
                            {{ __("Export tickets")}}
                        </a>
                        <a href="javascript: void(0);" class="dropdown-item">
                            {{ __("Send")}}
                        </a>

                    </div>
                </div>
            </div>

            <!-- Table -->
            <div class="table-responsive">
                <table class="table align-middle table-edge table-hover table-nowrap mb-0">
                    <thead class="thead-light">
                        <tr>
                            <th class="w-60px">
                                <div class="form-check mb-0">
                                    <input class="form-check-input" type="checkbox" value="" id="checkAllCheckboxes">
                                </div>
                            </th>
                            <th>
                                <a href="javascript: void(0);" class="text-muted list-sort" data-sort="name">
                                    {{ __("Name of passenger")}}
                                </a>
                            </th>

                            <th>
                                <a href="javascript: void(0);" class="text-muted list-sort" data-sort="id">
                                    {{ __("Passenger Id")}}
                                </a>
                            </th>
                            <th>
                                <a href="javascript: void(0);" class="text-muted list-sort" data-sort="date">
                                    {{ __("Departure")}}
                                </a>
                            </th>
                            <th class="w-150px min-w-150px">
                                <a href="javascript: void(0);" class="text-muted list-sort" data-sort="status">
                                    {{ __("Arrival")}}
                                </a>
                            </th>
                            <th class="w-150px min-w-150px">
                                <a href="javascript: void(0);" class="text-muted list-sort" data-sort="status">
                                    {{ __("qr code")}}
                                </a>
                            </th>
                            <th class="w-150px min-w-150px">
                                <a href="javascript: void(0);" class="text-muted list-sort" data-sort="status">
                                    {{ __("state of sale")}}
                                </a>
                            </th>
                        </tr>
                    </thead>

                    <tbody class="list">
                        <tr>
                            <td>
                                <div class="form-check mb-0">
                                    <input class="form-check-input" type="checkbox" value="">
                                </div>
                            </td>
                            <td>
                                <div class="avatar avatar-circle avatar-xs me-2">
                                    <img src="{{asset('assets/img/profile-man.jfif')}}" alt="..." class="avatar-img" width="30" height="30">
                                </div>
                                <span class="name fw-bold">Martin Lunel</span>
                            </td>
                            <td>#245</td>
                            <td>Douala</td>
                            <td>Yaoundé</td>
                            <td> <img src="{{asset('assets/svg/qr.svg')}}" alt="..." class="avatar-img" width="50" height="50"></td>
                            <td class="status"><span class="legend-circle bg-danger"></span>Buca</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check mb-0">
                                    <input class="form-check-input" type="checkbox" value="">
                                </div>
                            </td>
                            <td>
                                <div class="avatar avatar-circle avatar-xs me-2">
                                    <img src="{{asset('assets/img/profile-man.jfif')}}" alt="..." class="avatar-img" width="30" height="30">
                                </div>
                                <span class="name fw-bold">Franck</span>
                            </td>
                            <td>#246</td>
                            <td>Douala</td>
                            <td>Yaoundé</td>
                            <td> <img src="{{asset('assets/svg/qr.svg')}}" alt="..." class="avatar-img" width="50" height="50"></td>
                            <td class="status"><span class="legend-circle bg-warning"></span>Kipart</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check mb-0">
                                    <input class="form-check-input" type="checkbox" value="">
                                </div>
                            </td>
                            <td>
                                <div class="avatar avatar-circle avatar-xs me-2">
                                    <img src="{{asset('assets/img/profile-man.jfif')}}" alt="..." class="avatar-img" width="30" height="30">
                                </div>
                                <span class="name fw-bold">Bertrand</span>
                            </td>
                            <td>#247</td>
                            <td>Douala</td>
                            <td>Yaoundé</td>
                            <td> <img src="{{asset('assets/svg/qr.svg')}}" alt="..." class="avatar-img" width="50" height="50"></td>
                            <td class="status"><span class="legend-circle bg-danger"></span>Buca</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check mb-0">
                                    <input class="form-check-input" type="checkbox" value="">
                                </div>
                            </td>
                            <td>
                                <div class="avatar avatar-circle avatar-xs me-2">
                                    <img src="{{asset('assets/img/profile-female.png')}}" alt="..." class="avatar-img" width="30" height="30">
                                </div>
                                <span class="name fw-bold">Samantha</span>
                            </td>
                            <td>#248</td>
                            <td>Douala</td>
                            <td>Yaoundé</td>
                            <td> <img src="{{asset('assets/svg/qr.svg')}}" alt="..." class="avatar-img" width="50" height="50"></td>
                            <td class="status"><span class="legend-circle bg-danger"></span>Buca</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check mb-0">
                                    <input class="form-check-input" type="checkbox" value="">
                                </div>
                            </td>
                            <td>
                                <div class="avatar avatar-circle avatar-xs me-2">
                                    <img src="{{asset('assets/img/profile-man.jfif')}}" alt="..." class="avatar-img" width="30" height="30">
                                </div>
                                <span class="name fw-bold">Hervé</span>
                            </td>
                            <td>#249</td>
                            <td>Douala</td>
                            <td>Yaoundé</td>
                            <td> <img src="{{asset('assets/svg/qr.svg')}}" alt="..." class="avatar-img" width="50" height="50"></td>
                            <td class="status"><span class="legend-circle bg-warning"></span>Kipart</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check mb-0">
                                    <input class="form-check-input" type="checkbox" value="">
                                </div>
                            </td>
                            <td>
                                <div class="avatar avatar-circle avatar-xs me-2">
                                    <img src="{{asset('assets/img/profile-female.png')}}" alt="..." class="avatar-img" width="30" height="30">
                                </div>
                                <span class="name fw-bold">Linda</span>
                            </td>
                            <td>#250</td>
                            <td>Douala</td>
                            <td>Yaoundé</td>
                            <td> <img src="{{asset('assets/svg/qr.svg')}}" alt="..." class="avatar-img" width="50" height="50"></td>
                            <td class="status"><span class="legend-circle bg-danger"></span>Buca</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check mb-0">
                                    <input class="form-check-input" type="checkbox" value="">
                                </div>
                            </td>
                            <td>
                                <div class="avatar avatar-circle avatar-xs me-2">
                                    <img src="{{asset('assets/img/profile-female.png')}}" alt="..." class="avatar-img" width="30" height="30">
                                </div>
                                <span class="name fw-bold">Clementine</span>
                            </td>
                            <td>#251</td>
                            <td>Douala</td>
                            <td>Yaoundé</td>
                            <td> <img src="{{asset('assets/svg/qr.svg')}}" alt="..." class="avatar-img" width="50" height="50"></td>
                            <td class="status"><span class="legend-circle bg-warning"></span>Kipart</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check mb-0">
                                    <input class="form-check-input" type="checkbox" value="">
                                </div>
                            </td>
                            <td>
                                <div class="avatar avatar-circle avatar-xs me-2">
                                    <img src="{{asset('assets/img/profile-man.jfif')}}" alt="..." class="avatar-img" width="30" height="30">
                                </div>
                                <span class="name fw-bold">Berlin</span>
                            </td>
                            <td>#252</td>
                            <td>Douala</td>
                            <td>Yaoundé</td>
                            <td> <img src="{{asset('assets/svg/qr.svg')}}" alt="..." class="avatar-img" width="50" height="50"></td>
                            <td class="status"><span class="legend-circle bg-warning"></span>Kipart</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check mb-0">
                                    <input class="form-check-input" type="checkbox" value="">
                                </div>
                            </td>
                            <td>
                                <div class="avatar avatar-circle avatar-xs me-2">
                                    <img src="{{asset('assets/img/profile-female.png')}}" alt="..." class="avatar-img" width="30" height="30">
                                </div>
                                <span class="name fw-bold">Lisa</span>
                            </td>
                            <td>#253</td>
                            <td>Douala</td>
                            <td>Yaoundé</td>
                            <td> <img src="{{asset('assets/svg/qr.svg')}}" alt="..." class="avatar-img" width="50" height="50"></td>
                            <td class="status"><span class="legend-circle bg-danger"></span>Buca</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check mb-0">
                                    <input class="form-check-input" type="checkbox" value="">
                                </div>
                            </td>
                            <td>
                                <div class="avatar avatar-circle avatar-xs me-2">
                                    <img src="{{asset('assets/img/profile-female.png')}}" alt="..." class="avatar-img" width="30" height="30">
                                </div>
                                <span class="name fw-bold">Merveille</span>
                            </td>
                            <td>#254</td>
                            <td>Douala</td>
                            <td>Yaoundé</td>
                            <td> <img src="{{asset('assets/svg/qr.svg')}}" alt="..." class="avatar-img" width="50" height="50"></td>
                            <td class="status"><span class="legend-circle bg-danger"></span>Buca</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check mb-0">
                                    <input class="form-check-input" type="checkbox" value="">
                                </div>
                            </td>
                            <td>
                                <div class="avatar avatar-circle avatar-xs me-2">
                                    <img src="{{asset('assets/img/profile-man.jfif')}}" alt="..." class="avatar-img" width="30" height="30">
                                </div>
                                <span class="name fw-bold">Dimitri</span>
                            </td>
                            <td>#255</td>
                            <td>Douala</td>
                            <td>Yaoundé</td>
                            <td> <img src="{{asset('assets/svg/qr.svg')}}" alt="..." class="avatar-img" width="50" height="50"></td>
                            <td class="status"><span class="legend-circle bg-warning"></span>Kipart</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check mb-0">
                                    <input class="form-check-input" type="checkbox" value="">
                                </div>
                            </td>
                            <td>
                                <div class="avatar avatar-circle avatar-xs me-2">
                                    <img src="{{asset('assets/img/profile-man.jfif')}}" alt="..." class="avatar-img" width="30" height="30">
                                </div>
                                <span class="name fw-bold">adrien</span>
                            </td>
                            <td>#256</td>
                            <td>Douala</td>
                            <td>Yaoundé</td>
                            <td> <img src="{{asset('assets/svg/qr.svg')}}" alt="..." class="avatar-img" width="50" height="50"></td>
                            <td class="status"><span class="legend-circle bg-danger"></span>Buca</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check mb-0">
                                    <input class="form-check-input" type="checkbox" value="">
                                </div>
                            </td>
                            <td>
                                <div class="avatar avatar-circle avatar-xs me-2">
                                    <img src="{{asset('assets/img/profile-man.jfif')}}" alt="..." class="avatar-img" width="30" height="30">
                                </div>
                                <span class="name fw-bold">Edie</span>
                            </td>
                            <td>#257</td>
                            <td>Douala</td>
                            <td>Yaoundé</td>
                            <td> <img src="{{asset('assets/svg/qr.svg')}}" alt="..." class="avatar-img" width="50" height="50"></td>
                            <td class="status"><span class="legend-circle bg-danger"></span>Buca</td>
                        </tr>

                    </tbody>
                </table>
            </div> <!-- / .table-responsive -->

            <div class="card-footer">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="me-5 text-secondary small">
                         <span class="list-pagination-page-first"></span> - <span class="list-pagination-page-last"></span>  <span class="list-pagination-pages"></span>
                    </div>

                    <!-- Pagination -->
                    <ul class="pagination list-pagination mb-0"></ul>
                </div>
            </div>

        </div>
    </div>
</div> <!-- / .row -->
<div class="row">

    <div class="col-xxl-6 d-flex">

        <!-- Card -->

        <div class="card border-0 flex-fill w-100">
            <div class="card-header border-0 card-header-space-between">

                <!-- Title -->
                <h2 class="card-header-title h4 text-uppercase">
                    {{ __("Ticket Status")}}
                </h2>

                <!-- Dropdown -->
                <div class="dropdown">
                    <a href="javascript: void(0);" class="dropdown-toggle no-arrow text-secondary" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" height="14" width="14"><g><circle cx="12" cy="3.25" r="3.25" style="fill: currentColor"></circle><circle cx="12" cy="12" r="3.25" style="fill: currentColor"></circle><circle cx="12" cy="20.75" r="3.25" style="fill: currentColor"></circle></g></svg>
                    </a>
                    <div class="dropdown-menu">
                        <a href="javascript: void(0);" class="dropdown-item">
                            {{ __("Action")}}
                        </a>

                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="row justify-content-around">
                    <div class="col-lg-6 col-xl-4 mb-7 mb-lg-0">

                        <!-- Chart -->
                        <div class="chart-container flex-grow-1">
                            <canvas id="orderStatusChart"></canvas>

                            <!-- Labels -->
                            <div class="position-absolute top-50 start-50 translate-middle text-center">
                                <p class="fs-5 mb-0 text-muted lh-sm">{{ __("Tickets")}}</p>
                                <h3 class="display-2 fw-bold mb-0">329</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-5">
                        <div class="row h-100 align-items-center">
                            <div class="col">
                                <div class="row justify-content-between">
                                    <div class="col-auto col-lg">

                                        <!-- Label -->
                                        <p class="fs-4 d-flex align-items-center fw-semibold mb-0">
                                            <span class="legend-circle bg-primary"></span>
                                            {{ __("Issued")}}
                                        </p>
                                    </div>
                                    <div class="col-auto col-lg">

                                        <!-- Comment -->
                                        <p class="fs-4 text-muted">
                                            29%
                                        </p>
                                    </div>
                                </div> <!-- / .row -->
                                <div class="row justify-content-between">
                                    <div class="col-auto col-lg">

                                        <!-- Label -->
                                        <p class="fs-4 d-flex align-items-center fw-semibold mb-0">
                                            <span class="legend-circle bg-dark"></span>
                                            {{ __("in progress")}}
                                        </p>
                                    </div>
                                    <div class="col-auto col-lg">

                                        <!-- Comment -->
                                        <p class="fs-4 text-muted">
                                            45%
                                        </p>
                                    </div>
                                </div> <!-- / .row -->
                                <div class="row justify-content-between">
                                    <div class="col-auto col-lg">

                                        <!-- Label -->
                                        <p class="fs-4 d-flex align-items-center fw-semibold mb-0">
                                            <span class="legend-circle bg-gray-400"></span>
                                            {{ __("Remaining")}}
                                        </p>
                                    </div>
                                    <div class="col-auto col-lg">

                                        <!-- Comment -->
                                        <p class="fs-4 text-muted">
                                            81%
                                        </p>
                                    </div>
                                </div> <!-- / .row -->
                            </div>
                        </div> <!-- / .row -->
                    </div>
                </div> <!-- / .row -->
            </div>
        </div>
    </div>
    <div class="col-xxl-6 d-flex">

        <!-- Card -->
        <div class="card border-0 flex-fill w-100">
            <div class="card-header border-0">

                <!-- Title -->
                <h2 class="card-header-title h4 text-uppercase">
                    {{ __("Revenue Management")}}
                </h2>
            </div>

            <div class="card-body">

                <!-- Map -->
                <div class="map h-280px" id="worldMap"></div>
            </div>
        </div>
    </div>
</div> <!-- / .row -->

<div class="row">
    <div class="col d-flex">

        <!-- Card -->

    </div>
</div> <!-- / .row -->
@endsection

@extends('layouts.main')

@section("title")

Ajouter un Passager
@endsection

@section('content')
<div class="container-fluid d-flex flex-column flex-grow-1">

    <!-- Title -->
    <h1 class="h2">
        Passager
    </h1>
    @if(session('success'))
    <div class="alert alert-primary" role="alert">
        {{ session('success') }}
    </div>
    @endif
    <div class="row flex-md-grow-1">
        <div class="col d-flex">

            <!-- Card -->
            <div class="card border-0 flex-grow-1">
                <div class="card-body">
                    <div class="row flex-grow-1 h-100">
                        <div class="col-12 col-xxl-3 mw-xl-300px mb-5 mb-md-8">

                            <!-- Button -->
                            <button class="btn buca-color w-100 mb-6" data-bs-toggle="modal" data-bs-target="#eventModal" id="btnAddEvent">
                                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" height="14" width="14" class="me-1"><path d="M0,12a1.5,1.5,0,0,0,1.5,1.5h8.75a.25.25,0,0,1,.25.25V22.5a1.5,1.5,0,0,0,3,0V13.75a.25.25,0,0,1,.25-.25H22.5a1.5,1.5,0,0,0,0-3H13.75a.25.25,0,0,1-.25-.25V1.5a1.5,1.5,0,0,0-3,0v8.75a.25.25,0,0,1-.25.25H1.5A1.5,1.5,0,0,0,0,12Z" style="fill: currentColor"></path></svg>
                                Nouveau Passager
                            </button>

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
                                                Nom du Passager
                                            </a>
                                        </th>

                                        <th>
                                            <a href="javascript: void(0);" class="text-muted list-sort" data-sort="id">
                                                Id Passager
                                            </a>
                                        </th>
                                        <th>
                                            <a href="javascript: void(0);" class="text-muted list-sort" data-sort="date">
                                                Depart
                                            </a>
                                        </th>
                                        <th class="w-150px min-w-150px">
                                            <a href="javascript: void(0);" class="text-muted list-sort" data-sort="status">
                                                Arrivée
                                            </a>
                                        </th>
                                        <th class="w-150px min-w-150px">
                                            <a href="javascript: void(0);" class="text-muted list-sort" data-sort="status">
                                                Code Qr
                                            </a>
                                        </th>
                                        <th class="w-150px min-w-150px">
                                            <a href="javascript: void(0);" class="text-muted list-sort" data-sort="status">
                                                Etat de Vente
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
                    </div> <!-- / .row -->
                </div>
            </div>
        </div>
    </div> <!-- / .row -->
</div>
@include('layouts.modals.add-passenger')
@endsection

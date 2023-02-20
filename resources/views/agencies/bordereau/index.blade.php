@extends('layouts.main')
@section('title')
Tout les bordereau de voyage
@endsection

@section('content')
<div class="card border-0 flex-fill w-100" data-list='{"valueNames": ["name", "email", "id", {"name": "date", "attr": "data-signed"}, "status"], "page": 8}' id="users">
    <div class="card-header border-0 card-header-space-between">

        <!-- Title -->
        <div class="row">
            <div class="col-9">
                <h2 class="card-header-title h4 text-uppercase">
                    Tout les Bordereau
                </h2>
            </div>
            <div class="col-3">
                <a href="{{ route('ticket.date-of-travel') }}">
                    <button type="button" class="btn buca-color ms-md-4" data-bs-toggle="modal" data-bs-target="#createKeyModal">
                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" height="14" width="14" class="me-1"><path d="M0,12a1.5,1.5,0,0,0,1.5,1.5h8.75a.25.25,0,0,1,.25.25V22.5a1.5,1.5,0,0,0,3,0V13.75a.25.25,0,0,1,.25-.25H22.5a1.5,1.5,0,0,0,0-3H13.75a.25.25,0,0,1-.25-.25V1.5a1.5,1.5,0,0,0-3,0v8.75a.25.25,0,0,1-.25.25H1.5A1.5,1.5,0,0,0,0,12Z" style="fill: currentColor"></path></svg>
                        Ajouter un Ticket
                    </button>
                </a>

            </div>
        </div>


        <!-- Dropdown -->
        <div class="dropdown ms-4">
            <a href="javascript: void(0);" class="dropdown-toggle no-arrow text-secondary" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" height="14" width="14"><g><circle cx="12" cy="3.25" r="3.25" style="fill: currentColor"></circle><circle cx="12" cy="12" r="3.25" style="fill: currentColor"></circle><circle cx="12" cy="20.75" r="3.25" style="fill: currentColor"></circle></g></svg>
            </a>
            <div class="dropdown-menu">
                <a href="javascript: void(0);" class="dropdown-item">
                    Exporter les tickets
                </a>
                <a href="javascript: void(0);" class="dropdown-item">
                    Envoyer
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
                            Nom Et Prenoms
                        </a>
                    </th>

                    <th>
                        <a href="javascript: void(0);" class="text-muted list-sort" data-sort="id">
                            Numero de bordereau
                        </a>
                    </th>
                    <th>
                        <a href="javascript: void(0);" class="text-muted list-sort" data-sort="date">
                            Remb
                        </a>
                    </th>
                    <th class="w-150px min-w-150px">
                        <a href="javascript: void(0);" class="text-muted list-sort" data-sort="status">
                            Manut
                        </a>
                    </th>
                    <th class="w-150px min-w-150px">
                        <a href="javascript: void(0);" class="text-muted list-sort" data-sort="status">
                            Montant Billet
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
                    <td>2500</td>
                    <td></td>
                    <td>3000</td>
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

                    <td>500</td>
                    <td></td>
                    <td>3000</td>
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
                    <td>250</td>
                    <td></td>
                    <td>3000</td>
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
                    <td>1500</td>
                    <td></td>
                    <td>3000</td>
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
                    <td>2500</td>
                    <td></td>
                    <td>3000</td>
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
                    <td>250</td>
                    <td></td>
                    <td>3000</td>
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
                    <td>2500</td>
                    <td></td>
                    <td>3000</td>
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
                    <td>2500</td>
                    <td></td>
                    <td>3000</td>
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
                    <td>300</td>
                    <td></td>
                    <td>3000</td>
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
                    <td>500</td>
                    <td></td>
                    <td>3000</td>
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
                    <td>250</td>
                    <td></td>
                    <td>3000</td>
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
                    <td>2500</td>
                    <td></td>
                    <td>3000</td>
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
                    <td>250</td>
                    <td></td>
                    <td>3000</td>
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
@endsection

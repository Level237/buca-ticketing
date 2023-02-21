@extends("layouts.main")

@section("title")
Passagers Recents
@endsection

@section("content")
<div class="row">
    <div class="col">

        <!-- Card -->
        <div class="card border-0 flex-fill w-100" data-list='{"valueNames": ["name", "email", "id", {"name": "date", "attr": "data-signed"}, "status"], "page": 8}' id="users">
            <div class="card-header border-0 card-header-space-between">

                <!-- Title -->
                <div class="row">
                    <div class="col-9">
                        <h2 class="card-header-title h4 text-uppercase">
                            Passagers
                        </h2>
                    </div>
                    <div class="col-3">
                        <a href="{{ route('ticket.date-of-travel') }}">
                            <button type="button" class="btn buca-color p-2" data-bs-toggle="modal" data-bs-target="#createKeyModal" style="padding-left:22px;padding-right:12px">
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
                                    Type
                                </a>
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
                                    Numero de place
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
                                    Date
                                </a>
                            </th>
                            <th class="w-150px min-w-150px">
                                <a href="javascript: void(0);" class="text-muted list-sort" data-sort="status">
                                    Heure Voyage
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
                        @foreach ($datas as $tickets)
                            @forelse ($tickets as $ticket)
                                    <tr>
                                        <td>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value="">
                                            </div>
                                        </td>


                                            @foreach ($ticket->Passager as $passager)


                                            <td>
                                                @if($passager->type=="Femme")
                                                    <div class="avatar avatar-circle avatar-xs me-2">
                                                        <img src="{{asset('assets/img/profile-female.png')}}" alt="..." class="avatar-img" width="30" height="30">
                                                    </div>


                                                @else
                                                    <div class="avatar avatar-circle avatar-xs me-2">
                                                        <img src="{{asset('assets/img/profile-man.jfif')}}" alt="..." class="avatar-img" width="30" height="30">
                                                    </div>

                                                @endif


                                            </td>
                                            <td>{{ $passager->nom }}</td>
                                            <td>{{ $passager->id }}</td>

                                            <td>{{ $passager->seatNumber }}</td>

                                            @foreach ($ticket->Voyage as $voyage)
                                            <td>{{ $voyage->departure }}</td>
                                            <td>{{ $voyage->arrival }}</td>
                                            <td>{{ $voyage->date }}</td>
                                            <td>{{ $voyage->heure }}</td>

                                        @endforeach
                                        @if($ticket->type==0)
                                        <td class="status"><span class="legend-circle bg-danger"></span>Buca</td>
                                    @else
                                    <td class="status"><span class="legend-circle bg-warning"></span>Kipart</td>
                                @endif
                                </tr>
                                @endforeach


                                @empty
                                    <tr>
                                        <td style="text-align: center"></td>
                                        <td style="text-align: center"></td>
                                        <td style="text-align: center"></td>
                                        <td style="text-align: center"></td>
                                        <td style="text-align: center">Aucun Ticket</td>

                                    </tr>
                            @endforelse

                        @endforeach



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
@endsection

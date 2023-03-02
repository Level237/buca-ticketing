@extends('layouts.main')
@section('title')
Bordereau de voyage
@endsection
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
@section('content')
<div class="card border-0 flex-fill w-100" data-list='{"valueNames": ["name", "email", "id", {"name": "date", "attr": "data-signed"}, "status"], "page": 8}' id="users">
    <div class="card-header border-0 card-header-space-between">

        <!-- Title -->
        <div class="row">
            <div class="col-9">
                <h2 class="card-header-title h4 text-uppercase">
                    Bordereau du voyage du {{ $date }} à {{ $hours }} de classe {{ $classe }}
                </h2>
            </div>
            <div class="col-3">
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{route('down',['download'=>'pdf'])}}">Download PDF</a>
                  </div>

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
                            Remboursement
                        </a>
                    </th>

                    <th class="w-150px min-w-150px">
                        <a href="javascript: void(0);" class="text-muted list-sort" data-sort="status">
                            Montant Billet
                        </a>
                    </th>
                    <th class="w-150px min-w-150px">
                        <a href="javascript: void(0);" class="text-muted list-sort" data-sort="status">
                            point de Vente
                        </a>
                    </th>
                </tr>
            </thead>

            <tbody class="list">
                @forelse($datas as $bordereau)
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
                                <span class="name fw-bold">{{ $bordereau->name }}</span>
                            </td>
                            <td>{{ $bordereau->id }}</td>
                            <td>{{ $bordereau->amountReimbursed }}</td>
                            <td>{{ $bordereau->ticketAmount }}</td>
                            @if($bordereau->type==0)
                                        <td class="status"><span class="legend-circle bg-danger"></span>Buca</td>
                                    @else
                                    <td class="status"><span class="legend-circle bg-warning"></span>Kipart</td>
                                @endif
                        </tr>
                @empty
                    <tr>
                        <td style="text-align: center"></td>
                        <td style="text-align: center"></td>
                        <td style="text-align: center"></td>
                        <td style="text-align: center"></td>
                        <td style="text-align: center">Aucun Bordereau disponible</td>

                    </tr>
                @endforelse

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

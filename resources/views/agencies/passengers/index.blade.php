@extends('layouts.main')

@section("title")

Ajouter un Passager
@endsection

@section('content')
<div class="container-fluid d-flex flex-column flex-grow-1">

    <!-- Title -->
    <div class="row align-items-center">
        <div class="col-6">
            <h1 class="h2">
                Voyage du {{ $date}} de classe {{ $classe }} à {{ $hours }}
            </h1>
        </div>
        <div class="col-6">
            <div class="alert buca-color" role="alert">
                 nombre de places restantes
            </div>
        </div>
    </div>

    @if(session('success'))
    <div class="alert buca-color" role="alert">
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
                                                Type
                                            </a>
                                        </th>
                                        <th>

                                            <a href="javascript: void(0);" class="text-muted list-sort" data-sort="name">
                                                Id Passager
                                            </a>
                                        </th>

                                        <th>
                                            <a href="javascript: void(0);" class="text-muted list-sort" data-sort="id">
                                                Nom Passager
                                            </a>
                                        </th>
                                        <th>
                                            <a href="javascript: void(0);" class="text-muted list-sort" data-sort="date">
                                                Cni
                                            </a>
                                        </th>
                                        <th class="w-150px min-w-150px">
                                            <a href="javascript: void(0);" class="text-muted list-sort" data-sort="status">
                                                Numero de place
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
                                                    @if($passager->type=="Homme")
                                                        <div class="avatar avatar-circle avatar-xs me-2">
                                                            <img src="{{asset('assets/img/profile-man.jfif')}}" alt="..." class="avatar-img" width="30" height="30">
                                                        </div>
                                                    @else
                                                        <div class="avatar avatar-circle avatar-xs me-2">
                                                            <img src="{{asset('assets/img/profile-female.png')}}" alt="..." class="avatar-img" width="30" height="30">
                                                        </div>
                                                    @endif


                                                </td>
                                                <td>{{ $passager->id }}</td>
                                                <td>{{ $passager->nom }}</td>
                                                <td>{{ $passager->cniNumber }}</td>
                                                <td>{{ $passager->seatNumber }}</td>
                                                @if($ticket->type==0)
                                                        <td class="status"><span class="legend-circle bg-danger"></span>Buca</td>
                                                    @else
                                                    <td class="status"><span class="legend-circle bg-secondary"></span>Kipart</td>
                                                @endif


                                    </tr>
                                    @endforeach
                                    @empty

                                    <tr>
                                        <td style="text-align: center"></td>
                                        <td style="text-align: center"></td>
                                        <td style="text-align: center"></td>
                                        <td style="text-align: center"></td>
                                        <td style="text-align: center">Aucun Passager</td>

                                    </tr>

                                    @endforelse
                                @endforeach




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

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

                        <div class="col d-flex">
                            <div id="fullcalendar" class="flex-grow-1 min-h-500px"></div>
                        </div>
                    </div> <!-- / .row -->
                </div>
            </div>
        </div>
    </div> <!-- / .row -->
</div>
@include('layouts.modals.add-passenger')
@endsection

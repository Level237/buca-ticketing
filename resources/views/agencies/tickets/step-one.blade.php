@extends('layouts.main')

@section("title")

{{ __("Select a date and travel class")}}
@endsection
@section('content')
<div class="d-flex align-items-baseline justify-content-between">

    <!-- Title -->
    <h1 class="h2">
        {{ __("Select a date and travel class")}}
    </h1>

    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __("Choice of date and class")}}</li>
        </ol>
    </nav>
</div>
<form action="{{ route('ticket.create') }}" method="GET">

    <div class="row mb-5">

        <div class="col-lg-4">
            <label for="eventType" class="form-label">Date</label>
            <input type="date" name="date" id="" class="form-control">
        </div>
        <div class="col-lg-4">
            <label for="eventType" class="form-label">{{ __("Travel class")}}</label>
            <select name="classe" class="form-control">
                <option value="Classique">{{ __("Classic")}}</option>
                <option value="vip">VIP</option>
            </select>
        </div>
        <div class="col-lg-4">

                <label for="eventType" class="form-label">{{ __("Time")}}</label>
                <select class="form-select" name="hours" id="eventType" required="" data-select='{
                        "placeholder": "Choose..."
                    }'>
                    <option value="" label="Heure de voyage"></option>
                    <option value="05:00">05:00</option>
                    <option value="06:00">06:00</option>
                    <option value="07:30">07:30</option>
                    <option value="08:30">08:30</option>
                    <option value="09:30">09:30</option>
                    <option value="10:30">10:30</option>
                    <option value="11:30">11:30</option>
                    <option value="12:30">12:30</option>
                    <option value="13:30">13:30</option>
                    <option value="14:30">14:30</option>
                    <option value="15:30">15:30</option>
                    <option value="17:30">17:30</option>
                    <option value="18:30">18:30</option>
                    <option value="18:45">18:45</option>
                </select>
                <div class="invalid-feedback">{{ __("Please select a time")}}</div>

        </div>
    </div>
        <div class="col-lg-6">

        </div>

            <button class="buca-color" type="submit">{{ __("Submit")}}</button>




</form>
@endsection


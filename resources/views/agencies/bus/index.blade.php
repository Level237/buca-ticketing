@extends('layouts.main')

@section("title")

{{ __("Bus List")}}
@endsection
@section('content')
<div class="container-fluid">

    <div class="d-flex align-items-baseline justify-content-between">

        <!-- Title -->
        <h1 class="h2">
            Bus
        </h1>

        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ __("Bus List")}}</li>
            </ol>
        </nav>
    </div>
    @if(session('success'))
    <div class="alert buca-color" role="alert">
        {{ session('success') }}
    </div>
    @endif
    <div class="row">


        <div class="col">
            <div class="tab-content" id="wizard-tabContent">
                <div class="tab-pane fade show active" id="wizardStepOneSelected" role="tabpanel" aria-labelledby="wizardTabOneSelected">
                    <div class="card min-h-600px">
                        <div class="card-body px-6 pb-0">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h3>{{ __("All bus")}}</h3>
                                </div>
                                <div class="col-lg-6">


                                    <button class="btn buca-color w-100 mb-6" data-bs-toggle="modal" data-bs-target="#eventModalBus" id="btnAddEvent">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" height="14" width="14" class="me-1"><path d="M0,12a1.5,1.5,0,0,0,1.5,1.5h8.75a.25.25,0,0,1,.25.25V22.5a1.5,1.5,0,0,0,3,0V13.75a.25.25,0,0,1,.25-.25H22.5a1.5,1.5,0,0,0,0-3H13.75a.25.25,0,0,1-.25-.25V1.5a1.5,1.5,0,0,0-3,0v8.75a.25.25,0,0,1-.25.25H1.5A1.5,1.5,0,0,0,0,12Z" style="fill: currentColor"></path></svg>
                                        {{ __("New bus")}}
                                    </button>



                                </div>
                            </div>



                            <div class="row">
                                @foreach($datas as $data)
                                    @foreach ($data as $bus)
                                    <div class="col-sm-6 col-xxl-4">

                                        <div class="form-check form-state-switch w-100">
                                            <input class="form-state-input" type="radio" name="platforms" >
                                            <label class="form-state-label w-100" >
                                                <span class="form-state-default">

                                                    <!-- Button -->
                                                    <span class="card shadow-sm">
                                                        <span class="card-body">
                                                            <span class="d-flex justify-content-between">
                                                                <span class="d-flex align-items-center">
                                                                    <span class="avatar avatar-lg text-bg-gray-300 d-flex align-items-center justify-content-center">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" id="IconChangeColor"  height="20" width="20"><path d="M2 14v-3H1a1 1 0 0 1-1-1 1 1 0 0 1 1-1h1l4-7h8l4 7h1a1 1 0 0 1 1 1 1 1 0 0 1-1 1h-1v6a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1v-1H5v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-3zm13.86-5L13 4H7L4.14 9h11.72zM5.5 14a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm9 0a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" id="mainIconPathAttribute" fill="red" stroke-width="0.1" stroke="#ff0000"></path></svg>
                                                                    </span>

                                                                    <span class="ms-4">
                                                                        <span class="h3 card-title mb-0">N{{ $bus->immatriculation }}</span><br>
                                                                        <span class="small text-muted mb-0">{{ $bus->number_of_places }} places</span>
                                                                    </span>
                                                                </span>
                                                            </span>
                                                        </span>


                                                    </span>
                                                </span>

                                                <span class="form-state-active">

                                                    <span class="card shadow-sm buca-border">
                                                        <span class="card-body">
                                                            <span class="d-flex justify-content-between">
                                                                <span class="d-flex align-items-center">
                                                                    <span class="avatar avatar-lg text-bg-gray-300 d-flex align-items-center justify-content-center">
                                                                        <img src="{{ asset('assets/img/buca.jpg') }}" class="img-fluid" width="42" alt="...">
                                                                    </span>

                                                                    <span class="ms-4">
                                                                        <span class="h3 card-title mb-0">Buca Voyage</span><br>
                                                                        <span class="small text-muted mb-0"></span>
                                                                    </span>
                                                                </span>
                                                            </span>
                                                        </span>

                                                        {{-- <form method="get" action="{{ route('passenger.index') }}" id="search">


                                                <input type="hidden" name="travel_id" value="{{ $datas->id }}">
                                                <input type="hidden" name="departure" value="{{ $datas->departure }}">
                                                <input type="hidden" name="arrival" value="{{ $datas->arrival }}">
                                                <input type="hidden" name="date" value="{{ $datas->date }}">
                                                <input type="hidden" name="classe" value="{{ $datas->classe }}">
                                                <input type="hidden" name="hours" value="{{ $datas->hours }}">
                                                <input type="hidden" name="travel_price" value="{{ $datas->price }}">
                                                        <span class="card-footer p-0">
                                                            <!-- Button -->
                                                            <button type="submit" class="btn buca-color d-flex align-items-center justify-content-center rounded-0 rounded-bottom">

                                                                    Selectionner

                                                            </button>



                                                        </span>

                                                    </form> --}}

                                                    </span>
                                                </span>
                                            </label>
                                        </div>
                                        <div>


                                        </div>
                                    </div>
                                    @endforeach
                                @endforeach








                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex justify-content-end">

                                <!-- Button -->


                            </div>
                        </div>

                    </div>
                </div>

                <div class="tab-pane fade" id="wizardStepTwoSelected" role="tabpanel" aria-labelledby="wizardTabTwoSelected">
                    <div class="card min-h-600px">
                        <div class="card-body px-6">
                            <h3>Settings</h3>

                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md">
                                        <label for="host" class="form-label">Host</label>
                                        <input type="text" class="form-control" id="host" placeholder="Host name" required="">
                                        <div class="invalid-feedback">Please add a host name</div>
                                    </div>

                                    <div class="col-md">
                                        <label for="port" class="form-label">Port</label>
                                        <input type="text" class="form-control" id="port" placeholder="Port number" required="" data-inputmask="'mask': '9999'">
                                        <div class="invalid-feedback">Please add a port number</div>
                                    </div>
                                </div> <!-- / .row -->
                            </div>

                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md">
                                        <label for="connectionString" class="form-label">Connection string</label>
                                        <input type="text" class="form-control" id="connectionString" placeholder="Connection string or id" required="">
                                        <div class="invalid-feedback">Please add a connection string</div>
                                    </div>

                                    <div class="col-md">
                                        <label for="serverLocation" class="form-label">Server location</label>
                                        <select class="form-select" id="serverLocation" required="" autocomplete="off" data-select='{
                                                    "placeholder": "Choose..."
                                                }' data-option-template='<span class="d-flex align-items-center py-2"><span class="avatar avatar-circle avatar-xxs"><img class="avatar-img shadow-sm" src="./assets/images/flags/1x1/[[value]].svg" /></span><span class="text-truncate ms-2">[[text]]</span></span>' data-item-template='<span class="d-flex align-items-center"><span class="avatar avatar-circle avatar-xxs"><img class="avatar-img shadow-sm" src="./assets/images/flags/1x1/[[value]].svg" /></span><span class="text-truncate ms-2">[[text]]</span></span>'>
                                            <option value="" label="country placeholder"></option>
                                            <option value="lu">Luxembourg</option>
                                            <option value="nl">Netherlands</option>
                                            <option value="pl">Poland</option>
                                            <option value="pt">Portugal</option>
                                            <option value="es">Spain</option>
                                            <option value="gb">United Kingdom of Great Britain and Northern Ireland</option>
                                            <option value="us">United States of America</option>
                                        </select>
                                        <div class="invalid-feedback">Please select a country</div>
                                    </div>
                                </div> <!-- / .row -->
                            </div>

                            <div class="mb-3">
                                <div class="row">
                                    <div class="col">
                                        <label for="users" class="form-label">Users</label>
                                        <select class="form-select" id="users" required="" data-select='{
                                                "placeholder": "Add users"
                                            }' multiple="">
                                            <option value="" label="name placeholder"></option>
                                            <option value="Norma Peck">Norma Peck</option>
                                            <option value="Perry Hart">Perry Hart</option>
                                            <option value="Jimmy Riley">Jimmy Riley</option>
                                            <option value="Martin Edwards">Martin Edwards</option>
                                            <option value="Katie Fowler">Katie Fowler</option>
                                            <option value="Zachary Ortiz">Zachary Ortiz</option>
                                            <option value="Dylan Sutton">Dylan Sutton</option>
                                            <option value="Melissa Stewart">Melissa Stewart</option>
                                            <option value="Lester William">Lester William</option>
                                            <option value="Chloe Brewer">Chloe Brewer</option>
                                        </select>
                                        <div class="invalid-feedback">Please select your team members</div>
                                    </div>
                                </div> <!-- / .row -->
                            </div>

                            <hr>

                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md">
                                        <div class="mb-5">
                                            <label for="apiKey" class="form-label">API key</label>
                                            <input type="text" class="form-control" id="apiKey" placeholder="Your private key" required="" data-inputmask="'mask': '9999-9999-9999-9999'">
                                            <div class="invalid-feedback">Please provide a secret key</div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="api" class="form-label">Enable RESTful API</label>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch" id="api">
                                            </div>
                                            <div class="invalid-feedback">Please select</div>
                                        </div>
                                    </div>

                                    <div class="col-md">
                                        <label class="form-label">License file</label>
                                        <div class="dropzone text-center px-4 py-6" data-dropzone="">
                                            <div class="dz-message">
                                                <h5 class="mb-4">Drag and drop your license file here</h5>

                                                <p class="mb-4">or</p>

                                                <!-- Button -->
                                                <span class="btn btn-sm btn-gray-300">Browse</span>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- / .row -->
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex justify-content-between">
                                <!-- Button -->
                                <a class="btn btn-light" data-toggle="wizard" href="#wizardStepOneSelected">Previous</a>

                                <!-- Button -->
                                <a class="btn btn-primary" data-toggle="wizard" href="#wizardStepThreeSelected">Next</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="wizardStepThreeSelected" role="tabpanel" aria-labelledby="wizardTabThreeSelected">
                    <div class="card min-h-600px">
                        <div class="card-body px-6">
                            <h3>Notifications</h3>

                            <!-- Table -->
                            <div class="table-responsive">
                                <table id="notificationsTable" class="table align-middle">
                                    <thead class="thead-light">
                                        <tr>
                                            <th class="text-uppercase py-4 align-middle min-w-300px min-w-md-auto">Type</th>
                                            <th class="text-center text-uppercase py-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" height="24" width="24" class="d-block mx-auto mb-1"><g><g><path d="M13.5,13a4.38,4.38,0,0,1-1.5.26,4.5,4.5,0,1,1,4.5-4.5" style="fill: none;stroke: currentColor;stroke-linecap: round;stroke-linejoin: round;stroke-width: 1.5px"></path><circle cx="12" cy="8.75" r="1.5" style="fill: none;stroke: currentColor;stroke-linecap: round;stroke-linejoin: round;stroke-width: 1.5px"></circle><path d="M13.5,8.75a1.5,1.5,0,0,0,3,0" style="fill: none;stroke: currentColor;stroke-linecap: round;stroke-linejoin: round;stroke-width: 1.5px"></path></g><g><path d="M20.25,12.75V2.25a1.5,1.5,0,0,0-1.5-1.5H5.25a1.5,1.5,0,0,0-1.5,1.5v10.5" style="fill: none;stroke: currentColor;stroke-linecap: round;stroke-linejoin: round;stroke-width: 1.5px"></path><path d="M22,11.46a.77.77,0,0,1,.8-.08.73.73,0,0,1,.42.67v9.7a1.5,1.5,0,0,1-1.5,1.5H2.25a1.5,1.5,0,0,1-1.5-1.5v-9.7a.73.73,0,0,1,.42-.67.77.77,0,0,1,.8.08l8.18,5.9a3,3,0,0,0,3.7,0Z" style="fill: none;stroke: currentColor;stroke-linecap: round;stroke-linejoin: round;stroke-width: 1.5px"></path></g></g></svg>
                                                Email
                                            </th>
                                            <th class="text-center text-uppercase py-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" height="24" width="24" class="d-block mx-auto mb-1"><defs><style>.a{fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5px;}</style></defs><title>alert-notification-bars-2</title><rect class="a" x="0.75" y="0.75" width="22.5" height="9.5" rx="1"></rect><line class="a" x1="0.75" y1="3.75" x2="23.25" y2="3.75"></line><rect class="a" x="0.75" y="13.75" width="22.5" height="9.5" rx="1"></rect><line class="a" x1="0.75" y1="16.75" x2="23.25" y2="16.75"></line></svg>
                                                Browser
                                            </th>
                                            <th class="text-center text-uppercase py-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" height="24" width="24" class="d-block mx-auto mb-1"><defs><style>.a{fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5px;}</style></defs><title>alert-clear-notification</title><rect class="a" x="3.876" y="5.75" width="11.5" height="3.5" rx="0.5"></rect><rect class="a" x="5.374" y="12" width="11.5" height="3.5" rx="0.5"></rect><line class="a" x1="18.374" y1="5.75" x2="21.374" y2="5.75"></line><line class="a" x1="19.124" y1="10.75" x2="22.124" y2="10.75"></line><line class="a" x1="20.124" y1="15.5" x2="23.124" y2="15.5"></line><path class="a" d="M14.376,18.75v2a2.5,2.5,0,0,1-2.5,2.5h-8.5a2.5,2.5,0,0,1-2.5-2.5V3.25a2.5,2.5,0,0,1,2.5-2.5h8.5a2.5,2.5,0,0,1,2.487,2.244"></path><line class="a" x1="0.876" y1="18.75" x2="14.376" y2="18.75"></line></svg>
                                                App
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h3 class="h4 mb-0">Enable E-mail notification</h3>
                                                <p class="small text-muted mb-0">Lorem ipsum dolor sit amet</p>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-check-inline m-0">
                                                    <input class="form-check-input" type="checkbox">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-check-inline m-0">
                                                    <input class="form-check-input" type="checkbox">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-check-inline m-0">
                                                    <input class="form-check-input" type="checkbox">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h3 class="h4 mb-0">Enable New Friend Notifications</h3>
                                                <p class="small text-muted mb-0">Nunc suscipit est quis tincidunt lobortis</p>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-check-inline m-0">
                                                    <input class="form-check-input" type="checkbox">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-check-inline m-0">
                                                    <input class="form-check-input" type="checkbox">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-check-inline m-0">
                                                    <input class="form-check-input" type="checkbox">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h3 class="h4 mb-0">Enable New Comment Notifications</h3>
                                                <p class="small text-muted mb-0">Nunc eget libero posuere, cursus mi tincidunt, mattis nisi</p>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-check-inline m-0">
                                                    <input class="form-check-input" type="checkbox">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-check-inline m-0">
                                                    <input class="form-check-input" type="checkbox">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-check-inline m-0">
                                                    <input class="form-check-input" type="checkbox">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h3 class="h4 mb-0">
                                                    Enable System Notifications

                                                    <!-- Icon -->
                                                    <a href="javascript: void(0);" data-bs-toggle="tooltip" title="Maecenas sit amet lectus et orci facilisis venenatis" class="ms-1 text-secondary">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" height="14" width="14"><path d="M12,0A12,12,0,1,0,24,12,12,12,0,0,0,12,0Zm.25,5a1.5,1.5,0,1,1-1.5,1.5A1.5,1.5,0,0,1,12.25,5ZM14.5,18.5h-4a1,1,0,0,1,0-2h.75a.25.25,0,0,0,.25-.25v-4.5a.25.25,0,0,0-.25-.25H10.5a1,1,0,0,1,0-2h1a2,2,0,0,1,2,2v4.75a.25.25,0,0,0,.25.25h.75a1,1,0,0,1,0,2Z" style="fill: currentColor"></path></svg>
                                                    </a>
                                                </h3>
                                                <p class="small text-muted mb-0">In dapibus magna ac tellus lacinia, tempus pretium mauris scelerisque</p>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-check-inline m-0">
                                                    <input class="form-check-input" type="checkbox">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-check-inline m-0">
                                                    <input class="form-check-input" type="checkbox">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-check-inline m-0">
                                                    <input class="form-check-input" type="checkbox">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h3 class="h4 mb-0">Status changes</h3>
                                                <p class="small text-muted mb-0">Ut viverra sapien ut purus ultricies, et euismod enim viverra</p>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-check-inline m-0">
                                                    <input class="form-check-input" type="checkbox">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-check-inline m-0">
                                                    <input class="form-check-input" type="checkbox">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check form-check-inline m-0">
                                                    <input class="form-check-input" type="checkbox">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div> <!-- / .table-responsive -->
                        </div>
                        <div class="card-footer">
                            <div class="d-flex justify-content-between">
                                <!-- Button -->
                                <a class="btn btn-light" data-toggle="wizard" href="#wizardStepTwoSelected">Previous</a>

                                <!-- Button -->
                                <button type="button" class="btn btn-primary">Connect</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.modals.add-bus')
@endsection

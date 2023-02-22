 <!-- Event modal -->
        <!-- Add new event Modal -->
        <div class="modal fade" id="eventModalBus" tabindex="-1" role="dialog" aria-labelledby="eventModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <form class="needs-validation" method="POST" action="{{ route('bus.create') }}" novalidate="" id="eventForm">

                        @csrf
                        <!-- Header -->
                        <div class="modal-header pb-0">
                            <h3 id="eventModalTitle" class="modal-title">Ajouter un nouveau Bus</h3>

                            <!-- Button -->
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <!-- End Header -->

                        <!-- Body -->
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="eventName" class="form-label">Immatriculation du vehicule</label>
                                <input type="text" name="immatriculation" class="form-control" id="eventName" placeholder="immatriculation du bus" required="">
                                <div class="invalid-feedback">s'il vous plait veuillez mentionner un numero d'immatriculation</div>
                            </div>
                            <div class="mb-3">
                                <label for="eventName" class="form-label">Nombre de places</label>
                                <input type="text" name="number_of_places" class="form-control" id="eventName" placeholder="Nombre de Places" required="">
                                <div class="invalid-feedback">s'il vous plait veuillez mentionner un nombre de place</div>
                            </div>

                        </div>
                        <!-- End Body -->

                        <!-- Footer -->
                        <div class="modal-footer pt-0">

                            <!-- Button -->
                            <button type="button" class="btn btn-outline-danger me-auto" id="btnDeleteEvent" data-bs-dismiss="modal">Delete</button>

                            <!-- Button -->
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>

                            <!-- Button -->
                            <button class="btn buca-color" id="btnSaveEvent">Save</button>
                        </div>
                        <!-- End Footer -->
                    </form>
                </div>
            </div>
        </div>

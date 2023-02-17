 <!-- Event modal -->
        <!-- Add new event Modal -->
        <div class="modal fade" id="eventModal" tabindex="-1" role="dialog" aria-labelledby="eventModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <form class="needs-validation" method="POST" action="{{ route('passenger.create') }}" novalidate="" id="eventForm">

                        @csrf
                        <!-- Header -->
                        <div class="modal-header pb-0">
                            <h3 id="eventModalTitle" class="modal-title">Ajouter un nouveau Passager</h3>

                            <!-- Button -->
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <!-- End Header -->

                        <!-- Body -->
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="eventName" class="form-label">Nom & Prenom</label>
                                <input type="text" name="name" class="form-control" id="eventName" placeholder="nom et prenom du passager" required="">
                                <div class="invalid-feedback">s'il vous plait veuillez choisir un nom</div>
                            </div>
                            <div class="mb-3">
                                <label for="eventType" class="form-label">Type</label>
                                <select class="form-select" name="type" id="eventType" required="" data-select='{
                                        "placeholder": "Choose..."
                                    }'>
                                    <option value="" label="Type de Passager"></option>
                                    <option value="Homme">Homme</option>
                                    <option value="Femme">Femme</option>
                                    <option value="Enfant">Enfant</option>
                                </select>
                                <div class="invalid-feedback">s'il vous plait selectionnez le type de Passager</div>
                            </div>
                            <div class="mb-3">
                                <label for="location" class="form-label">CNI</label>
                                <input type="text" name="cni" class="form-control" id="location" placeholder="Entrer le cni du passager">
                            </div>
                            <div class="mb-3">
                                <label for="location" class="form-label">Numero de telephone</label>
                                <input type="text" name="telephone" class="form-control" id="location" placeholder="Entrer le numero de telephone du passager">
                            </div>
                              <div class="mb-3">
                                <label for="location" class="form-label">Montant Deposé</label>
                                <input type="text" name="amount" class="form-control" id="location" placeholder="Entrer le montant deposé par le passager">
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

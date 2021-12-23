<!-- Add Address Modal -->
<div class="modal fade" id="addAddressModal" tabindex="-1" role="dialog" aria-labelledby="addAddressModalTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <!-- Header -->
            <div class="modal-header">
                <h4 id="addAddressModalTitle" class="modal-title">Add address</h4>

                <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary" data-dismiss="modal"
                    aria-label="Close">
                    <i class="tio-clear tio-lg"></i>
                </button>
            </div>
            <!-- End Header -->

            <!-- Body -->
            <div class="modal-body">
                <form action="{{ route('admin.users.update', ['user' => $request->id]) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="row form-group">
                        <label for="name" class="col-sm-3 col-form-label input-label">Full Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{ $request->name }}">
                        </div>
                    </div>

                    <div class="row form-group">
                        <label for="name" class="col-sm-3 col-form-label input-label">Email</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="email" name="email"
                                value="{{ $request->email }}">
                        </div>
                    </div>

                    <div class="row form-group">
                        <label for="name" class="col-sm-3 col-form-label input-label">status</label>
                        <div class="col-sm-9">
                            <!-- Select -->
                            <div class="select2-custom">
                                <select class="js-select2-custom custom-select" name="status" size="1"
                                    style="opacity: 0;" data-hs-select2-options='{
                                        "minimumResultsForSearch": "Infinity"
                                      }'>
                                    <option value="pending"
                                        data-option-template='<span class="media"><i class="tio-clear-circle tio-lg text-body mr-2" style="margin-top: .125rem;"></i><span class="media-body"><span class="d-block">Pending</span></span></span>'>
                                        Pending</option>
                                    <option value="active"
                                        data-option-template='<span class="media"><i class="tio-checkmark-circle tio-lg text-body mr-2" style="margin-top: .125rem;"></i><span class="media-body"><span class="d-block">Active</span></span></span>'>
                                        Active</option>
                                </select>
                            </div>
                            <!-- End Select -->
                        </div>
                    </div>

                    <div class="row form-group">
                        <label for="name" class="col-sm-3 col-form-label input-label">User Code</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="name" value="{{ $request->code }}" readonly
                                disabled>
                        </div>
                    </div>


                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-white mr-2" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update User Record</button>
                    </div>
                </form>
            </div>
            <!-- End Body -->
        </div>
    </div>
</div>
<!-- End Add Address Modal -->

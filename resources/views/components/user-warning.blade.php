@if (Auth::user()->whatsapp == null)
    <div class="row">
        <div class="col-12">
            <div class="card shadow-lg">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-md-auto d-flex justify-content-center align-items-center">
                            <img src="{{ asset('assets/img/warning.png') }}" alt="Warning" class="mb-4 mb-lg-0">
                        </div>
                        <div class="col-auto">
                            <h3 class="card-title">Please Update Your Contact Detail</h3>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis velit, perspiciatis
                                facilis
                                eos
                                nihil quis ex libero dolorum at ipsam est ducimus atque temporibus quisquam recusandae
                                odio
                                modi
                                dolorem nemo!</p>
                            <a href="{{ route('user.profile.edit', ['profile' => Auth::user()->id]) }}"
                                class="btn btn-success btn-sm">Update your Contact Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
@endif

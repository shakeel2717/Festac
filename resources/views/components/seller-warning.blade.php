@if (Auth::user()->whatsapp == null)
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-1 d-flex justify-content-center align-items-center">
                        <img src="{{ asset('assets/img/warning.png') }}" alt="Warning">
                    </div>
                    <div class="col-auto">
                        <h3 class="card-title">Please Update Your</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis velit, perspiciatis facilis
                            eos
                            nihil quis ex libero dolorum at ipsam est ducimus atque temporibus quisquam recusandae odio
                            modi
                            dolorem nemo!</p>
                        <a href="{{ route('seller.profile.edit', ['profile' => Auth::user()->id]) }}"
                            class="btn btn-success btn-sm">Update your Contact Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@extends('user.layout.app')
@section('title')
    User Dashboard
@endsection
@section('content')
    <h3 class="display-4">User Dashboard</h3>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Find a Service</h4>
                </div>
                <div class="card-body">
                    <form action="#" method="POST">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="category">Select Category</label>
                                    <select name="category" id="category"
                                        class="js-select2-custom custom-select form-control">
                                        @forelse ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->value }}</option>
                                        @empty
                                            <option value="">No Category Found</option>
                                        @endforelse
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="requirement">Requirements</label>
                                    <textarea name="requirement" id="requirement" cols="30" rows="10" class="form-control"
                                        placeholder="Tell us what you need and we will get it for you. eg. Blue shoe size 34"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="budget">Budgets</label>
                                    <input type="text" name="budget" id="budget" class="form-control"
                                        placeholder="Budget">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block btn-lg">Submit your Request</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <script>
        $(document).on('ready', function() {
            // INITIALIZATION OF SELECT2
            // =======================================================
            $('.js-select2-custom').each(function() {
                var select2 = $.HSCore.components.HSSelect2.init($(this));
            });
        });
    </script>
@endsection

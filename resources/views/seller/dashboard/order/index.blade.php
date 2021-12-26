@extends('seller.dashboard.layout.app')
@section('title')
    Order Seller dashboard
@endsection
@section('content')
    <h3 class="display-4">Seller Code: {{ Auth::user()->code }}</h3>
    <hr>
    <div class="row">
        
    </div>
@endsection

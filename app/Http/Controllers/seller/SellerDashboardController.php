<?php

namespace App\Http\Controllers\seller;

use App\Http\Controllers\Controller;
use App\Models\order;
use App\Models\SellerRating;
use App\Models\Transaction;
use App\Models\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SellerDashboardController extends Controller
{
    public function index()
    {
        $requests = UserRequest::all();
        $orders = order::where('seller_id', Auth::user()->id)->where('status','open')->take(2)->get();
        $transactions = [];
        // getting this seller rating
        $sellerRating = SellerRating::where('seller_id', Auth::user()->id)->get();
        return view('seller.dashboard.index', compact('requests', 'orders', 'transactions', 'sellerRating'));
    }
}

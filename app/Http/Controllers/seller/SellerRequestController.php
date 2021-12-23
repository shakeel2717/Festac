<?php

namespace App\Http\Controllers\seller;

use App\Http\Controllers\Controller;
use App\Models\UserRequest;
use Illuminate\Http\Request;

class SellerRequestController extends Controller
{
    public function index()
    {
        $requests = UserRequest::where('status', 'open')->get();
        return view('seller.dashboard.request.index', compact('requests'));
    }
}

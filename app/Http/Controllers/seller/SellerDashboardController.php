<?php

namespace App\Http\Controllers\seller;

use App\Http\Controllers\Controller;
use App\Models\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SellerDashboardController extends Controller
{
    public function index()
    {
        $requests = UserRequest::all();
        return view('seller.dashboard.index', compact('requests'));
    }
}

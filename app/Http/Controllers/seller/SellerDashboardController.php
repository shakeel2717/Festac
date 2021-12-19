<?php

namespace App\Http\Controllers\seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SellerDashboardController extends Controller
{
    public function index()
    {
        if (Auth::user()->whatsapp == null) {
            return redirect()->route('seller.profile.edit', ['profile' => Auth::user()->id])->withErrors('Please update your contact Detail in order to use our Seller benifits.');
        }
        return view('seller.dashboard.index');
    }
}

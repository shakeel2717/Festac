<?php

namespace App\Http\Controllers\seller;

use App\Http\Controllers\Controller;
use App\Models\order;
use Illuminate\Http\Request;

class SellerOrderController extends Controller
{
    public function index()
    {
        
        return view('seller.dashboard.order.index');
    }


    public function request(order $order)
    {
        $order->status = 'request';
        $order->save();
        return redirect()->back()->with('message', 'Your Request sent to the User Successfully');
    }
}

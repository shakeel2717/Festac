<?php

namespace App\Http\Controllers\seller;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use App\Models\UserRequest;
use Illuminate\Http\Request;

class SellerRequestController extends Controller
{
    public function index()
    {
        $requests = UserRequest::where('status', 'open')->paginate(10);
        return view('seller.dashboard.request.index', compact('requests'));
    }


    public function show($id)
    {
        $request = UserRequest::findOrFail($id);
        return view('seller.dashboard.request.show', compact('request'));
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'request_id' => 'required|exists:user_requests,id',
            'message' => 'required|string|min:20',
            'budget' => 'required|numeric|min:1',
        ]);

        $request = UserRequest::findOrFail($validatedData['request_id']);
        $offer = new Offer();
        $offer->user_id = $request->user_id;
        $offer->user_requests_id = $request->id;
        $offer->seller_id = auth()->user()->id;
        $offer->budget = $validatedData['budget'];
        $offer->message = $validatedData['message'];
        $offer->status = 'open';
        $offer->save();
        return redirect()->back()->with('message', 'Offer sent successfully');
    }


    public function sent()
    {
        $offers = Offer::where('seller_id', auth()->user()->id)->where('status', 'open')->paginate(10);
        return view('seller.dashboard.request.sent', compact('offers'));
    }
}

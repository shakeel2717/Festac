<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\order;
use App\Models\SellerRating;
use App\Models\Transaction;
use App\Models\UserRequest;
use Illuminate\Http\Request;

class UserOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = order::where('user_id', auth()->user()->id)->get();
        return view('user.dashboard.order.index', compact('orders'));
    }


    public function onGoing()
    {
        $orders = order::where('user_id', auth()->user()->id)->where('status', 'open')->get();
        return view('user.dashboard.order.onGoing', compact('orders'));
    }

    public function complete()
    {
        $orders = order::where('user_id', auth()->user()->id)->where('status', 'complete')->get();
        return view('user.dashboard.order.complete', compact('orders'));
    }


    public function request()
    {
        $orders = order::where('user_id', auth()->user()->id)->where('status', 'request')->get();
        return view('user.dashboard.order.request', compact('orders'));
    }


    public function accept(Request $request)
    {
        $validatedData = $request->validate([
            'order_id' => 'required',
            'rating' => 'required|integer|between:1,5',
        ]);

        $order = order::find($request->order_id);
        $order->status = 'Complete';
        $order->save();

        // user request status complete
        $userRequest = UserRequest::find($order->UserRequest->id);
        $userRequest->status = 'complete';
        $userRequest->save();

        // mark offer as a complete
        $offer = $order->offer;
        $offer->status = 'complete';
        $offer->save();

        // inserting seller rating
        $rating = new SellerRating();
        $rating->seller_id = $offer->seller_id;
        $rating->user_id = auth()->user()->id;
        $rating->rating = $validatedData['rating'];
        $rating->save();

        return redirect()->back()->with('message', 'Order Accepted Successfully');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

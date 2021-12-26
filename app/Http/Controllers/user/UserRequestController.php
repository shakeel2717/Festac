<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Offer;
use App\Models\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $requests = UserRequest::where('user_id', auth()->user()->id)->paginate(10);
        return view('user.dashboard.request.index', compact('requests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::where('status', 'active')->get();
        return view('user.dashboard.request.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'category' => 'required|integer',
            'requirement' => 'required|string|min:20',
            'budget' => 'required|integer',
        ]);
        // checking if this user has valid whatsapp
        if (Auth::user()->whatsapp == null) {
            return redirect()->route('user.profile.edit', ['profile' => auth()->user()->id])->withErrors('Please add your whatsapp number first');
        }
        // inserting into user request
        $user_request = new UserRequest();
        $user_request->user_id = auth()->user()->id;
        $user_request->category_id = $validatedData['category'];
        $user_request->requirement = $validatedData['requirement'];
        $user_request->budget = $validatedData['budget'];
        $user_request->status = 'open';
        $user_request->save();
        return redirect()->back()->with('message', 'Request sent successfully');
    }

    public function received()
    {
        // get all offers with the userRequest table
        // $UserRequest = UserRequest::where('user_id', auth()->user()->id)->get();
        $UserRequest = Offer::has('UserRequest')->get();
        return view('user.dashboard.request.received', compact('UserRequest'));
    }


    public function receivedShow($id)
    {
        $user_request = Offer::where('user_requests_id', $id)->where('status', 'open')->get();
        return view('user.dashboard.request.receivedShow', compact('user_request'));
    }

    public function receivedAccept(Request $request)
    {
        $validatedData = $request->validate([
            'offer_id' => 'required|integer',
            'user_requests_id' => 'required|integer',
        ]);
        // updating the status of the offer
        $offer = Offer::find($validatedData['offer_id']);
        $offer->status = 'accepted';
        $offer->save();

        // updating the status of the request
        $user_request = UserRequest::find($validatedData['user_requests_id']);
        $user_request->status = 'accepted';
        $user_request->seller_id = $offer->seller_id;
        $user_request->save();
        return redirect()->back()->with('message', 'Request accepted successfully');
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
        $request = UserRequest::find($id);

        if ($request->status != 'open') {
            return redirect()->back()->withErrors('You can not delete this request');
        }
        $request->delete();
        return redirect()->back()->with('message', 'Request deleted successfully');
    }
}

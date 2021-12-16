<?php

namespace App\Http\Controllers\seller\Auth;

use App\Http\Controllers\Controller;
use App\Models\Business;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register()
    {
        return view('seller.auth.register');
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'business' => 'required|string|min:3|max:255',
            'category' => 'required|string',
            'address' => 'required|string|min:3|max:255',
            'whatsapp' => 'required',
            'name' => 'required|string|min:3|max:255',
            'email' => 'required|email|min:3|max:255',
            'password' => 'required|string|min:8|max:255',
        ]);
        $seller = new User();
        $seller->name = $validatedData['name'];
        $seller->email = $validatedData['email'];
        $seller->password = Hash::make($validatedData['password']);
        $seller->whatsapp = $validatedData['whatsapp'];
        $seller->role = 'seller';
        $seller->code = generate_user_code('S');
        $seller->save();
        
        // creating a business profile
        $business = new Business();
        $business->user_id = $seller->id;
        $business->name = $validatedData['business'];
        $business->category = $validatedData['category'];
        $business->address = $validatedData['address'];
        $business->save();
        Auth::login($seller);
        return redirect()->route('seller.dashboard');
    }
    
}

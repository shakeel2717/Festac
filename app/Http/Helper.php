<?php
// generating 6 digit unique user code

use App\Models\order;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

function balance()
{
    $in = Transaction::where('user_id', Auth::user()->id)->where('sum', '+')->sum('amount');
    $out = Transaction::where('user_id', Auth::user()->id)->where('sum', '-')->sum('amount');
    $balance = $in - $out;
    return $balance;
}

function clearance()
{
    $in = Transaction::where('user_id', Auth::user()->id)->where('sum', '+')->where('status','pending')->sum('amount');
    return $in;
}


function withdraw()
{
    $out = Transaction::where('user_id', Auth::user()->id)->where('sum', '-')->where('status','pending')->where('type','withdraw')->sum('amount');
    return $out;
}

function generate_user_code($userType)
{
    $rand = rand(10000000, 99999999);
    $code = $userType . $rand;
    $user = User::where('code', $code)->first();
    if ($user) {
        generate_user_code($userType);
    } else {
        return $code;
    }
}

// generate unique order number
function generate_order_number()
{
    $rand = rand(10000000, 99999999);
    $order_number = 'ORD' . $rand;
    $order = order::where('order_number', $order_number)->first();
    if ($order) {
        generate_order_number();
    } else {
        return $order_number;
    }
}



function profilePercentage()
{
    $user = Auth::user();
    $profilePercentage = 0;
    if ($user->profile_image) {
        $profilePercentage += 20;
    }
    if ($user->name != null) {
        $profilePercentage += 20;
    }
    if ($user->email != null) {
        $profilePercentage += 20;
    }
    if ($user->whatsapp != null) {
        $profilePercentage += 20;
    }
    if ($user->facebook != null) {
        $profilePercentage += 20;
    }

    if ($user->instagram != null) {
        $profilePercentage += 20;
    }

    return $profilePercentage;
}

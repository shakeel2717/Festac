<?php
// generating 6 digit unique user code

use App\Models\User;
use Illuminate\Support\Facades\Auth;

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

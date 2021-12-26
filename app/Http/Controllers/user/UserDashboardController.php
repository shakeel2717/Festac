<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\order;
use App\Models\UserRequest;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function index()
    {
        $categories = Category::where('status', 'active')->get();
        $requests = UserRequest::where('user_id', auth()->user()->id)->get();
        $orders = order::where('user_id', auth()->user()->id)->get();
        return view('user.dashboard.index', compact('categories', 'requests', 'orders'));
    }
}

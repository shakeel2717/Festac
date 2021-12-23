<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function index()
    {
        $categories = Category::where('status', 'active')->get();
        return view('user.dashboard.index', compact('categories'));
    }
}

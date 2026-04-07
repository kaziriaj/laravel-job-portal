<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();

        if($user->role == 'admin'){
            return Inertia::render('Dashboard/AdminDashboard');
        }
        return Inertia::render('Dashboard/UserDashboard');
    }
}

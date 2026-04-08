<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class EmployeeProfileController extends Controller
{
    public function index()
    {

        $user = Auth::user();
        $skill = Skill::where('user_id', $user->id)->where('status', 1)->get();
        return Inertia::render('Profile/ListProfile',[
           'users' => [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'role' => $user->role,
           ],
            'skills' => $skill,
        ]);
    }
}

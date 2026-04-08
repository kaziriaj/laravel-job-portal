<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class SkillContoller extends Controller
{
    public function create()
    {
        return Inertia('Components/ProfileComponents/SkillCreate');
    }

    public function store(Request $request)
    {
        $user = Auth::id();
        $data = $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'status' => 'boolean',
        ]);

        Skill::create([
            'title' => $data['title'],
            'user_id' => $user,
            'description' => $data['description'],
            'status' => $data['status']
        ]);

        return redirect('/employee/skill/create')->with('success','Skill Add Success');
    }
}

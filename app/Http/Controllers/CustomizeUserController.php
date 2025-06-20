<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomizeUsers;
class CustomizeUserController extends Controller
{
    public function create()
    {
        $latestUser = CustomizeUsers::latest()->first();
        return view('index', compact('latestUser'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'age'   => 'required|integer',
            'ethnicity' => 'required|string',
        ]);

        CustomizeUsers::create($validated);

        return redirect()
            ->route('customize-user.create')
            ->with('success', 'your user has been customized');
    }
}
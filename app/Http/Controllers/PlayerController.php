<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;
use Illuminate\Support\Facades\Hash;

class PlayerController extends Controller
{
    // Show Form
    public function create()
    {
        return view('players');
    }

    // Store Data
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:players,email',
            'phone' => 'required|string|max:20',
            'dob' => 'required|date',
            'gender' => 'required|string',
            'address' => 'required|string',
            'city' => 'required|string',
            'country' => 'required|string',
            'position' => 'required|string',
            'jersey_number' => 'required|numeric',
            'password' => 'required|min:6',
        ]);

        Player::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'dob' => $request->dob,
            'gender' => $request->gender,
            'address' => $request->address,
            'city' => $request->city,
            'country' => $request->country,
            'position' => $request->position,
            'jersey_number' => $request->jersey_number,
            'password' => Hash::make($request->password),
        ]);

        return redirect()
            ->route('players.register')
            ->with('success', 'Player Registered Successfully!');
    }
}

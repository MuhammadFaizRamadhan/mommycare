<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming request
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        // Create new user
        $user = User::create([
            'nama_user' => $validatedData['name'],
            'email' => $validatedData['email'],
            // Use md5 for password (Note: Not recommended for security reasons)
            'password' => md5($validatedData['password'])
        ]);

        // Redirect or respond 
        return redirect('/login')->with('success', 'Account created successfully');
    }
}
<?php

namespace App\Http\Controllers;

Use App\Models\User;

use Illuminate\Http\Request;

Use Illuminate\Http\RedirectResponse; 

class AuthController extends Controller
{
    public function register (Request $request) : RedirectResponse
    {
        User::create([
            'name' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect('login');
    }
    
}

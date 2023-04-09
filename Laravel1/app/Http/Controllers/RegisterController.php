<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|min:5',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:2'
        ]);
        $query = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        if ($query) {
            return redirect('/');
        } else {
            return redirect('/register');
        }
    }
}

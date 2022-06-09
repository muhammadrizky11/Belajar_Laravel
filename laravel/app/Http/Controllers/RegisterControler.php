<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

use PHPUnit\Framework\MockObject\Stub\ReturnArgument;

class RegisterControler extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'register',
            'active' => 'active'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:255|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        // $request->session()->flash('Berhasil', 'Registration successful!! Please Login!!');

        return redirect('/login')->with('Berhasil', 'Registration successful!! Please Login!!');
    }
}

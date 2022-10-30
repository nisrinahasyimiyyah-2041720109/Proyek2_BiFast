<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        $ValidatedData = $request->validate([
            'name' => 'required|max:255',
            'phone' => 'required|numeric',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8'
        ]);

        $ValidatedData['password'] = bcrypt($ValidatedData['password']);

        User::create($ValidatedData);
        // $request->session()->flash('success','Registrasi berhasil, silahkan Login');
        return redirect('/login')->with('success', 'Registrasi berhasil');
    }
}

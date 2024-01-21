<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'tittle' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate(
            [
                'name' => 'required|max:225',
                'username' => 'required|min:2|max:255|unique:users',
                'email' => 'required|email:dns|unique:users',
                'password' => 'required|min:5|max:255'
            ]);
        $validateData['password'] = bcrypt($validateData['password']);
        
        User::create($validateData);
        //$request->session()->flash('succcess', 'Registration succesfull! Please Login');

        return redirect('login.index')->with('success', 'Registration succesfull! Please Login');
    }
}

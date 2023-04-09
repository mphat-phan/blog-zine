<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function signUp(){
        if(Auth::check()){
            return redirect('/');
        }
        return view('pages.sign-up');
    }

    public function signIn(){
        if(Auth::check()){
            return redirect('/');
        }
        return view('pages.sign-in');
    }

    //Create User
    public function store(Request $request){
        $form = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users','email')],
            'password' => ['required','confirmed','min:6']
        ]);

        $user = User::create($form);
        auth()->login($user);

        return redirect('/')->with('message', 'User created and logged in');
    }

    //Login User
    public function login(Request $request){
        $form = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if(auth()->attempt($form)){
            $request->session()->regenerate();
            return redirect('/');
        }

        return back()->withErrors([
            'message' => 'The email or password is incorrect, please try again'
        ]);
    }

    //Logout
    public function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}

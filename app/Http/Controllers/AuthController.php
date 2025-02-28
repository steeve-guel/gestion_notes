<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    //

    public function login(){

        $users = User::all();
        if(!$users){
        User::Create([
            'name' => 'ESI',
            'email' => 'esi@gmail.com',
            'password' => Hash::make('1234')
        ]);
        }

        return view('auth.login');
    }

    public function logout(){
        Auth::logout();

        return to_route('auth.login');
    }

    public function doLogin(LoginRequest $request){

        $credentials = $request->validated();

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            return redirect()->intended(route('admin.dashboardAdmin'));
        }
        return to_route('auth.login')->withErrors([
            'email' => 'email invalide'
        ])->onlyInput('email');
    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('register');
    }

    public function register(Request $request){
        $validateData = $request->validate([
            'email'=> 'required|email:dns|unique:users',
            'password'=> 'required|min:6|max:16',
            'fullname'=>['required', 'min:4', 'max:25'],
            'username'=>['required', 'min:4', 'max:25', 'unique:users'],
            'terms'=>'accepted'
        ]);
        
        // dd('regis berhasil');
        User::create($validateData);
        return redirect()->intended('login');
    }
}

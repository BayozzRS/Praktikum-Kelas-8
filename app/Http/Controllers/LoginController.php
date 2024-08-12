<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(request $req)
    {
        $credential = $req->only('username','password');

        if (Auth::attempt($credential)){
            if (Auth::User()->role == 'admin') {
                return redirect('/admin');
            } else {
                return redirect('/kasir');
            }
        } else {
            return redirect('/');
        }
    }
}

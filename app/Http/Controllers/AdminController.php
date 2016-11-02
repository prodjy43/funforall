<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class AdminController extends Controller
{
    public function home(){
    	return view('admin.home', ['title' => 'Accueil']);
    }

    public function showLogin(){
    	return view('admin.loginform', ['title' => 'Login to admin']);
    }

    public function login(Request $request){
        if (Auth::attempt(['login' => $request->all()['login'], 'password' => $request->all()['password']])) {
            return redirect('/admin');
        }else{
            return redirect('/admin/login');
        }
    }

    public function deco(){
        Auth::logout();
        return redirect('/admin');
    }
}

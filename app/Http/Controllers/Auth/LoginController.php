<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
  public function showFormLogin(){
        return view('auth/login');
  }
  public function login(){

  }
  public function logout(){

  }
}

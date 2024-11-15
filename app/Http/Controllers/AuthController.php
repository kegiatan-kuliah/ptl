<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function indexLogin() {
        return view('pages.auth.login');
    }

    public function indexRegister() {
        return view('pages.auth.register');
    }

    public function indexForgot() {
        return view('pages.auth.forgot');
    }
}

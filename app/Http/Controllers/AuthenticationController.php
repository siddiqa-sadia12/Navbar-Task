<?php

namespace App\Http\Controllers;
use App\Models\Registration;

use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    public function index() {
        return view('index');
    }

    public function login() {
        return view('login');
    }

    public function register() {
        return view('register');
    }

    public function registration(Request $request) {
        $newuser = new Registration;
        $newuser->name = $request->name;
        $newuser->stdid=$request->stdid;
        $newuser->password = $request->password;
        $newuser->conformpassword = $request->conformpassword;
        $newuser->save();
        return view('login');
    }
}

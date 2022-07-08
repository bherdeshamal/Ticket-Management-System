<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function adminregister()
    {
        return view('/admin.register');
    }

    public function adminlogin()
    {
        return view('/admin.login');
    }    
}

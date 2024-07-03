<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //method index halaman admin
    function index()
    {
        return view('admin');
        
    }
    function admin()
    {
        return view('admin');
        
    }
    function superadmin()
    {
        return view('admin');
        
    }
    function it()
    {
        return view('admin');
        
    }
}

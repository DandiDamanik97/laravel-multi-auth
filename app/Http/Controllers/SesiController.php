<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
    //method untuk menampilkan halaman login
    function index()
    {
        return view('login');
    }

    //method untuk autentikasi login
    function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ],
        [
            'email.required' => 'Email Wajib diisi',
            'password.required' => 'Password wajib diisi',
        ]);

        $infologin = [
            'email' =>$request->email,
            'password'=>$request->password,
        ];

        //untuk mengarahkan tiap role
        if(Auth::attempt($infologin)) {
            if(Auth::user()->role == 'admin'){
                return redirect('admin/admin');
            } elseif (Auth::user()->role == 'superadmin'){
                return redirect('admin/superadmin');
            } elseif (Auth::user()->role == 'it'){
                return redirect('admin/it');
            }
            
        } else {
            return redirect('')->withErrors('Username dan Password tidak sesuai')->withInput();
        }
    }
    
    function logout()
    {
        Auth::logout();
        return redirect('');
    }
}

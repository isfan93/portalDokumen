<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    public function index(){
        return view('login.index');
    }
    
    public function proses(Request $req){
        // $data = $req->validate([
        //     'username' => 'required',
        //     'password' => 'required'
        // ]);

        $data = $req->only('username','password');

        if(Auth::attempt($data)){
            Alert::success("Berhasil Login, Selamat datang ".Auth::user()->name);
            return redirect()->route('dashboard.index')->with('success','Selamat Datang '.strtoupper(Auth::user()->name));
        }else{
            Alert::error('Gagal login, password atau username salah');
            return redirect()->back()->with('error','username atau password salah');
        }
    }

    public function logout(Request $req){
        Auth::logout();
        // $req->session()->forget('name');
        Alert::success('Berhasil Logout');
        return redirect()->route('login')->with('Success','Anda berhasil logout');
    }

}

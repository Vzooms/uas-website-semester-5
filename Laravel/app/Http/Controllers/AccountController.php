<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Gender;
use App\Models\Account;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AccountController extends Controller
{
    public function toIndex(){
        return view('index');
    }

    // ------------------------------------------------------------------------------------------- REGISTER
    public function toRegister(){
        return view('register',[
            'roles' => Role::get(),
            'genders' => Gender::get()
        ]);
    }
    public function register(Request $req){
        $img = $req->file('display_picture');
        $display_picture_link = $img->getClientOriginalName();
        Storage::putFileAs('public/images', $img, $display_picture_link);
        
        $temp_token = $req->_token;

        $req = $req->validate([
            "first_name" => 'required|max:25|regex:/[a-zA-Z\s]+$/',
            "last_name" => 'required|max:25|regex:/[a-zA-Z\s]+$/',
            "email" => 'required|email',
            "roles" => 'required',
            "gender" => 'required',
            "password" => 'required|min:8|regex:/.*[0-9].*+$/',
            "confirm-password" => 'same:password',
        ]);
        
        Account::insert([
            "remember_token" => $temp_token,
            "first_name" => $req['first_name'],
            "last_name" => $req['last_name'],
            "email" => $req['email'],
            "role_id" => $req['roles'],
            "gender_id" => $req['gender'],
            "password" => hash::make($req['password']),
            "display_picture_link" => $display_picture_link,
        ]);

        return redirect('/login');
    }

    //  ------------------------------------------------------------------------------------------ LOGIN
    public function toLogin(){
        return view('login');
    }
    public function login(Request $req){
        $credentials = $req->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $req->session()->regenerate();

            return redirect('/home');
        }

        return back();
    }

    public function toProfile(){
        return view('profile');
    }
    public function toAccount_maintenance(){
        return view('account_maintenance.account_maintenance');
    }

    public function logout(Request $req){
        Auth::logout();
        $req->session()->invalidate();
        $req->session()->regenerateToken();
        return redirect('/login');
    }
}

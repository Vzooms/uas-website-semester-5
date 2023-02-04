<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Role;
use App\Models\Gender;
use App\Models\Account;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
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

        $date = Carbon::now();
        $date->setTimezone('Asia/Jakarta');

        $req = $req->validate([
            "first_name" => 'required|max:25|regex:/[a-zA-Z\s]+$/',
            "last_name" => 'required|max:25|regex:/[a-zA-Z\s]+$/',
            "email" => 'required|email',
            "roles" => 'required',
            "gender" => 'required',
            "password" => 'required|min:8|regex:/.*[0-9].*+$/',
            "confirm-password" => 'same:password',
        ]);

        if(Account::where('email', $req['email'])->first()->deleted_at != NULL){
            Account::where('email', $req['email'])->update([
                "remember_token" => $temp_token,
                "first_name" => $req['first_name'],
                "last_name" => $req['last_name'],
                "email" => $req['email'],
                "role_id" => $req['roles'],
                "gender_id" => $req['gender'],
                "password" => hash::make($req['password']),
                "display_picture_link" => $display_picture_link,
                'created_at' => $date,
                'updated_at' => null,
                'deleted_at' => NULL,
            ]);

            return redirect('/login');
        }

        Account::insert([
            "remember_token" => $temp_token,
            "first_name" => $req['first_name'],
            "last_name" => $req['last_name'],
            "email" => $req['email'],
            "role_id" => $req['roles'],
            "gender_id" => $req['gender'],
            "password" => hash::make($req['password']),
            "display_picture_link" => $display_picture_link,
            'created_at' => $date,
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

        if(Account::where('email', $req->email)->first()->deleted_at != NULL){
            return back()->withErrors('wrong email or password');
        }

        if (Auth::attempt($credentials)) {
            $req->session()->regenerate();

            return redirect('/home');
        }

        return back();
    }
    //  ------------------------------------------------------------------------------------------ PROFILE
    public function toProfile(){
        return view('profile',[
            'roles' => Role::get(),
            'genders' => Gender::get(),
            'account' => Auth::user(),
            'page' => 'Profile'
        ]);
    }
    public function editProfile(Request $req){
        $img = $req->file('display_picture');
        $display_picture_link = $img->getClientOriginalName();
        Storage::putFileAs('public/images', $img, $display_picture_link);

        $temp_token = $req->_token;

        $date = Carbon::now();
        $date->setTimezone('Asia/Jakarta');

        $req = $req->validate([
            "first_name" => 'required|max:25|regex:/[a-zA-Z\s]+$/',
            "last_name" => 'required|max:25|regex:/[a-zA-Z\s]+$/',
            "email" => 'required|email',
            "roles" => 'required',
            "gender" => 'required',
            "password" => 'required|min:8|regex:/.*[0-9].*+$/',
            "confirm-password" => 'same:password',
        ]);

        Account::where('id', Auth::user()->id)->update([
            "remember_token" => $temp_token,
            "first_name" => $req['first_name'],
            "last_name" => $req['last_name'],
            "email" => $req['email'],
            "role_id" => $req['roles'],
            "gender_id" => $req['gender'],
            "password" => hash::make($req['password']),
            "display_picture_link" => $display_picture_link,
            'updated_at' => $date,
        ]);

        return view('/success',[
            'header' => 'Saved',
            'body' => "",
            "footer" => "Click here to \"Home\"",
            "link" => "/home"
        ]);
    }

    public function toAccount_maintenance(){
        return view('account_maintenance.account_maintenance',[
            "page" => 'Account Maintenance',
            "accounts" => Account::where('deleted_at',NULL)->get(),
        ]);
    }
    public function toAccountDetail($id){
        return view('account_maintenance.detail',[
            'account' => Account::where('id', $id)->first(),
            'page' => 'Account Maintenance',
            'roles' => Role::get(),
        ]);
    }
    public function editAccountMaintenance(Request $req){
        $date = Carbon::now();
        $date->setTimezone('Asia/Jakarta');

        Account::where('id', $req->id)->update([
            'role_id' => $req->role,
            'updated_at' => $date,
        ]);

        return redirect('/account_maintenance');
    }
    public function deleteAccount(Request $req){
        $date = Carbon::now();
        $date->setTimezone('Asia/Jakarta');


        Account::where('id', $req->id)->update([
            'deleted_at' => $date,
        ]);

        if($req->id == Auth::user()->id){
            $this->logout($req);
        }

        return redirect('/account_maintenance');
    }

    public function logout(Request $req){
        Auth::logout();
        $req->session()->invalidate();
        $req->session()->regenerateToken();
        return view('/success',[
            'header' => 'Log Out Success',
            'body' => "",
            "footer" => "Click here to log in",
            "link" => "/login"
        ]);
    }
}

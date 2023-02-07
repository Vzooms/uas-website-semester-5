<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Gender;
use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Storage;

class AccountController extends Controller
{

    public function languange(Request $req)
    {
        session(['locale' => $req->languange]);
        return redirect()->back();
    }

    public function toIndex(){
        App::setlocale(session('locale'));

        return view('index');
    }

    // ------------------------------------------------------------------------------------------- REGISTER
    public function toRegister(){
        App::setlocale(session('locale'));

        return view('register',[
            'roles' => Role::get(),
            'genders' => Gender::get()
        ]);
    }
    public function register(Request $req){
        App::setlocale(session('locale'));

        $img = $req->file('display_picture');
        $display_picture_link = $img->getClientOriginalName();
        Storage::putFileAs('public/images', $img, $display_picture_link);

        $req = $req->validate([
            "first_name" => 'required|max:25|regex:/[a-zA-Z\s]+$/',
            "last_name" => 'required|max:25|regex:/[a-zA-Z\s]+$/',
            "email" => 'required|email',
            "roles" => 'required',
            "gender" => 'required',
            "password" => 'required|min:8|regex:/.*[0-9].*+$/',
            "confirm-password" => 'same:password',
        ]);

        Account::create([
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
        App::setlocale(session('locale'));

        return view('login');
    }
    public function login(Request $req){
        App::setlocale(session('locale'));

        $credentials = $req->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials, true)) {
            $req->session()->regenerate();

            return redirect('/home');
        }

        return redirect()->back()->withErrors('wrong email or password');
    }

    //  ------------------------------------------------------------------------------------------ PROFILE
    public function toProfile(){
        App::setlocale(session('locale'));

        return view('profile',[
            'roles' => Role::get(),
            'genders' => Gender::get(),
            'account' => Auth::user(),
            'page' => 'Profile'
        ]);
    }
    public function editProfile(Request $req){
        App::setlocale(session('locale'));

        $img = $req->file('display_picture');
        $display_picture_link = $img->getClientOriginalName();
        Storage::putFileAs('public/images', $img, $display_picture_link);

        $req = $req->validate([
            "first_name" => 'required|max:25|regex:/[a-zA-Z\s]+$/',
            "last_name" => 'required|max:25|regex:/[a-zA-Z\s]+$/',
            "email" => 'required|email',
            "gender" => 'required',
            "password" => 'required|min:8|regex:/.*[0-9].*+$/',
            "confirm-password" => 'same:password',
        ]);

        Account::where('id', Auth::user()->id)->update([
            "first_name" => $req['first_name'],
            "last_name" => $req['last_name'],
            "email" => $req['email'],
            "gender_id" => $req['gender'],
            "password" => hash::make($req['password']),
            "display_picture_link" => $display_picture_link,
        ]);

        return view('/success',[
            'header' => 'Saved',
            'body' => "Success",
            "footer" => "Click here to \"Home\"",
            "link" => "/home"
        ]);
    }

    public function toAccount_maintenance(){
        App::setlocale(session('locale'));

        return view('account_maintenance.account_maintenance',[
            "page" => 'Account Maintenance',
            "accounts" => Account::get(),
        ]);
    }
    public function toAccountDetail($id){
        App::setlocale(session('locale'));

        return view('account_maintenance.detail',[
            'account' => Account::where('id', $id)->first(),
            'page' => 'Account Maintenance',
            'roles' => Role::get(),
        ]);
    }
    public function editAccountMaintenance(Request $req){
        App::setlocale(session('locale'));

        Account::where('id', $req->id)->update([
            'role_id' => $req->role,
        ]);

        return redirect('/account_maintenance');
    }
    public function deleteAccount(Request $req){
        App::setlocale(session('locale'));
        Account::where('id', $req->id)->delete();

        if($req->id == Auth::user()->id){
            $this->logout($req);
        }

        return redirect('/account_maintenance');
    }

    public function logout(Request $req){
        App::setlocale(session('locale'));
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

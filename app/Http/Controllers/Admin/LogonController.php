<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewAdminAccount;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\ValidateLogin;
class LogonController extends Controller
{
    public function login_show_form(){
        return view('admin.login');
    }

    public function register_show_form(){
        return view('admin.register');
    }

    public function store_new_admin_account(NewAdminAccount $req){
        $req->validated();
        $user = new User();
        $user->name = $req['username'];
        $user->email = $req['email'];
        $user->password = Hash::make($req['password']);
        $user->role = 1;
        $user->status = 0;
        $user->save();

        return redirect()->route('admin.login')->withErrors(['wait' => 'Our management will contact you within 24 hours!']);
    }

    public function login(ValidateLogin $req){
        $req->validated();
        $credentials = $req->only('email_name',"password");

        if(Auth::attempt(['name' => $credentials['email_name'], 'password' => $credentials['password']])){
            $user = User::where("name",$credentials['email_name'])->first();
            if( $user->role == 1 && $user->status ==  1){
                return redirect()->route('dashboard');
            }else if($user->role == 0){
                Auth::logout();
                return redirect()->route('admin.login')->withErrors(['wait' => 'You have not permission with this account!']);
            }else{
                Auth::logout();
                return redirect()->route('admin.login')->withErrors(['wait' => 'Our management will contact you within 24 hours!']);
            }
        }elseif (Auth::attempt(['email' => $credentials['email_name'], 'password' => $credentials['password']])) {
            $user = User::where("email", $credentials['email_name'])->first();
            if ($user->role == 1 && $user->status == 1) {
                return redirect()->route('dashboard');
            } elseif ($user->role == 0) {
                Auth::logout();
                return redirect()->route('admin.login')->withErrors(['wait' => 'You have not permission with this account!']);
            } else {
                Auth::logout();
                return redirect()->route('admin.login')->withErrors(['wait' => 'Our management will contact you within 24 hours!']);
            }
        } else {
            return redirect()->route('admin.login')->withErrors(['wait' => 'Password or email is incorrect!']);
        };
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('admin.login');
    }
}

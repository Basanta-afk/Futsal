<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use Auth;

class UserController extends Controller
{
    public function giveForm(){
    return view('layouts.pages.home.customer.regesterform');
    }
    public function regesterUser(request $request){
        $userToStore=new User();
        $userToStore->name=$request->get('name');
        $userToStore->email=$request->get('email');
        $userToStore->password=Hash::make($request->get('password'));
        $result=$userToStore->save();
        if($result){
            return redirect('/');
        }
        dd('Unsuccessful');
        }

    public function giveLoginForm(){
        return view('layouts.pages.home.customer.loginform');
    }
    public function processLoginDetails(request $request){
        if(Auth::attempt($request->except(['_token', 'submit']))){
            dd('You are logged in');
        }
        else{
            dd('log in failure');
        }
    }

    public function logoutUser(){
        dd();
        if(Auth::check()){
            Auth::logout();
            return redirect('/login-form');
        }
    }
}


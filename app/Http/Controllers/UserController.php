<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    function login(Request $req){
        $user =  User::where(['email'=>$req->useremail])->first();
        
        
        if(!$user || !Hash::check($req->userpassword, $user->password)){
            return 'username and password are not matched';
            
        }else{
            $req->session()->put('user',$user);
            return redirect('/');
        }
    }

    function signUp(Request $req){
        $user = new User();
        $user->name = $req->username;
        $user->email = $req->useremail;
        $user->password = Hash::make($req->userpassword);
        $user->save();

        return redirect('/login');
    }
}

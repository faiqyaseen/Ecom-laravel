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
}

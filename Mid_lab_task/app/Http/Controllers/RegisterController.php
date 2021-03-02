<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\User;

class RegisterController extends Controller
{
    public function index(){
        return view('registration.index');
    }

    public function store(Request $req){
        $user = new User();
        $user->FirstaName     = $req->FirstaName;
        $user->Lastname     = $req->Lastname;
        $user->dob    = $req->dob ;
        $user->gender     = $req->gender;
        $user->adress    = $req->adress;
        $user->companyName      = $req->companyName;
        $user->country      = $req->country;
        
        $user->phone         = $req->phone;
        $user->email         = $req->email;
        $user->username  = $req->username;
        $user-> password         = $req->password;
        $user->conPassword       = $req->conPassword;
        $user->type        = $req->type ;
     
        $user->save();
        //return redirect()->route('{{route('registration')}}');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;

class RegisterController extends Controller
{
    //
    function register(){
        return view('register');
    }
     function registerInsert(Request $request){
        $register = new Register;
        $register->username = $request->username;
        $register->password = $request->password;
        $register->confirm_password = $request->confirm_password;
        $register->save();
        return redirect('register');
        
     }

}

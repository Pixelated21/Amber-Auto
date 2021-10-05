<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Hash;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index(){
        return view("Registration_Login.registration");
    }
    public function on_register(Request $request) {
//        dd($request->all());

        $this->validate($request,[
            'name' => 'required|max:255',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:6',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        if (Auth::attempt(
            ['email' => $request->email , 'password' => $request->password])) {

            return redirect()->route("Homepage");
        }



    }
}

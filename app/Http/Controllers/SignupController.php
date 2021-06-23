<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class SignupController extends Controller
{
    public function index(){
        return view('signup');
    }

    public function signup(Request $request){
        $validated = $request->validate([
            'full_name' => 'required',
            'user_name' => 'required',
            'email' => 'required|email|max:50',
            'password' => 'required|confirmed|min:8|max:20',
            'company_name' => 'required',
            'phone' => 'required|min:11|max:11',
            'city' => 'required',
            'country' => 'required'   
        ]);

        $user = new User();
        $user->full_name = $request['full_name'];
        $user->user_name = $request['user_name'];
        $user->email = $request['email'];
        $user->password = $request['password'];
        $user->company_name = $request['company_name'];
        $user->user_type = "Active";
        $user->phone = $request['phone'];
        $user->city = $request['city'];
        $user->country = $request['country'];
        $user->save();
        
    }
}

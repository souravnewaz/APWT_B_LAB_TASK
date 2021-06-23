<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function login(Request $request){
        $validated = $request->validate([
            'email' => 'required|email|max:50',
            'password' => 'required|min:8|max:20'
        ]);

        $email = $validated['email'];
        $password = $validated['password'];

        if(DB::table('users')->where('email', '=', $email)->where('password', '=', $password)->exists()){
            $users = DB::table('users')->where('email', '=', $email)->where('password', '=', $password)->first();
           
            session([
                'user_name' => $users->email,
                'user_type' => $users->user_type
            ]);
            return redirect('/home');
        } else {
            echo "Login failed";
        }
    }
}

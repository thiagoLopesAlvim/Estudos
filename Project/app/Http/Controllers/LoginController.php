<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view("login/login");
    }

    public function store(Request $request){
        // $request->validate([
        //     "email"=> "required|email",
        //     "password"=> "required"
        // ]);
        // $credentials= $request->only("email","password");

        // $authenticated = Auth::attempt($credentials);
        // if(!$authenticated){
        //     return redirect()->back()->with("error","email ou senha invalidos");
        // }
        // return redirect()->route('/')->with('success','Looged in');
            
        $support= $request->input("email");
     

        $user= User::where('email','like','%'.$support.'%');
        
            dd($user->password);
            //$request->input("email")
       
        if($user != $request->input("email")){
            return redirect()->back()->with("error","email ou senha invalidos");
        }
    
        if($request->input("password") != $user->password){
            return redirect()->back()->with("error","email ou senha invalidos");
         }
         
         
         Auth::loginUsingId($user->id); 
         return view("welcome");
        // return redirect()->route('/')->with('success','Looged in'); 
    }

    public function destroy(){
        Auth::logout();
        return redirect()->route('logins.index');
    }
}

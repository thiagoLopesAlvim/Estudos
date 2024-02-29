<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\StoreLoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Services\LoginService;

class LoginController extends Controller
{

    public function index(){
        return view("login/login");
    }

 

    public function store(StoreLoginRequest $request){
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
     

        //$user= (object)$this->service->getAll($support);

        $user= DB::table("users")->where("email",$support)->first();
            
            //$request->input("email")
       
        if($user->email != $request->input("email")){
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Illuminate\Support\Facades\Auth;
use Session;

class MyAuthController extends Controller
{
    public function login()
    {
        return view("auth.login");
    }
    public function registration()
    {
        return view("auth.registration");
    }
    public function registerUser(Request $request){
        $request->validate([
            'name'=>'required',
            'lastName'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:5',
            'rcpNumber'=>'required'
        ]);
        $user = new User();
        $user->name=$request->name;
        $user->lastName=$request->lastName;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->rcpNumber=$request->rcpNumber;
        $res = $user->save();
        if($res){
            return back()->with('success','Rejestracja zakończona powodzeniem');
        }
        else{
            return back()->with('fail','Wystąpił problem podczas rejestracji');
        }
    }

    public function loginUser(Request $request){
        $credentials=$request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5',
            'rcpNumber'=>'required'
        ]);
        $user = User::where('email','=',$request->email, 'and', 'rcpNumber','=',$request->rcpNumber)->first();
        if($user){
            if(Auth::attempt($credentials)){
                return redirect('dashboard');
            }else{
                return back()->with('fail', 'Niepoprawne hasło.');
            }
        }
        else{
            return back()->with('fail', 'Ten email nie jest zarejestrowany.');
        }
    }
    public function dashboard(){
        $data = array();
        return view('dashboard', compact('data'));
    }


    public function logout(){

        Auth::logout();
        return redirect('login');
    }
}

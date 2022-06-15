<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\DB; 
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login() {
        return view('user-login');
    }

    public function authenticated(Request $request) {
        $validated = $request->validate([
            'email' => 'required',
            'password'=>'required'
            //add validation for password -> keep only email for testing
        ]);
        session(['email' => $request->email]);
        //view dashboard does not exist yet - when user logs in they will be redirected
        return redirect('dashboard');
    }
    public function logout(Request $request) {
        $request->session()->forget('email'); 
        //user is redrected back to the login page for now - change this to home page later.
        return redirect('login');
    }
    public function register() {
        return view('register-user');
    }
    public function register_submit(Request $request) {
        $validations = Validator::make($request->all(), [
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required|email', 
            'password'=>'required', 
            'username'=>'required|max:50',
            'type'=>'required'
        ]);
        if ($validations->fails()) {
            return response()->json(['errors' => $validations->errors()->all()]);
        }
        
        $newUser = new User;

        $newUser->first_name = $request->first_name;
        $newUser->last_name=$request->last_name;
        $newUser->username = $request->username;
        $newUser->email = $request->email;
        $newUser->password = Hash::make($request->password);
        $newUser->type = $request->type;
        

        $newUser->save();

        return redirect('/login')->with('success', 'Registered successfully');
    }

}

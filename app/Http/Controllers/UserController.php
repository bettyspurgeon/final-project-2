<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Error;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $value = $request->session()->get('email');
        $user = DB::table('users')->where('email', $value)->first();
        return view('dashboard', ['user' => $user]);
    }
    public function login()
    {
        return view('user-login');
    }

    public function authenticated(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required',
            'password' => 'required'
            //add validation for password -> keep only email for testing
        ]);
        if ($validated) {
            $returnedUser =
                User::where('email', $request->email)->first();

            if (Hash::check($request->password, $returnedUser->password)) {
                session(['email' => $request->email]);
                return redirect('/dashboard');
            } else {
                return redirect()->back()->withErrors("Wrong Email or Password.");
            }
        }
    }
    public function logout(Request $request)
    {
        $request->session()->forget('email');
        return view('homepage');
    }
    public function register()
    {
        return view('register-user');
    }
    public function register_submit(Request $request)
    {
        $validations = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|unique:users|email',
            'password' => ['required', Password::min(8)->mixedCase()->numbers()],
            'username' => 'required|unique:users|max:50',
            'type' => 'required'
        ]);
        if ($validations->fails()) {
            return redirect()->back()->withErrors($validations)->withInput();
        }

        $newUser = new User;

        $newUser->first_name = $request->first_name;
        $newUser->last_name = $request->last_name;
        $newUser->username = $request->username;
        $newUser->email = $request->email;
        $newUser->password = Hash::make($request->password);
        $newUser->type = $request->type;


        $newUser->save();

        session(['email' => $request->email]);

        return redirect('/dashboard')->with('success', 'Registered successfully');
    }
    //functions for getting and update a single user's information
    // public function get_user_info(Request $request){
    //     $value = $request->session()->get('email'); 
    //     $user = User::find($value);
    //     return view('', ['user'=> $user]);
    // }
    // public function user_update() {

    //}
}

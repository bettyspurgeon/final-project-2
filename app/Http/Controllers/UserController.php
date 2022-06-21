<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\UserPreference;
use Error;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $value = $request->session()->get('email');
        $user = DB::table('users')->where('email', $value)->first();
        return view('UI-views.dashboard', ['user' => $user]);
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
        return view('UI-views.homepage');
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
    public function get_user_info(Request $request, $id)
    {
        $user = User::find($id);

        return view('user-pages.profile', ['user' => $user]);
    }
    public function user_update(Request $request, $id)
    {
        $user = User::find($id);
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->username = $request->username;
        $user->type = $request->type;

        $result = $user->save();

        if ($result) {
            return redirect("/profile/$id")->with('success', 'Updated successfully');
        } else {
            return redirect("/profile/$id")->with('error', 'Problem inserting. Try later.');
        }
    }
    //show user preferences
    public function preferences()
    {
        return view('user-pages.user-preferences');
    }
    //update user preferences
    public function update_preferences(Request $request, $id)
    {
        $validations = Validator::make($request->all(), [
            'price_lowest' => 'required|lt:price_highest|numeric',
            'price_highest' => 'required|gt:price_lowest|numeric',

        ], $messages = [
            'lt' => 'The Min Price must be lower than the Max Price',
            'gt' => 'The Max Price must be higher than the Min Price',
        ]);

        if ($validations->fails()) {
            return redirect()->back()->withErrors($validations)->withInput();
        }

        $user = UserPreference::where("user_id", $id)->first();
        if (!$user) {
            $user->user_id = $id;
        }

        $user->price_lowest = $request->price_lowest;
        $user->price_highest = $request->price_highest;
        $user->location = $request->location;
        $user->bedrooms = $request->bedrooms;
        $user->bathrooms = $request->bathrooms;
        $user->children = $request->children;
        $user->pets = $request->pets;
        $user->parking = $request->parking;


        $result = $user->save();

        if ($result) {
            return redirect("/preferences/$id")->with('success', 'Updated successfully');
        } else {
            return redirect("/preferences/$id")->with('error', 'Problem inserting. Try later.');
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Models\LandlordPreference;
use App\Models\Properties;
use App\Models\User;



class LandlordController extends Controller
{
    public function index()
    {
        $landlordpreference = LandlordPreference::JOIN('Properties', 'properties.id', '=', 'landlord_preferences.property_id')->get();
        //->INNERJOIN('Properties', 'properties.id', '=', 'landlordpreference.property_id')


        // dd($landlordpreference);

        return view('landlord-views.landlordpreference', ['landlordpreference' => $landlordpreference]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($property_id)
    {
        $property = Properties::find($property_id);
        $preference = LandlordPreference::where('property_id', $property_id)->first();
    
        return view('landlord-views.landlordpreference-new', ['property' => $property, 'preference' => $preference]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $property_id)
    {

        $request->validate([
            'contract' => 'required',
            'income' => 'required',

        ]);

        $result = new LandlordPreference;

        $user = User::where('email', session('email'))->first();
        $result->user_id = $user->id;
        $result->property_id = $property_id;
        $result->contract = strtolower($request->contract);
        $result->income = $request->income;


        $result->save();

        if ($result) {
            return redirect("landlordpreference/create/$property_id")->with('success', 'Your preferences have been stored sussessfully!');
        } else {
            return redirect("landlordpreference/create/$property_id")->with('error', 'We were unable to store your preferences at this time - please try again later!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $landlordpreference = landlordPreference::find($id);
        return view('landlord-views.landlordpreference-details', ['landlordpreference' => $landlordpreference]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $landlordpreference = LandlordPreference::where('property_id', $id)->first();
        $property = Properties::find($id); 
        return view('landlord-views.landlordpreference-update', ['landlordpreference' => $landlordpreference, 'property' => $property]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([

            'contract' => 'required',
            'income' => 'required',
        ]);
        $landlordpreference = landlordPreference::where('property_id', $id)->first();

        $user = User::where('email', session('email'))->first();
        $landlordpreference->user_id = $user->id;
        $landlordpreference->property_id = $id;

        $landlordpreference->contract = $request->contract;
        $landlordpreference->income = $request->income;


        $result = $landlordpreference->save();

        if ($result) {
            return redirect("/landlordpreference/update/$id")->with('success', 'Your new tenant preferences have been successfully updated!');
        } else {
            return redirect("/landlordpreference/update/$id")->with('error', 'There was a problem updating your preferences at this time. Please try again later.');
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $landlordpreference = LandlordPreference::where('id', $id)->delete();

        if ($landlordpreference) {
            return redirect('landlordpreference')->with('success', "We've successfully deleted your tenant preference!");
        } else {
            return redirect('landlordpreference')->with('error', 'There is some thing wrong for delete landlordpreference, try again later !');
        }
    }
}

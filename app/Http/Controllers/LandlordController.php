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
    $landlordpreference = LandlordPreference::JOIN( 'Properties', 'properties.id', '=', 'landlord_preferences.property_id')->get();
     //->INNERJOIN('Properties', 'properties.id', '=', 'landlordpreference.property_id')
     

    dd($landlordpreference);

        return view('landlordpreference', ['landlordpreference' => $landlordpreference]);

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('landlordpreference-new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {

        $request->validate([
            'contract' => 'required',
            'income' => 'required',

        ]);

        $result = new LandlordPreference;
        
        $user = User::where('email', session('email'))->first();
        $result->user_id = $user->id;

        $properties = Properties::where('property_id', $id)->first();
        $result->property_id = $properties->id;

        $result->contract = strtolower($request->contract);
        $result->income = $request->income;


        $result->save();

        if ($result) {
            return redirect('landlordpreference')->with('message', 'Inserted new landlordpreference sussessfully!');
        } else {
            return redirect('landlordpreference')->with('error', 'There is some thing wrong for inserted new landlordpreference, try again later !');
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
        return view('landlordpreference-details',['landlordpreference'=> $landlordpreference]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $landlordpreference = LandlordPreference::where('id', $id)->get();
        return view('landlordpreference-update', ['landlordpreference' => $landlordpreference[0]]);

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
            'income' => 'required|numeric',
        ]);
        $landlordpreference = landlordPreference::find($id);
        
        $user = User::where('email', session('email'))->first();
        $landlordpreference->user_id = $user->id;

        $property = Properties::where("property_id", $id)->first();
        $landlordpreference->property_id = $property->$id;

        $landlordpreference->contract = $request->contract;
        $landlordpreference->income = $request->income;


        $result = $landlordpreference->save();

        if ($result) {
            return redirect("/myproperties/update/$id")->with('message', 'Update properties sussessfully!');
        } else {
           redirect("/myproperties/update/$id")->with('error', 'There is some thing wrong for update properties, try again later !');
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
            return redirect('landlordpreference')->with('message', 'Delete landlordpreference sussessfully!');
        } else {
            return redirect('landlordpreference')->with('error', 'There is some thing wrong for delete landlordpreference, try again later !');
        }
    }

    
}



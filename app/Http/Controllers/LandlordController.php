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
    $landlordPreference = LandlordPreference::all();
    //dd($landlordPreference);

        return view('landlordpreference', ['landlordPreference' => $landlordPreference]);

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
        $landlordPreference = landlordPreference::find($id);
        return view('landlordPreference-details',['landlordPreference'=> $landlordPreference]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $landlordPreference = LandlordPreference::where('id', $id)->get();
        return view('landlordPreference-update', ['landlordPreference' => $landlordPreference[0]]);

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
        $landlordPreference = landlordPreference::find($id);
        
        $user = User::where('email', session('email'))->first();
        $landlordPreference->user_id = $user->id;

        $property = Properties::where("property_id", $id)->first();
        $landlordPreference->property_id = $property->$id;

        $landlordPreference->contract = $request->contract;
        $landlordPreference->income = $request->income;


        $result = $landlordPreference->save();

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
        $landlordPreference = LandlordPreference::where('id', $id)->delete();

        if ($landlordPreference) {
            return redirect('landlordpreference')->with('message', 'Delete landlordpreference sussessfully!');
        } else {
            return redirect('landlordpreference')->with('error', 'There is some thing wrong for delete landlordpreference, try again later !');
        }
    }

    
}



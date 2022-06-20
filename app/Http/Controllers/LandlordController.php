<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Models\LandlordPreference;

use App\Models\User;



class LandlordController extends Controller
{
    public function index()
    {
    $landlordPreference = LandlordPreference::all();
    //dd($landlordPreference);

        return view('landlordPreference', ['landlordPreference' => $landlordPreference]);

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('new-landlordPreference');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'contract' => 'required',
            'income' => 'required|numeric',

        ]);

        $result = new LandlordPreference;

        $user = User::where('email', session('email'))->first();
        $result->user_id = $user->id;

        // $result->property_id = $request->$id;

        $result->contract = strtolower($request->contract);
        $result->income = $request->price;


        $result->save();

        if ($result) {
            return redirect('properties')->with('message', 'Inserted new properties sussessfully!');
        } else {
            return redirect('properties')->with('error', 'There is some thing wrong for inserted new properties, try again later !');
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
        return view('update-landlordPreference', ['landlordPreference' => $landlordPreference[0]]);

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
        $landlordPreference->property_id = $request->$id;
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
            return redirect('properties')->with('message', 'Delete properties sussessfully!');
        } else {
            return redirect('properties')->with('error', 'There is some thing wrong for delete properties, try again later !');
        }
    }

    
}



<?php

namespace App\Http\Controllers;

use App\Models\Properties;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\LandlordPreference;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properties = Properties::JOIN( 'landlord_preferences', 'landlord_preferences.property_id','=','properties.id')->get();
        //dd($properties);

        return view('property-views.properties', ['properties' => $properties]);
        return view('property-show.properties', ['properties' => $properties]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('landlord-views.new-properties');
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
            'type' => 'required',
            'price' => 'required|numeric',
            'location' => 'required',
            'date_avaliable' => 'required|date',
            'area' => 'required|integer',
            'bedrooms' => 'required|integer',
            'bathrooms' => 'required|numeric',
            'parking' => 'required',
            'children' => 'required',
            'pets' => 'required',
            'pictures' => 'required|image',

        ]);

        $result = new Properties;
        $fileName = $request->pictures->getClientOriginalName();
        $publicPath = public_path('uploads');
        $request->pictures->move($publicPath, $fileName);

        $user = User::where('email', session('email'))->first();
        $result->user_id = $user->id;

        $result->type = strtolower($request->type);
        $result->price = $request->price;
        $result->location = $request->location;
        $result->date_avaliable = $request->date_avaliable;
        $result->area = $request->area;
        $result->bedrooms = (int)$request->bedrooms;
        $result->bathrooms = (double)$request->bathrooms;
        $result->children = $request->children;
        $result->pets = $request->pets;
        $result->parking = true;
        $result->description = (string)$request->description;
        $result->pictures = $fileName;;

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
        $properties = Properties::find($id);
        return view('property-views.properties-details',['property'=> $properties]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $properties = Properties::where('id', $id)->get();
        return view('property-views.update-properties', ['property' => $properties[0]]);

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
        //$request->validate([
        //     'type' => 'required',
        //     'price' => 'required|numeric',
        //     'location' => 'required',
        //     'date_avaliable' => 'required|date',
        //     'area' => 'required|numeric',
        //     'bedrooms' => 'required|numeric',
        //     'bathrooms' => 'required|numeric',
        //     'parking' => 'required',
        //     'children' => 'required',
        //     'pets' => 'required',
        //     'description' => 'required',
        //    'pictures' => 'required|image',

        // ]);
        $property = Properties::find($id);
        
        $user = User::where('email', session('email'))->first();
        $property->user_id = $user->id;
        $property->type = strtolower($request->type);
        $property->price = $request->price;
        $property->location = $request->location;
        $property->date_avaliable = $request->date_avaliable;
        $property->area = $request->area;
        $property->bedrooms = (int)$request->bedrooms;
        $property->bathrooms = (double) $request->bathrooms;
        $property->children = $request->children;
        $property->pets = $request->pets;
        $property->parking = true;
        $property->description = (string)$request->description;
       

   

        if($request->pictures != ''){        
            $publicPath = public_path('uploads');
   
             //code to remove an old file
             if($request->pictures != ''  && $request->pictures != null){
                  $file_old =  $_POST['pictures'];
                 
                  $file_old->delete();
             }
   
             //upload new file
             $file = $property->pictures = $request->pictures;
             $fileName = $file->getClientOriginalName();
             $file->move($publicPath, $fileName);
   
             //for update in table
             $property->update(['pictures' => $fileName]);
        }
      

        $result = $property->save();

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
        $properties = Properties::where('id', $id)->delete();

        if ($properties) {
            return redirect('properties')->with('message', 'Delete properties sussessfully!');
        } else {
            return redirect('properties')->with('error', 'There is some thing wrong for delete properties, try again later !');
        }
    }

    //Return a specific user's properties
    public function user_properties($id) {
        $properties = Properties::where('user_id', $id)->get();
        
        return view('landlord-views.user-properties', ['properties' => $properties]);
        
    }
}

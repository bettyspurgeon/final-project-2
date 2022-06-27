<?php

namespace App\Http\Controllers;

use App\Models\Properties;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\LandlordPreference;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\File;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properties = Properties::all();
        
        return view('property-views.properties', ['properties' => $properties]);
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

        $coordinates = Http::get("http://apiv3.geoportail.lu/geocode/search?queryString=$request->house_number, $request->street_name $request->location, $request->post_code Luxembourg")->object()->results['0']->geomlonlat;
        $longitude = $coordinates->coordinates[0];
        $latitude = $coordinates->coordinates[1];



        $user = User::where('email', session('email'))->first();
        $result->user_id = $user->id;

        $result->type = strtolower($request->type);
        $result->purpose = $user->type == 'landlord' ? "rent" : "sale"; 
        $result->price = $request->price;
        $result->location = $request->location;
        $result->house_number = $request->house_number;
        $result->street_name = $request->street_name;
        $result->post_code = $request->post_code;
        $result->date_avaliable = $request->date_avaliable;
        $result->bedrooms = (int)$request->bedrooms;
        $result->bathrooms = (float)$request->bathrooms;
        $result->children = $request->children;
        $result->pets = $request->pets;
        $result->parking = $request->parking;
        $result->description = (string)$request->description;
        $result->pictures = $fileName;
        $result->longitude = $longitude;
        $result->latitude = $latitude;

        $result->save();


        if ($result) {
            return redirect("/landlordpreference/create/$result->id")->with('message', 'Inserted new properties sussessfully!');
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
        $property = properties::rightjoin('landlord_preferences', "properties.id", '=', 'landlord_preferences.property_id')->where('properties.id', $id)->first();  

   
        return view('property-views.properties-details', ['property' => $property]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $properties = Properties::where('id', $id)->first();
        $preference = LandlordPreference::where('property_id', $id)->first();
     
        return view('property-views.update-properties', ['property' => $properties, 'preference' => $preference]);
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
        //     
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
        $property->bedrooms = (int)$request->bedrooms;
        $property->bathrooms = (float) $request->bathrooms;
        $property->children = $request->children;
        $property->pets = $request->pets;
        $property->parking = true;
        $property->description = (string)$request->description;




        if ($request->pictures != '') {
            $publicPath = public_path('uploads');

            //code to remove an old file
            if ($request->pictures != ''  && $request->pictures != null) {
                $file_old = $property->pictures;
                File::delete($file_old);
               
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
            return back()->with('success', 'Delete properties sussessfully!');
        } else {
            return back()->with('error', 'There is some thing wrong for delete properties, try again later !');
        }
    }

    //Return a specific user's properties
    public function user_properties($id)
    {
        $properties = Properties::where('user_id', $id)->get();

        return view('landlord-views.user-properties', ['properties' => $properties]);
    }
    //Return homepage properties
    public function homer_properties()
    {
        $properties = Properties::WHERE('purpose', 'like', '%rent')
            ->limit(3)->get();;
        //dd($properties); 

        return view('UI-views.hrproperties', ['properties' => $properties]);;
    }
    public function homes_properties()
    {
        $properties = Properties::WHERE('purpose', 'like', '%sale')
            ->limit(3)->get();;
        //dd($properties); 

        return view('UI-views.hsproperties', ['properties' => $properties]);;
    }
}

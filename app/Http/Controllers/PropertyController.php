<?php

namespace App\Http\Controllers;

use App\Models\Properties;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Models\User;

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

        return view('properties', ['properties' => $properties]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('new-properties');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'type' => 'required',
        //     'price' => 'required|numeric',
        //     'location' => 'required',
        //     'date_avaliable' => 'required|date',
        //     'area' => 'required|integer',
        //     'bedrooms' => 'required|integer',
        //     'bathrooms' => 'required|numeric',
        //     'parking' => 'required',
        //     'children' => 'required',
        //     'pets' => 'required',
        //     // 'pictures' => 'required|image',

        // ]);
        
        $result = new Properties;

        $user = User::where('email', session('email'))->first();
        // dd($user);
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
        $result->pictures = (string)$request->pictures;

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
        return view('properties-details',['property'=> $properties]);
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
        return view('update-properties', ['property' => $properties[0]]);

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
        // $request->validate([
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
        //     'pictures' => 'required|image',

        // ]);
        $result = new Properties;
        $user = User::where('email', session('email'))->first();
        // dd($user);
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
        $result->pictures = (string)$request->pictures;

        $result->save();

        if ($result) {
            return redirect('properties')->with('message', 'Update properties sussessfully!');
        } else {
            return redirect('properties')->with('error', 'There is some thing wrong for update properties, try again later !');
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
        return redirect('properties');

        if ($properties) {
            return redirect('properties')->with('message', 'Delete properties sussessfully!');
        } else {
            return redirect('properties')->with('error', 'There is some thing wrong for delete properties, try again later !');
        }
    }
}

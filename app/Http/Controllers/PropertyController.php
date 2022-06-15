<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Properties;

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
        return view('properties',['properties'=> $properties]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('new-property');
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
            'type' => 'required| apartment| house| flat share',
            'price'=>'required|numberic',
            'location'=> 'required',
            'date_avaliable'=>'required|date',
            'area'=>'required|numberic',
            'bedrooms'=>'required|numberic',
            'bathrooms'=>'required|numberic',
            'parking'=>'required',
            'children'=>'required',
            'pets'=>'required',
            'description'=>'required',
            'pictures'=>'required|image',

        ]);
        $result = new Properties;
        $result->type = $request->type;
        $result->price = $request->price;
        $result->location = $request->location;
        $result->date_aviliable = $request->date_aviliable;
        $result->area = $request->area;
        $result->parking = $request->parking;
        $result->bedrooms = $request->bedrooms;
        $result->bathrooms = $request->bathrooms;
        $result->children = $request->children;
        $result->pets = $request->pets;
        $result->description= $request->description;
        $result->pictures = $request->pictures;

        $result->save();

        if($result)
        return redirect('properties')->with('message','Inserted new properties sussessfully!');
        else
        return redirect ('properties')->with('error','There is some thing wrong for inserted new properties, try again later !');  

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
        return view('showproperties',['properties'=> $properties]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $properties = Properties::where('id',$id)->get();
        return view('update-properties',['properties'=> $properties[0]]);
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
            'type' => 'required| apartment| house| flat share',
            'price'=>'required|numberic',
            'location'=> 'required',
            'date_avaliable'=>'required|date',
            'area'=>'required|numberic',
            'bedrooms'=>'required|numberic',
            'bathrooms'=>'required|numberic',
            'parking'=>'required',
            'children'=>'required',
            'pets'=>'required',
            'description'=>'required',
            'pictures'=>'required|image',

        ]);
        $result = new Properties;
        $result->type = $request->name;
        $result->price = $request->price;
        $result->location = $request->location;
        $result->date_aviliable = $request->date_aviliable;
        $result->area = $request->area;
        $result->bedrooms = $request->bedrooms;
        $result->bathrooms = $request->bathrooms;
        $result->children = $request->children;
        $result->pets = $request->pets;
        $result->description= $request->description;
        $result->pictures = $request->pictures;

        $result->save();

        if($result)
        return redirect('properties')->with('message','Update properties sussessfully!');
        else
        return redirect ('properties')->with('error','There is some thing wrong for update properties, try again later !');  

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

        if($result)
        return redirect('properties')->with('message','Delete properties sussessfully!');
        else
        return redirect ('properties')->with('error','There is some thing wrong for delete properties, try again later !');  

    }
}

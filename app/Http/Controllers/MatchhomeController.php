<?php

namespace App\Http\Controllers;


use App\Models\Properties;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\LandlordPreference;
use Illuminate\Support\Facades\Http;


class MatchhomeController extends Controller
{
    public function index()
    {
        $properties = Properties::JOIN( 'landlord_preferences', 'landlord_preferences.property_id','=','properties.id')->
        JOIN('renter_preferences', 'renter_preferences.property_id','=','properties.id')
        ->JOIN('buyer_preferences', 'buyer_preferences.property_id','=','properties.id')->get();

        return view('property-views.properties', ['properties' => $properties]);


    }

}

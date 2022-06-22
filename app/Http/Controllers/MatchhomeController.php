<?php

namespace App\Http\Controllers;

use App\Models\LandlordPreference;
use Illuminate\Http\Request;
use App\Models\UserProfile;
use App\Models\Properties;
use App\Models\UserPreference;


class MatchhomeController extends Controller
{
    public function display_matches($id)
    {
        $profile = UserProfile::where('user_id', $id)->get();
        $landlord_preferences = LandlordPreference::all();
        $matched_properties = array();

        foreach ($landlord_preferences as $landlord_preference) {
            if ($landlord_preference['income'] <= $profile[0]->income) {
                if ($landlord_preference['contract'] == $profile[0]->contract) {
                    $matched_properties[] = $landlord_preference;
                }
            }
        }
        $complete_matches = array();
        foreach ($matched_properties as $matched_property) {
            $property = Properties::find($matched_property->id);
            $renter_preference = UserPreference::where('user_id', $id)->get();
            if ($property->price <= $renter_preference[0]->price_highest) {
                if ($property->bedrooms <= $renter_preference[0]->bedrooms &&  $property->bathrooms <= $renter_preference[0]->bathrooms) {
                    $complete_matches[] = $property;
                }
            }
        }
        return view('match-pages.matches', ['complete_matches' => $complete_matches]);
    }
}

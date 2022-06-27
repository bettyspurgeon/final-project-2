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
                if (
                    ($landlord_preference['contract'] === 'NONE') ||
                    ($landlord_preference['contract'] === $profile[0]->contract) ||
                    ($landlord_preference['contract'] === 'CDD' && ($profile[0]->contract === 'CDD' || $profile[0]->contract === 'CDI'))
                ) {
                    $matched_properties[] = $landlord_preference;
                }
            }
        }
        $user = $profile->first();
        $complete_matches = array();
        $renter_preference = UserPreference::where('user_id', $id)->first();
        
        if (!empty($renter_preference)) {

            foreach ($matched_properties as $matched_property) {
                $property = Properties::where("id", $matched_property->property_id)->first();

                //ensure the property is a rental property
                if ($property->purpose == 'rent') {
                    //ensure the pricing aligns with the renter's prices.
                    if ($property->price <= $renter_preference->price_highest && $property->price >= $renter_preference->price_lowest) {
                        //ensure the amount of bedrooms and bathrooms matches or is better
                        if ($property->bedrooms >= $renter_preference->bedrooms &&  $property->bathrooms >= $renter_preference->bathrooms) {
                            //ensure the parking, children, and pets categories match - can also be better
                            if (
                                (($property->pets == 1) || ($property->pets == 0 && $renter_preference->pets == 0))
                                &&
                                (($property->children == 1) || ($property->children == 0 && $renter_preference->children == 0))
                                && (($property->parking == 1) || ($property->parking == 0 && $renter_preference->parking == 0))
                            ) {
                                $complete_matches[] = $property;
                            }
                        }
                    }
                }
            }
            
            return view('match-pages.matches', ['complete_matches' => $complete_matches, 'user' => $user, 'renter_preference' => $renter_preference]);
        } else {
            return view('match-pages.matches', ['complete_matches' => $complete_matches, 'user' => $user, 'renter_preference' => $renter_preference]);
        }
    }
}

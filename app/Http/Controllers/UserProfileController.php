<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserProfile;
use App\Models\User;

class UserProfileController extends Controller
{
    public function index() {
        return view('user-pages.renter-file-upload'); 
    }
    public function upload_user_file(Request $request, $id)
    {
        $request->validate([

            'contract_type' => 'required',
            'income' => 'required|numeric',
            'renter_document' => 'required|mimes:pdf',
        ]);

        $fileName = $request->renter_document->getClientOriginalName();

        // Save the public path 
        $publicPath = public_path('uploads');

        // Save the file in the public/uploads folder
        $request->renter_document->move($publicPath, $fileName);

        $user = User::find($id);
        $userProfile = UserProfile::where('user_id', $id)->first();
        if ($userProfile == null) {
            $newProfile = new UserProfile;
            $newProfile->user_id = $id;
            if ($user->type == 'buyer') {
                $newProfile->property_type = 'buy';
            } else {
                $newProfile->property_type = 'rental';
            }
            $newProfile->document_path = $fileName;
            $newProfile->income = $request->income;
            $newProfile->contract = $request->contract_type;
            $newProfile->save();
            if ($newProfile) {
                return redirect("/user-profile/$id")->with('success', 'Updated your profile information Successfully!!');
            } else {
                return redirect("/user-profile/$id")->with('error', 'There was a problem updating your profile information.');
            }
        } else {
            $userProfile->document_path = $fileName;
            $userProfile->income = $request->income;
            $userProfile->contract = $request->contract_type;

            $userProfile->save();

            if ($userProfile) {
                return
                redirect("/user-profile/$id")->with('message', 'Updated your profile information Successfully!!');
            } else {
                return  redirect("/user-profile/$id")->with('error', 'There was a problem updating your profile information.');
            }
        }
    }
}

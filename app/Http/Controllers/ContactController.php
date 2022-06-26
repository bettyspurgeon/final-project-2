<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\User;
use Mail;

class ContactController extends Controller
{
    //shouw contact page
    public function index() {
        return view('contact.contact-page');
    }
    //save contact details including message as well as send the email
    public function save(Request $request) {
        $this->validate($request, [
            'name'=> 'required',
            'email'=> 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);
        $contact = new Contact;

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->phone_number = $request->phone_number;
        $contact->message = $request->message;

        $result=$contact->save();
        \Mail::send(
            'contact.contact-email',
            array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'subject' => $request->get('subject'),
                'phone_number' => $request->get('phone_number'),
                'user_message' => $request->get('message'),
            ),
            function ($message) use ($request) {
                $message->from($request->email);
                $message->to('hello@admin.com', 'Adminphp');
            }
        );
       if($result) {
        return back()->with('success', 'Thank you for contacting us!');
       } else {
        return back()->with('error', 'Could not send email.');
       }
        
    }
    public function interested_email($owner_id, $tenant_id) {
        $tenant = User::find($tenant_id);
        $owner = User::find($owner_id);
        $result = Mail::send(
            'contact.interested-owner',
            array(
                'owner_name' => $owner->first_name,
                'tenant_name' => $tenant->username,
                'email' => $tenant->email,
            ),
            function ($message) use ($owner) {
                $message->from('admin@matchhome.com', 'MatchHome Admin');
                $message->to($owner->email);
            }
        );
        if ($result) {
            return back()->with('success', 'We have sent an email to the property owner! Hopefully it will be a match!');
        } else {
            return back()->with('error', 'Could not send email.');
        }
    }
}

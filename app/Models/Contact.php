<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use Illuminate\Contracts\Mail\Mailable;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'email', 'mobile_number', 'subject', 'message'
    ];
    
}

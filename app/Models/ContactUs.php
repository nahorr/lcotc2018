<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    public $table = 'contactus';
 
	public $fillable = ['first_name', 'last_name', 'phone', 'email','message'];
}

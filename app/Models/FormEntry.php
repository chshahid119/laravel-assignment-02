<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FormEntry extends Model
{
    protected $fillable = [
        'name', 'email', 'password', 'age', 'profile_picture', 'bio', 'interests', 'gender', 'country', 'phone', 'address', 'postal_code', 'website', 'agree'
    ];
}

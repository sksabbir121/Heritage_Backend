<?php

// app/Models/Property.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = [
        'description',
        'location',
        'price',
        'image',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClassMaster extends Model
{
    protected $table = 'classmaster'; // Specify the actual table name

    protected $fillable = [
        'classname',
        // Add other fields as needed
    ];

    public $timestamps = false; // Assuming your table doesn't have timestamp columns
}

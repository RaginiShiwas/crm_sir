<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BinMaster extends Model
{
    protected $table = 'binmaster'; // Specify the actual table name

    protected $fillable = [
        'name',
        // Add other fields as needed
    ];

    public $timestamps = false; // Assuming your table doesn't have timestamp columns
}

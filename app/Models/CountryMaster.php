<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CountryMaster extends Model
{
    protected $table = 'countrymaster'; // Specify the actual table name

    protected $fillable = ['country_name'];
}

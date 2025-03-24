<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Statemaster extends Model
{
    protected $table = 'statemaster'; // Specify the actual table name

    protected $fillable = ['statename'];
}

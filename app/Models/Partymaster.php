<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PartyMaster extends Model
{
    protected $table = 'partymaster'; // Specify the actual table name

    protected $fillable = [
        'id',
        'vendorname',
        'printname',
        'vendorcode',
        'groupid',
        'address1',
        'address2',
        'city',
        'pincode',
        'state',
        'countryid',
        'pan_number',
        'gstnumber',
        'phone',
        'cellnumber',
        'email',
        'creditdays'
    ];
    public $timestamps = false;
    public function group()
    {
        return $this->belongsTo(GroupMaster::class, 'groupid', 'groupid');
    }
}

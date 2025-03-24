<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItemGroupMaster extends Model
{
    protected $table = 'itemgroupmaster';

    protected $fillable = ['groupname'];

    public $timestamps = false;
}

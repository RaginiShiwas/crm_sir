<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupMaster extends Model
{
    use HasFactory;

    protected $table = 'groupmaster';
    
    public function parties()
    {
        return $this->hasMany(PartyMaster::class, 'groupid', 'groupid');
    }// Define your table name if it's not the plural of the model name
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemMaster extends Model
{
    use HasFactory;

    protected $table = 'itemmaster'; // Specify the table name if it's not the default 'item_masters'
    
    protected $fillable = [
        'itemname', 'itemcode', 'ourcode', 'itemgroupid', 'classid', 'acc_group', 'locationid'
    ];
    public function itemGroup()
    {
        return $this->belongsTo(ItemGroupMaster::class, 'itemgroupid', 'id');
    }

    public function itemClass()
    {
        return $this->belongsTo(ClassMaster::class, 'classid', 'id');
    }

    public function accountGroup()
    {
        return $this->belongsTo(GroupMaster::class, 'acc_group', 'groupid');
    }
}

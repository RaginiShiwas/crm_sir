<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesOrderDetail extends Model
{
    use HasFactory;

    protected $table = 'sales_order_details';

    public function customer()
    {
        return $this->belongsTo(PartyMaster::class, 'customerid');
    }

    public function branch()
    {
        return $this->belongsTo(BranchMaster::class, 'branchid');
    }

    public function product()
    {
        return $this->belongsTo(ItemMaster::class, 'product_id');
    }
}

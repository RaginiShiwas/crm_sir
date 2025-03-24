<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinancialYear extends Model
{
    use HasFactory;

    // Define the table if it's different from the default convention
    protected $table = 'fyear';

    protected $fillable = ['date_from', 'date_to'];
}

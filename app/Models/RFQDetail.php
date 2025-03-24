<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RFQDetail extends Model
{
    use HasFactory;
    protected $table = 'rfqdetail';
    protected $fillable = [
        'priority',
        'customer_name',
        'customer',
        'customer_ansoff',
        'product_ansoff',
        'email',
        'email_cc',
        'temp',
        'rfq_status',
        'product_family',
        'segment',
        'geography',
        'project',
        'bdhead',
        'received_dt',
        'create_acc_manger',
        'division',
        'business_category',
        'plant',
        'amtekt1',
        'quote_targetdt',
        'target_price',
        'endcustomer',
        'partno',
        'partdesc',
        'annual_vol',
        'sorpdate',
        'businessvalue',
        'estimate_price',
        'rpelvascopre',
        'rmclvascopre',
        'acknowledge',
        'rfqsharedplant',
        'queries',
        'dtqueries',
        'feasiblity',
        'feasiblityrem',
        'investmentneeded',
        'quoterec',
        'quotemachine',
        'quot_sub_cust',
        'latest_quo_cust',
        'latestquo',
        'pricefinal',
        'latestcft',
        'latest_quo_cust',
        'businessaward',
        'statusbar',
        'rearfq',
        'comments',
        'rfqreview',
        'file_path',
    ];
    

}

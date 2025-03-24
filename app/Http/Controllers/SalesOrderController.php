<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SalesOrderDetail;

class SalesOrderController extends Controller
{
    public function index()
    {
        $salesOrders = SalesOrderDetail::with(['customer', 'branch', 'product'])
            ->where('canceled', 0)
            ->where('branchid', 1)
            ->orderBy('so_number')
            ->get();

        return view('sales_order_list', compact('salesOrders'));
    }
}

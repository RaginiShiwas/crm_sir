<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RFQController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ItemGroupController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\RFQQController;
use App\Http\Controllers\CommodityController;
use App\Http\Controllers\SalesOrderController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/customer_cont_list', function () {
    return view('customer_cont_list');
});

Route::get('/rfq_receipt', [RFQController::class, 'createLead']);
Route::post('/rfq_lead', [RFQController::class, 'store'])->name('rfq_lead.store');

Route::get('/customer_cont', [ContactController::class, 'showForm'])->name('customer_cont');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/customer_cont_list', [ContactController::class, 'list'])->name('customer_cont_list');
Route::get('/edit_customer_cont/{id}', [ContactController::class, 'edit'])->name('edit_customer_cont');
Route::post('/update_customer_cont/{id}', [ContactController::class, 'update'])->name('update_customer_cont');

Route::get('/item', [ItemGroupController::class, 'index'])->name('item-groups.index');
Route::post('/itemstore', [ItemGroupController::class, 'store'])->name('itemGroup.store');


Route::get('/', [AuthController::class, 'Index'])->name('login_page');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/item_list', function () {
    return view('item_list');
});
Route::get('/item_list', function () {
    return view('item_list');
});

Route::get('/items', [ItemGroupController::class, 'index'])->name('item_index');
Route::post('/items', [ItemGroupController::class, 'store'])->name('item_store');
Route::get('/item_list', [ItemGroupController::class, 'list'])->name('item_list');
Route::put('/item_update/{id}', [ItemGroupController::class, 'update'])->name('item_update');
Route::get('/edit_item/{id}/edit', [ItemGroupController::class, 'edit'])->name('edit_item');
// routes/web.php
//Route::get('/customer_cont_list', [ExportController::class,'exportPdf'])->name('export.pdf');

Route::get('/aggrement', function () {
    return view('aggrement');
});
Route::get('/rfq', function () {
    return view('rfq');
});
Route::post('/rfq', [RFQQController::class, 'store'])->name('rfq.store');
Route::get('/rfq/agreement', [RFQQController::class, 'agreement'])->name('rfq.agreement');

Route::get('/rfq_list', function () {
    return view('rfq_list');
});
Route::get('/rfq_list', [RFQQController::class, 'index'])->name('rfq.index');
Route::get('/rfq/{id}/edit', [RFQQController::class, 'edit'])->name('rfq.edit');
Route::put('/rfq/{id}', [RFQQController::class, 'update'])->name('rfq.update');
Route::get('/rfq_list', [RFQQController::class, 'index'])->name('rfq_list');
Route::get('/rfq', [RFQQController::class, 'showForm'])->name('rfq');
Route::get('/commodity', function () {
    return view('commodity');
});
Route::get('/commodity_list', function () {
    return view('commodity_list');
});
Route::get('/commodity_edit', function () {
    return view('commodity_edit');
});
Route::post('/commodity', [CommodityController::class, 'store'])->name('commodity.store');
Route::get('/commodity_list', [CommodityController::class, 'index'])->name('commodity.index');
Route::put('/commodity_update/{id}', [CommodityController::class, 'update'])->name('commodity.update');
Route::get('/commodity_edit/{id}', [CommodityController::class, 'edit'])->name('commodity.edit');
Route::put('/commodity_update/{id}', [CommodityController::class, 'update'])->name('commodity.update');
Route::get('/commodity_list', [CommodityController::class, 'index'])->name('commodity_list');

Route::get('/vendor-details/{id}', [RFQController::class, 'getVendorDetails'])->name('vendor.details');

Route::get('/sales_order', function () {
    return view('sales_order');
});
Route::get('/sales_order_list', function () {
    return view('sales_order_list');
});
Route::get('/sales_order_list', [SalesOrderController::class, 'index'])->name('sales_order_list.index');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
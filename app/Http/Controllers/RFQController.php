<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partymaster;
use App\Models\Classmaster;
use App\Models\ProjectMaster;
use App\Models\Employee;
use App\Models\BusinessCategory;
use App\Models\BranchMaster;
use App\Models\ItemMaster;
use App\Models\RFQDetail;
use Illuminate\Support\Facades\Storage;



class RFQController extends Controller
{
    public function createLead()
    {
        $customerNames = Partymaster::whereIn('groupid', [1, 2])
            ->orderBy('vendorname')
            ->pluck('vendorname', 'id');
        $productFamilies = Classmaster::orderBy('classname')->pluck('classname', 'id');
        $projects = ProjectMaster::orderBy('project_name')->pluck('project_name', 'id');
        $accountManagers = Employee::orderBy('empname')->pluck('empname', 'empid');
        $businessCategories = BusinessCategory::orderBy('category_name')->pluck('category_name', 'id');
        $partNumbers = ItemMaster::orderBy('itemcode')->pluck('itemcode', 'id');
        $plants = BranchMaster::orderBy('branchname')->pluck('branchname');
        $itemDescription = ItemMaster::orderBy('itemname')->pluck('itemname', 'id');

        return view('rfq_receipt', compact('customerNames', 'productFamilies', 'projects', 'accountManagers', 'businessCategories', 'plants', 'partNumbers', 'itemDescription'));
    }

    public function store(Request $request)
{
   // Validate the incoming request
    $validatedData = $request->validate([
        'priority' => 'required|string',
        'customer_name' => 'required|string',
        'customer' => 'required|string',
        'customer_ansoff' => 'required|string',
        'product_ansoff' => 'required|string',
        'email' => 'required|string',
        'email_cc' => 'required|string',
        'temp' => 'required|string',
        'rfq_status' => 'required|string',
        'product_family' => 'required|string',
        'segment' => 'required|string',
        'geography' => 'required|string',
        'project' => 'required|string',
        'bdhead' => 'required|string',
        'received_dt' => 'required|date',
        'create_acc_manger' => 'required|string',
        'division' => 'required|string',
        'business_category' => 'required|string',
        'plant' => 'required|string',
        'amtekt1' => 'required|string',
        'quote_targetdt' => 'required|date',
        'target_price' => 'required|string',
        'endcustomer' => 'required|string',
        'partno' => 'required|string',
        'partdesc' => 'required|string',
        'annual_vol' => 'required|string',
        'sorpdate' => 'required|date',
        'businessvalue' => 'required|string',
        'estimate_price' => 'required|string',
        'rpelvascopre' => 'required|string',
        'rmclvascopre' => 'required|string',
        'acknowledge' => 'required|string',
        'rfqsharedplant' => 'required|string',
        'queries' => 'required|string',
        'dtqueries' => 'required|date',
        'feasiblity' => 'required|date',
        'feasiblityrem' => 'required|string',
        'investmentneeded' => 'required|string',
        'quoterec' => 'required|string',
        'quotemachine' => 'required|string',
        'quot_sub_cust' => 'required|string',
        'latest_quo_cust' => 'required|date',
        'latestquo' => 'required|date',
        'pricefinal' => 'required|string',
        'latestcft' => 'required|string',
        'businessaward' => 'required|date',
        'statusbar' => 'required|string',
        'rearfq' => 'required|string',
        'comments' => 'required|string',
        'rfqreview' => 'required|string',
        'file_path' => 'required|file|mimes:jpg,jpeg,png,pdf,doc,docx|max:2048',
        
    ]);

    
    // Create a new RFQDetail instance and populate it with the validated data
    $rfqDetail = new RFQDetail();
    if ($request->hasFile('file_path')) {
        $filePath = $request->file('file_path')->store('uploads', 'public');
    }

// Populate the RFQDetail instance customer_namewith the validated data
    
    $rfqDetail->priority = $validatedData['priority'];
    $rfqDetail->customer_name = $validatedData['customer_name'];
     $rfqDetail->customer = $validatedData['customer'];
    $rfqDetail->customer_ansoff = $validatedData['customer_ansoff'];
    $rfqDetail->product_ansoff = $validatedData['product_ansoff'];
    $rfqDetail->email = $validatedData['email'];
    $rfqDetail->email_cc = $validatedData['email_cc'];
    $rfqDetail->temp = $validatedData['temp'];
    $rfqDetail->rfq_status = $validatedData['rfq_status'];
    $rfqDetail->product_family = $validatedData['product_family'];
    $rfqDetail->segment = $validatedData['segment'];
    $rfqDetail->geography = $validatedData['geography'];
    $rfqDetail->project = $validatedData['project'];
    $rfqDetail->bdhead = $validatedData['bdhead'];
    $rfqDetail->received_dt = $validatedData['received_dt'];
    $rfqDetail->create_acc_manger = $validatedData['create_acc_manger'];
    $rfqDetail->division = $validatedData['division'];
    $rfqDetail->business_category = $validatedData['business_category'];
    $rfqDetail->plant = $validatedData['plant'];
    $rfqDetail->amtekt1 = $validatedData['amtekt1'];
    $rfqDetail->quote_targetdt = $validatedData['quote_targetdt'];
    $rfqDetail->target_price = $validatedData['target_price'];
    $rfqDetail->endcustomer = $validatedData['endcustomer'];
    $rfqDetail->partno = $validatedData['partno'];
    $rfqDetail->partdesc = $validatedData['partdesc'];
    $rfqDetail->annual_vol = $validatedData['annual_vol'];
    $rfqDetail->sorpdate = date('Y-m-d', strtotime($validatedData['sorpdate']));
    $rfqDetail->businessvalue = $validatedData['businessvalue'];
    $rfqDetail->estimate_price = $validatedData['estimate_price'];
    $rfqDetail->rpelvascopre = $validatedData['rpelvascopre'];
    $rfqDetail->rmclvascopre = $validatedData['rmclvascopre'];
    $rfqDetail->rfqsharedplant = $validatedData['rfqsharedplant'];
    $rfqDetail->queries = $validatedData['queries'];
    $rfqDetail->dtqueries = $validatedData['dtqueries'];
    $rfqDetail->feasiblity = date('Y-m-d', strtotime($validatedData['feasiblity']));
    $rfqDetail->feasiblityrem = $validatedData['feasiblityrem'];
    $rfqDetail->investmentneeded = $validatedData['investmentneeded'];
    $rfqDetail->quoterec = $validatedData['quoterec'];
    $rfqDetail->quotemachine = $validatedData['quotemachine'];
    $rfqDetail->quot_sub_cust = $validatedData['quot_sub_cust'];
    $rfqDetail->latest_quo_cust = date('Y-m-d', strtotime($validatedData['latest_quo_cust']));
    $rfqDetail->latestquo = date('Y-m-d', strtotime($validatedData['latestquo']));
    $rfqDetail->pricefinal = $validatedData['pricefinal'];
    $rfqDetail->latestcft = $validatedData['latestcft'];
    $rfqDetail->businessaward = date('Y-m-d', strtotime($validatedData['businessaward']));
    $rfqDetail->statusbar = $validatedData['statusbar'];
    $rfqDetail->rearfq = $validatedData['rearfq'];
    $rfqDetail->comments = $validatedData['comments'];
    $rfqDetail->rfqreview = $validatedData['rfqreview'];
    $rfqDetail->acknowledge = $validatedData['acknowledge'];
    $rfqDetail->file_path = $filePath ?? null; 
   
    // Save the RFQDetail instance to the database
    $rfqDetail->save();

    // Redirect the user after successfully storing the data
    return redirect()->back()->with('success', 'Lead created successfully!');
}
}

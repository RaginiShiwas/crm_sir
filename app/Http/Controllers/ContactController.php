<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GroupMaster;
use App\Models\Statemaster;
use App\Models\CountryMaster;
use App\Models\PartyMaster;
use App\Models\FinancialYear;

class ContactController extends Controller
{
    public function showForm()
{
    $groups = GroupMaster::orderBy('groupname')->pluck('groupname', 'groupid');
    $states = Statemaster::orderBy('statename')->pluck('statename', 'stateid');
    $countries = CountryMaster::orderBy('country_name')->pluck('country_name', 'id');

    return view('customer_cont', compact('groups', 'states', 'countries'));
}


    // Store the form data
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'vendorname' => 'required|string|max:255',
            'printname' => 'required|string|max:255',
            'vendorcode' => 'required|string|max:255',
            'groupid' => 'required|string|max:255',
            'address1' => 'nullable|string|max:255',
            'address2' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'pincode' => 'nullable|string|max:10',
            'state' => 'required|string|max:255',
            'countryid' => 'required|integer',
            'pan_number' => 'nullable|string|max:255',
            'gstnumber' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:20',
            'cellnumber' => 'nullable|string|max:20',
            'email' => 'nullable|string|email|max:255',
            'creditdays' => 'nullable|integer',
        ]);

        // Create a new PartyMaster instance and fill it with the validated form data
        $party = new PartyMaster();
        $party->id = 1;
        $party->vendorname = $validatedData['vendorname'];
        $party->printname = $validatedData['printname'];
        $party->vendorcode = $validatedData['vendorcode'];
        $party->groupid = $validatedData['groupid'];
        $party->address1 = $validatedData['address1'];
        $party->address2 = $validatedData['address2'];
        $party->city = $validatedData['city'];
        $party->pincode = $validatedData['pincode'];
        $party->state = $validatedData['state'];
        $party->countryid = $validatedData['countryid'];
        $party->pan_number = $validatedData['pan_number'];
        $party->gstnumber = $validatedData['gstnumber'];
        $party->phone = $validatedData['phone'];
        $party->cellnumber = $validatedData['cellnumber'];
        $party->email = $validatedData['email'];
        $party->creditdays = $validatedData['creditdays'];

        $party->fill($validatedData);
        $party->save();

        // Redirect back with success message
        return redirect()->back()->with('success', 'Party created successfully!');
    }

    public function index()
    {
        $financialYears = FinancialYear::select('id', 'date_from', 'date_to')->get();
        return view('welcome', compact('financialYears'));
    }

    public function list()
    {
        
       
        $parties = PartyMaster::with('group')->get();

        // Pass the data to the view
        return view('customer_cont_list', compact('parties'));
    }

    public function edit($id)
    {
        // Fetch the specific party by ID
        $party = PartyMaster::find($id);
    
        // Fetch all groups, states, and countries ordered by name
        $groups = GroupMaster::orderBy('groupname')->pluck('groupname', 'groupid'); // Using GroupMaster model
        $states = Statemaster::orderBy('statename')->pluck('statename', 'stateid'); // Fetching states from Statemaster model
        $countries = CountryMaster::orderBy('country_name')->pluck('country_name', 'id'); // Fetching countries from CountryMaster model
    
        // Pass the party, groups, states, and countries data to the view
        return view('edit_customer_cont', compact('party', 'groups', 'states', 'countries'));
    }
    
    public function update(Request $request, $id)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'vendorname' => 'required|string|max:255',
            'printname' => 'required|string|max:255',
            'vendorcode' => 'required|string|max:255',
            'groupid' => 'required|string|max:255',
            'address1' => 'nullable|string|max:255',
            'address2' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'pincode' => 'nullable|string|max:10',
            'state' => 'required|string|max:255',
             'countryid' => 'required|integer', 
            'pan_number' => 'nullable|string|max:255',
            'gstnumber' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:20',
            'cellnumber' => 'nullable|string|max:20',
            'email' => 'nullable|string|email|max:255',
            'creditdays' => 'nullable|integer',
        ]);
    
        // Fetch the specific party by ID
        $party = PartyMaster::findOrFail($id);
    
        // Update the party with validated data
        $party->vendorname = $validatedData['vendorname'];
        $party->printname = $validatedData['printname'];
        $party->vendorcode = $validatedData['vendorcode'];
        $party->groupid = $validatedData['groupid'];
        $party->address1 = $validatedData['address1'];
        $party->address2 = $validatedData['address2'];
        $party->city = $validatedData['city'];
        $party->pincode = $validatedData['pincode'];
        $party->state = $validatedData['state'];
        $party->countryid = $validatedData['countryid'];
        $party->pan_number = $validatedData['pan_number'];
        $party->gstnumber = $validatedData['gstnumber'];
        $party->phone = $validatedData['phone'];
        $party->cellnumber = $validatedData['cellnumber'];
        $party->email = $validatedData['email'];
        $party->creditdays = $validatedData['creditdays'];
    
        // Save the updated party
        $party->save();
    
        // Redirect back with success message
        return redirect()->route('customer_cont_list', ['id' => $id])->with('success', 'Customer contact updated successfully');
    }
    
}

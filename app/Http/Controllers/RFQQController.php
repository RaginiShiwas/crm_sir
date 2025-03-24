<?php
namespace App\Http\Controllers;

use App\Models\RFQ;
use Illuminate\Http\Request;
use App\Models\Statemaster;
class RFQQController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'date' => 'required|date',
            'tech' => 'required|string|max:255',
            'cid' => 'required|string|max:255',
            'bussiness' => 'required|string|max:255',
            'poc' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'pincode' => 'required|string|max:255',
            'phone_no' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'number' => 'required|string|max:255',
            'product_1' => 'required|string|max:255',
            'quanity_1' => 'required|integer',
            'labor' => 'required|integer',
            'add_info' => 'nullable|string',
            'aggrement' => 'required|string|max:255',
        ]);

        // Create a new RFQ entry
        $rfq = new RFQ();
        $rfq->date = $request->date;
        $rfq->tech = $request->tech;
        $rfq->cid = $request->cid;
        $rfq->bussiness = $request->bussiness;
        $rfq->poc = $request->poc;
        $rfq->address = $request->address;
        $rfq->city = $request->city;
        $rfq->state = $request->state;
        $rfq->pincode = $request->pincode;
        $rfq->phone_no = $request->phone_no;
        $rfq->email = $request->email;
        $rfq->number = $request->number;
        $rfq->product_1 = $request->product_1;
        $rfq->quanity_1 = $request->quanity_1;
        $rfq->labor = $request->labor;
        $rfq->add_info = $request->add_info;
        $rfq->aggrement = $request->aggrement;

        $rfq->save();

        return redirect()->back()->with('success', 'RFQ created successfully!');
    }
     
    public function showForm()
    {
        // Fetch states from the Statemaster table
        $states = Statemaster::orderBy('statename')->pluck('statename', 'stateid');

        return view('rfq', compact('states'));
    }

    public function agreement()
    {
        return view('aggrement');
    }

    public function index()
    {
        // Fetch all RFQ entries from the database
        $rfqs = RFQ::all();
        
        return view('rfq_list', compact('rfqs'));
    }

    public function edit($id)
    {
        // Fetch the RFQ entry by ID
        $rfq = RFQ::findOrFail($id);
        $states = Statemaster::orderBy('statename')->pluck('statename', 'stateid');
        return view('edit_rfq', compact('rfq','states'));
        
    }

    public function update(Request $request, $id)
    {
        // Validate the incoming request data
        $request->validate([
            'date' => 'required|date',
            'tech' => 'required|string|max:255',
            'cid' => 'required|string|max:255',
            'bussiness' => 'required|string|max:255',
            'poc' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'pincode' => 'required|string|max:10',
            'phone_no' => 'required|string|max:15',
            'email' => 'required|email|max:255',
            'number' => 'required|string|max:255',
            'product_1' => 'required|string|max:255',
            'quanity_1' => 'required|integer|min:1',
            'labor' => 'required|integer|min:0',
            'add_info' => 'nullable|string|max:1000',
            'aggrement' => 'required|string|max:255',
        ]);

        // Find the RFQ entry by ID
        $rfq = RFQ::findOrFail($id);

        // Update the RFQ entry with new data
        $rfq->date = $request->input('date');
        $rfq->tech = $request->input('tech');
        $rfq->cid = $request->input('cid');
        $rfq->bussiness = $request->input('bussiness');
        $rfq->poc = $request->input('poc');
        $rfq->address = $request->input('address');
        $rfq->city = $request->input('city');
        $rfq->state = $request->input('state');
        $rfq->pincode = $request->input('pincode');
        $rfq->phone_no = $request->input('phone_no');
        $rfq->email = $request->input('email');
        $rfq->number = $request->input('number');
        $rfq->product_1 = $request->input('product_1');
        $rfq->quanity_1 = $request->input('quanity_1');
        $rfq->labor = $request->input('labor');
        $rfq->add_info = $request->input('add_info');
        $rfq->aggrement = $request->input('aggrement');

        // Save the updated RFQ entry
        $rfq->save();

        // Redirect back to the RFQ index page with a success message
        return redirect()->route('rfq_list')->with('success', 'RFQ updated successfully');
    }
}

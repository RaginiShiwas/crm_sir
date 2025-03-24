<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ItemGroupMaster;
use App\Models\ClassMaster;
use App\Models\GroupMaster;
use App\Models\BinMaster;
use App\Models\ItemMaster;

class ItemGroupController extends Controller
{
    public function index()
{
    $itemGroups = ItemGroupMaster::orderBy('groupname')->pluck('groupname', 'id');
    $itemClasses = ClassMaster::orderBy('classname')->pluck('classname', 'id');
    $accountGroups = GroupMaster::whereIn('groupid', [14])->orderBy('groupname')->pluck('groupname', 'groupid');

    $itemLocations = BinMaster::orderBy('name')->pluck('name', 'id');
    
    return view('item', compact('itemGroups', 'itemClasses', 'accountGroups', 'itemLocations'));
}


    public function store(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'itemname' => 'required|string|max:255',
            'itemcode' => 'required|string|max:255',
            'ourcode' => 'required|string|max:255',
            'itemgroupid' => 'required|integer',
            'classid' => 'required|integer',
            'location' => 'required|string|max:255',
            'acc_group' => 'required|string|max:255',
        ]);

        $itemmaster = new ItemMaster();
        $itemmaster->itemname = $validated['itemname'];
        $itemmaster->itemcode = $validated['itemcode'];
        $itemmaster->ourcode = $validated['ourcode'];
        $itemmaster->itemgroupid = $validated['itemgroupid'];
        $itemmaster->classid = $validated['classid'];
        $itemmaster->location = $validated['location'];
        $itemmaster->acc_group = $validated['acc_group'];
        $itemmaster->save();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Item created successfully.');
    }

    public function list()
    {
        $items = ItemMaster::with('itemGroup', 'itemClass', 'accountGroup')->get();
        return view('item_list', compact('items'));
    }

    public function edit($id)
{
    $item = ItemMaster::findOrFail($id);
    
    $itemGroups = ItemGroupMaster::orderBy('groupname')->pluck('groupname', 'id');
    $itemClasses = ClassMaster::orderBy('classname')->pluck('classname', 'id');
    $accountGroups = GroupMaster::whereIn('groupid', [14])->orderBy('groupname')->pluck('groupname', 'groupid');

    $itemLocations = BinMaster::orderBy('name')->pluck('name', 'id');

    return view('edit_item', compact('item', 'itemGroups', 'itemClasses', 'accountGroups', 'itemLocations'));
}


    public function update(Request $request, $id)
    {
       
     // Validate the incoming request data
        $validatedData = $request->validate([
            'itemname' => 'required|string|max:255',
            'itemcode' => 'required|string|max:255',
            'ourcode' => 'required|string|max:255',
            'itemgroupid' => 'required|integer',
            'classid' => 'required|integer',
            'location' => 'required|string',
            'acc_group' => 'required|string',

        ]);

        // Fetch the specific item by ID
        $itemupdate = ItemMaster::findOrFail($id);

        // Update the item with validated data
        $itemupdate->itemname = $validatedData['itemname'];
        $itemupdate->itemcode = $validatedData['itemcode'];
        $itemupdate->ourcode = $validatedData['ourcode'];
        $itemupdate->itemgroupid = $validatedData['itemgroupid'];
        $itemupdate->classid = $validatedData['classid'];
        $itemupdate->acc_group = $validatedData['acc_group'];
        $itemupdate->location = $validatedData['location'];

        // Save the updated item
        $itemupdate->save();

        // Redirect back with success message
        return redirect()->route('item_list')->with('success', 'Item updated successfully.');
    }
}

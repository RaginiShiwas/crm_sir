<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commodity;

class CommodityController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'commodity_name' => 'required|string|max:255|unique:commodity,commodity_name',
            'commodity_code' => 'required|string|max:255|unique:commodity,commodity_code',
        ]);

        Commodity::create([
            'commodity_name' => $request->commodity_name,
            'commodity_code' => $request->commodity_code,
        ]);

        return redirect()->back()->with('success', 'Commodity created successfully!');
    }
    public function index()
    {
        $commodities = Commodity::all();
        return view('commodity_list', compact('commodities'));
    }
    

    public function update(Request $request, $id)
    {
        $request->validate([
            'commodity_name' => 'required|string|max:255|unique:commodity,commodity_name,' . $id,
            'commodity_code' => 'required|string|max:255|unique:commodity,commodity_code,' . $id,
        ]);

        $commodity = Commodity::findOrFail($id);
        $commodity->update([
            'commodity_name' => $request->commodity_name,
            'commodity_code' => $request->commodity_code,
        ]);

        return redirect()->route('commodity_list')->with('success', 'Commodity updated successfully!');
    }
    public function edit($id)
    {
        $commodity = Commodity::findOrFail($id);
        return view('commodity_edit', compact('commodity'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;


class InventoryController extends Controller
{
public function inventory(){
    return view ('frontend.create_inventory');
}
public function inventory_store(Request $request){

    $request->validate([
        'name' => 'required',
        'vendor' => 'required',
        'price' => 'required',
        'quantity' => 'required',
    ]);

    $inventory = new Inventory();
    $inventory->name = $request->name;
    $inventory->vendor = $request->vendor;
    $inventory->price = $request->price;
    $inventory->quantity = $request->quantity;
    $inventory->save();

    return redirect()->route('inventory')->with('success', 'Inventory created successfully.');
    
}


public function edit(Inventory $inventory)
{
    return view('frontend.edit_inventory', compact('inventory'));
}


public function update(Request $request, Inventory $inventory)
    {
        $request->validate([
            'name' => 'required',
            'vendor' => 'required',
            'price' => 'required',
            'quantity' => 'required',
        ]);

        $inventory->name = $request->name;
        $inventory->vendor = $request->vendor;
        $inventory->price = $request->price;
        $inventory->quantity = $request->quantity;
        $inventory->save();

    return redirect()->route('inventory')->with('success', 'Inventory updated successfully.');
}



public function view_inventory(){
    $inventories = Inventory::all();
    return view('frontend.view_inventory', compact('inventories'));
}





public function destroy(Inventory $inventory)
    {
        $inventory->delete();

        return redirect()->route('view_inventory')->with('success', 'Inventory deleted successfully.');
    }
}


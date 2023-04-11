<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function create()
    {
        return view('new_item');
    }

    public function store(Request $request)
    {
        $data = new Item;
        $data->name = $request->item;
        $data->amount = $request->amount;
        $data->currency = $request->currency_symbol;
        $data->expense_date = $request->expense_date;
        $data->category = $request->category;
        $data->save();
        return redirect()->route('allItems');
    }

    public function destroy(Request $request)
    {
        Item::destroy($request->id);
        return redirect()->route('allItems');
    }

    public function edit(Request $request)
    {
        $item = Item::find($request->id);
        return view('edite_item', compact('item'));
    }

    public function update(Request $request)
    {
        $item = Item::find($request->id);
        $item->name = $request->item;
        $item->amount = $request->amount;
        $item->currency = $request->currency_symbol;
        $item->expense_date = $request->expense_date;
        $item->category = $request->category;
        $item->save();
        return redirect()->route('allItems');
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Item;

class ItemController extends Controller
{
    public function show($id)
    {
        $item = Item::with(['varietas'])->findOrFail($id);
        return view('items.show', compact('item'));
    }
}

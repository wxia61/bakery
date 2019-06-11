<?php

namespace App\Http\Controllers;

use App\Inventory;
use Illuminate\Http\Request;

class BakeryController extends Controller
{
    public function home() {
        $inventories = Inventory::all();

        return view('main',[
            'inventories' => $inventories
        ]);
    }
}

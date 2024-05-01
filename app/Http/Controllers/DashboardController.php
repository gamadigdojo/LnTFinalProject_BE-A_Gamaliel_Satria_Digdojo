<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;


class DashboardController extends Controller
{
    public function show(){
        $items=Item::all();
        return view('dashboard', compact('items'));
    }
}

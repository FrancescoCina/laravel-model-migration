<?php

namespace App\Http\Controllers;

use App\Models\Travel;

use Illuminate\Http\Request;

class TravelController extends Controller
{
    public function index()
    {
        $travels = Travel::all();
        return view('travels.index', compact('travels'));
    }
}

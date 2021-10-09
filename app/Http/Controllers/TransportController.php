<?php

namespace App\Http\Controllers;

use App\Models\Transport;

use Illuminate\Http\Request;

class TransportController extends Controller
{
    public function index()
    {
        $transports = Transport::all();
        return view('transports.index', compact('transports'));
    }
}

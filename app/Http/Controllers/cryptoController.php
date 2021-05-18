<?php

namespace App\Http\Controllers;

use App\Models\cryptoTicket;
use Illuminate\Http\Request;

class cryptoController extends Controller
{
    //
    public function index(){

        $tickets=cryptoTicket::all()->groupBy('symbol');
        return view('tickets.index',compact('tickets'));
    }
}

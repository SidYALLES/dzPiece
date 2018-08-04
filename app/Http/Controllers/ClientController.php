<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ClientController extends Controller
{
    public function viewAb()
    {
        return view('client.abonnInfo');
    }

    public function viewStats()
    {
        return view('client.clientStats');
    }

    public function viewInfo()
    {
        return view('client.infoClient');
    }

    public function viewLp()
    {
        return view('client.listePiece');
    }

    
}

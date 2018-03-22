<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Instrument as Instrument;

class NavController extends Controller
{
    public function liste()
    {
        
        return view('listeDesInstruments', ['instruments' => Instrument::getInstrument()]);
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Instrument as Instrument;

class NavController extends Controller
{
    public function insertOneInstrument(Request $request)
    {
        return view('insertInstrument');
    }
}

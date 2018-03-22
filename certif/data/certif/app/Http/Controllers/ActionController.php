<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Instrument as Instrument;

class ActionController extends Controller
{
    public function insertOneInstrument(Request $request)
    {
       $newInstrument = Instrument::insertOneInstrument($request);
       return redirect('insertInstrument');
    }

    public function insertInstrument(Request $request)
    {
        return view('insertInstrument');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Instrument as Instrument;
use App\Album as Album;

class NavController extends Controller
{
    public function liste()
    {
        
        return view('listeDesInstruments', ['instruments' => Instrument::getInstrument()]);
    }
    public function listeAlbums()
    {
        
        return view('listeDesAlbums', ['albums' => Album::getAlbum()]);
    }

    public function updateInstrument(Request $request)
    {
        return view ('updateInstrument', ['instrument' => Instrument::getOneInstrument($request)]);
    }


    public function updateAlbum(Request $request)
    {
        return view ('updateAlbum', ['album' => Album::getOneAlbum($request)]);
    }
}

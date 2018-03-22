<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Instrument as Instrument;
use App\Album as Album;

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
    public function deleteOneInstrument(Request $request)
    {
            $deletedInstrument = Instrument::deleteOneInstrument($request);
            if($deletedInstrument) {
                return redirect('/listeDesInstruments');

        }else{
            throw new \Exception('erreur');
        }
    }
    public function updateOneInstrument(Request $request)
    {
        $updatedInstrument = Instrument::updateOneInstrument($request);
        return redirect('/updateInstrument');
    }








    public function insertOneAlbum(Request $request)
    {
       $newAlbum = Album::insertOneAlbum($request);
       return redirect('insertAlbum');
    }

    public function insertAlbum(Request $request)
    {
        return view('insertAlbum');
    }

    public function deleteOneAlbum(Request $request)
    {
            $deletedAlbum = Album::deleteOneAlbum($request);
            if($deletedAlbum) {
                return redirect('/listeDesAlbums');

        }else{
            throw new \Exception('erreur');
        }
    }











}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Instrument as Instrument;
use App\Album as Album;
use App\Genre as Genre;

class ActionController extends Controller
{

    //instruments
    public function insertOneInstrument(Request $request)
    {
       $newInstrument = Instrument::insertOneInstrument($request);
       return redirect('listeDesInstruments');
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
        return redirect('/listeDesInstruments');
    }







    //albums
    public function insertOneAlbum(Request $request)
    {
       $newAlbum = Album::insertOneAlbum($request);
       return redirect('listeDesAlbums');
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

    public function updateOneAlbum(Request $request)
    {
        
        $updatedAlbum = Album::updateOneAlbum($request);
        return redirect('/listeDesAlbums');
    }



    //genres
    public function insertOneGenre(Request $request)
    {
       $newgenre = Genre::insertOneGenre($request);
       return redirect('listeDesGenres');
    }
    public function insertGenre(Request $request)
    {
        return view('insertGenre');
    }
    public function deleteOneGenre(Request $request)
    {
            $deletedGenre = Genre::deleteOneGenre($request);
            if($deletedGenre) {
                return redirect('/listeDesGenres');

        }else{
            throw new \Exception('erreur');
        }
    }
    public function genre()
    {
        Genre::getGenresArray();
        return view('/insertAlbum', ['genres' =>Genre::getGenres() ,'albums' => Album::getAlbum()]);

    }   





}

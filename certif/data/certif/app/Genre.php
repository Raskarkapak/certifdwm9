<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    public static function getGenres()
    {
        return genre::all();
    }

    public static function insertOneGenre($request)
    {
        $genre = new Genre();
        $genre->genre = $request->genre;
        $genre->save();
        return $genre;
    }

    public static function getGenresArray()
    {
        $genres = Genre::all();
        $genresArray = [];
        foreach ($genres as $genre) {
            $genresArray [$genre->id] = $genre->genre;
        }
       
        return $genresArray;
    }

    public function albums()
    {
        return $this->belongsToMany('App\Album');
    }


    public static function deleteOneGenre($request)
    {
        $genre = Genre::findOrFail($request->id);
        $genre->delete();
        return true;
    }

}

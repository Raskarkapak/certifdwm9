<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    public static function getAlbum()
    {
        return Album::all();
    }

    public static function getOneAlbum($request)
    {
        return Album::find($request->id);
    }


    public static function insertOneAlbum($request)
    {
        $album = new Album();
        $album->title = $request->title;
        $album->artist = $request->artist;
        $album->price = $request->price;
        $album->stock = $request->stock;
        $album->save();
        return $album;
    }
    public static function deleteOneAlbum($request)
    {
        $album = Album::findOrFail($request->id);
        $album->delete();
        return true;
    }

    public static function updateOneAlbum($request)
    {
        $Album = Album::findOrFail($request->id);
        $Album->title = $request->title;
        $Album->artist = $request->artist;
        $Album->price = $request->price;
        $Album->stock = $request->stock;
        $Album->save();
        return $Album;
    }
}

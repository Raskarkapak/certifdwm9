<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instrument extends Model
{
    public static function getInstrument()
    {
        return Instrument::all();
    }
    public static function insertOneInstrument($request)
    {
        $instrument = new Instrument();
        $instrument->name = $request->name;
       // $instrument->type = $request->type;
        $instrument->price = $request->price;
        $instrument->stock = $request->stock;
        $instrument->save();
        return $instrument;
    }
    public static function deleteOneInstrument($request)
    {
        $instrument = Instrument::findOrFail($request->id);
        $instrument->delete();
        return true;
    }

    public static function updateOneInstrument($request)
    {
        $instrument = Instrument::findOrFail($request->id);
        $instrument->name = $request->name;
        $instrument->price = $request->price;
        $instrument->stock = $request->stock;
        $instrument->save();
        return $instrument;
    }
}

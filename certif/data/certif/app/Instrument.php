<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instrument extends Model
{
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
}

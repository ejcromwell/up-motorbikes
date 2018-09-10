<?php


Use App\Motorbike;
Use App\Owner;


Route::get('/', function () {
    $colour_count = Motorbike::all()->groupBy('colour')->sortKeys();
    $motorbikes = DB::table('motorbikes')
                  ->leftJoin('owners', 'motorbikes.id', '=', 'owners.motorbike_id')
                  ->get();
    return view('index', compact('colour_count', 'motorbikes'));
});


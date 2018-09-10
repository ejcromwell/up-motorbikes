<?php


Use App\Motorbike;
Use App\Owner;


Route::get('/', function () {
    $motorbikes = Motorbike::all()->groupBy('colour')->sortKeys();
    return view('index', compact('motorbikes', 'output'));
});


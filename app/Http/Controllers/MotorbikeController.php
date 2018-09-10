<?php

namespace App\Http\Controllers;

use App\Motorbike;
use Illuminate\Http\Request;

class MotorbikeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Motorbike $motorbikes)
    {

        $colour_count = Motorbike::all()->groupBy('colour')->sortKeys();

        $motorbikes = $motorbikes->get_motorbikes_and_owners();

        return view('index', compact('colour_count', 'motorbikes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\motorbike  $motorbike
     * @return \Illuminate\Http\Response
     */
    public function show(motorbike $motorbike)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\motorbike  $motorbike
     * @return \Illuminate\Http\Response
     */
    public function edit(motorbike $motorbike)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\motorbike  $motorbike
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, motorbike $motorbike)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\motorbike  $motorbike
     * @return \Illuminate\Http\Response
     */
    public function destroy(motorbike $motorbike)
    {
        //
    }
}

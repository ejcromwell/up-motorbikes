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

        $colour_count = $motorbikes->all()->groupBy('colour')->sortKeys();

        $motorbikes = $motorbikes->get_motorbikes_and_owners();

        return view('index', compact('colour_count', 'motorbikes'));
    }


}

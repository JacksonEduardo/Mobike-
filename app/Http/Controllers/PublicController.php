<?php

namespace App\Http\Controllers;

use App\Models\Bike;
use App\Models\Spare;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage(){

        $bikes = Bike::take(2)->get();
        $spares = Spare::take(2)->get();

        return view('welcome', compact('bikes', 'spares'));

    }
}

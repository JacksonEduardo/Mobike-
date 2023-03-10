<?php

namespace App\Http\Controllers;

use App\Models\Bike;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage(){

        $bikes = Bike::take(2)->get();

        return view('welcome', compact('bikes'));

    }
}

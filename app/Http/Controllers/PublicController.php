<?php

namespace App\Http\Controllers;

use App\Models\Bike;
use App\Models\Extra;
use App\Models\Spare;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublicController extends Controller
{

    public function homepage(){

        $bikes = Bike::take(2)->get();
        $spares = Spare::take(2)->get();
        $extras = Extra::take(2)->get();

        return view('welcome', compact('bikes', 'spares', 'extras'));

    }

    public function profile(){
        //primo metodo
        // return view('profile');

        //secondo metodo
        $bikes = Bike::where('user_id', Auth::id())->orderBy('created_at', 'DESC')->get();
        return view('profile', compact('bikes'));
    }
}

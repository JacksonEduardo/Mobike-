<?php

namespace App\Http\Controllers;

use App\Models\Bike;
use App\Models\Extra;
use App\Models\Spare;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    
    public function profile(){
        //primo metodo
        // return view('profile');

        //metodo per creare un link e visualizzare il profilo di altri utenti
        // if(!$user){
        //     $bikes = Bike::where('user_id', Auth::id())->orderBy('created_at', 'DESC')->get();
        //     $spares = Spare::where('user_id', Auth::id())->orderBy('created_at', 'DESC')->get();
        //     $extras = Extra::where('user_id', Auth::id())->orderBy('created_at', 'DESC')->get();
        // }else{
        //     $bikes = Bike::where('user_id', $user->id)->orderBy('created_at', 'DESC')->get();
        //     $spares = Spare::where('user_id', $user->id)->orderBy('created_at', 'DESC')->get();
        //     $extras = Extra::where('user_id', $user->id)->orderBy('created_at', 'DESC')->get();
        // }

        $bikes = Bike::where('user_id', Auth::id())->orderBy('created_at', 'DESC')->get();
        $spares = Spare::where('user_id', Auth::id())->orderBy('created_at', 'DESC')->get();
        $extras = Extra::where('user_id', Auth::id())->orderBy('created_at', 'DESC')->get();
        //secondo metodo

        return view('profile', compact('bikes', 'spares', 'extras'));
    }

    //funzione per avatar
    public function changeAvatar(User $user, Request $request){
        $user->update([
            'avatar' => $request->file('avatar')->store('public/avatars'),
        ]);
        return redirect()->back();
    }

    public function destroy(){
        //recupero tutti i record collegati all'utente che vuole cancellarsi
        $user_bikes = Auth::user()->bikes;
        $user_spares = Auth::user()->spares;
        $user_extras = Auth::user()->extras;
        //gestisco il vincol odi integrità referenziale, facendo in modo che i record legati all'utente che vuole cancellarsi passino di proprietà nel nostro caso all'utente con id 1
        foreach($user_bikes as $bike){
            $bike->update([
                'user_id' => 1
            ]);
        }
        foreach($user_spares as $spare){
            $spare->update([
                'user_id' => 1
            ]);
        }
        foreach($user_extras as $extra){
            $extra->update([
                'user_id' => 1
            ]);
        }       
        Auth::user()->delete();
        return redirect(route('homepage'))->with('userDeleted', 'hai cancellato correttamente il tuo profilo.');
    }
}

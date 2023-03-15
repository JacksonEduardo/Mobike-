<?php

namespace App\Http\Controllers;

use App\Models\Spare;
use Illuminate\Http\Request;
use App\Http\Requests\SpareRequest;
use Illuminate\Support\Facades\Auth;

class SpareController extends Controller
{

    public function __construct(){
        $this->middleware('auth')->except('index', 'show');
    }  

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $spares = Spare::all();
        
        return view('spare.index', compact('spares'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('spare.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SpareRequest $request)
    {
            $spare = Spare::create([
                'brand' => $request->brand,
                'description' => $request->description,
                'photo' => $request->photo ? $request->file('photo')->store('public/photos') : null,
                'user_id' => Auth::user()->id,
            ]);
            return redirect(route('spare.index'))->with('spareCreated', 'Il tuo annuncio è stato inserito correttamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Spare $spare)
    {
        return view('spare.show', compact('spare'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Spare $spare)
    {
        if($spare->user_id != Auth::id()){
            return redirect(route('spare.index'))->with('accessDenied', 'Non sei autorizzato ad effettuare questa operazione');
        }
        return view('spare.edit', compact('spare'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Spare $spare)
    {
        if($request->photo){
            $spare->update([
                'brand' => $request->brand,
                'description' => $request->description,
                'photo' => $request->file('photo')->store('public/photos'),
            ]);
        }else{
            $spare->update([
                'brand' => $request->brand,
                'description' => $request->description,
            ]);
        }
        return redirect(route('spare.index'))->with('spareUpdate', 'il post è stato modificato corretamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Spare $spare)
    {
        if($spare->user_id != Auth::id()){
            return redirect(route('bike.index'))->with('accessDenied', 'Non sei autorizzato ad effetturare questa operazione');
        }

        $spare->delete();
        return redirect(route('spare.index'))->with('spareDestroy', 'Hai elliminato correttamente l\'annuncio');
    }
}

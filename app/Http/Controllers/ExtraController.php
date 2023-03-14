<?php

namespace App\Http\Controllers;

use App\Models\Extra;
use Illuminate\Http\Request;
use App\Http\Requests\ExtraRequest;

class ExtraController extends Controller
{

    public function __construct(){
        $this->middleware('auth')->except('index', 'show');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $extras = Extra::all();
        return view('extra.index', compact('extras'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('extra.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ExtraRequest $request)
    {
        $extra = Extra::create([
            'name'=> $request->name,
            'brand'=> $request->brand,
            'price'=> $request->price,
            'photo' => $request->photo ? $request->file('photo')->store('public/photos') : null,
            'description' => $request->description,
        ]);
        return redirect(route('extra.index'))->with('extraCreated', 'Hai inserito correttamente un accessorio');
    }

    /**
     * Display the specified resource.
     */
    public function show(Extra $extra)
    {
        return view('extra.show', compact('extra'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Extra $extra)
    {
        return view ('extra.edit', compact('extra'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Extra $extra)
    {
        if($request->photo){
            $extra->upadate([
                'name'=> $request->name,
                'brand'=> $request->brand,
                'price'=> $request->price,
                'photo'=> $request->file('photo')->store('public/photos'),
                'description' => $request->description,
            ]);
        }else{
            $extra->update([
                'name'=> $request->name,
                'brand'=> $request->brand,
                'price'=> $request->price,
                'description' => $request->description,
            ]);
        }
        return redirect(route('extra.index',))->with('extraUpdated', 'Hai modificato cottettamente l\'annuncio');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Extra $extra)
    {
        $extra->delete();
        return redirect(route('extra.index'))->with('extraDelete', 'Hai cancellato correttamente il tuo annuncio');
    }
}

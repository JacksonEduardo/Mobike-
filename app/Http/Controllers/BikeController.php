<?php

namespace App\Http\Controllers;

use App\Models\Bike;
use Illuminate\Http\Request;
use App\Http\Requests\BikeRequest;

class BikeController extends Controller
{

    public function __construct(){
        $this->middleware('auth')->except('index', 'show');
    }  


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bikes = Bike::all();

        return view('bike.index', compact('bikes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bike.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BikeRequest $request)
    {
        $bike = Bike::create([
            'name' => $request->name,
            'brand' => $request->brand,
            'photo' => $request->photo ? $request->file('photo')->store('public/photos') : null,
            'price' => $request->price,
        ]);
        return redirect(route('bike.index'))->with('bikeCreated', 'Hai inserito correttamente il tuo annuncio');
    }

    /**
     * Display the specified resource.
     */
    public function show(Bike $bike)
    {
        return view('bike.show', compact('bike'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bike $bike)
    {
        return view('bike.edit', compact('bike'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bike $bike)
    {
        if($request->photo){
            $bike->update([
                'name' => $request->name,
                'brand' => $request->brand,
                'photo' => $request->file('photo')->store('public/photos'),
                'price' => $request->price
            ]);
        }else{
            $bike->update([
                'name' => $request->name,
                'brand' => $request->brand,
                'price' => $request->price
            ]);
        }
        return redirect(route('bike.index'))->with('bikeUpdated', 'Hai modificato correttamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bike $bike)
    {
        $bike->delete();
        return redirect(route('bike.index'))->with('bikeDeleted', 'Hai cancellellato correttamente');
    }
}

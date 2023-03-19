<?php

namespace App\Http\Controllers;

use App\Models\Bike;
use App\Models\Spare;
use Illuminate\Http\Request;
use App\Http\Requests\BikeRequest;
use Illuminate\Support\Facades\Auth;

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
         $spares = Spare::all();

        return view('bike.create', compact('spares'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BikeRequest $request)
    {
        // dd($request->all());
        //PRIMO METODO
        $bike = Bike::create([  
            'name' => $request->name,
            'brand' => $request->brand,
            'photo' => $request->photo ? $request->file('photo')->store('public/photos') : null,
            'price' => $request->price,
            'user_id' => Auth::user()->id,
        ]);

        $bike->spares()->attach($request->spares);

        //SECONDO METOD per creare un oggetti con l'unione delle due tabelle per mezzo della tabella PIVOT
        // $spare = Spare::find($request->spare);
        
        // $spare->bikes()->create([
        //     'name' => $request->name,
        //         'brand' => $request->brand,
        //         'photo' => $request->photo ? $request->file('photo')->store('public/photos') : null,
        //         'price' => $request->price,
        //         'user_id' => Auth::user()->id,
        // ]);

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
        if($bike->user_id != Auth::id()){
            return redirect(route('bike.index'))->with('accessDenied', 'Non sei autorizzato ad effetturare questa operazione');
        }

        $spares = Spare::all();

        return view('bike.edit', compact('bike', 'spares'));
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

        $bike->spares()->attach($request->spare);

        return redirect(route('bike.index'))->with('bikeUpdated', 'Hai modificato correttamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bike $bike)
    {
        if($bike->user_id != Auth::id()){
            return redirect(route('bike.index'))->with('accessDenied', 'Non sei autorizzato ad effetturare questa operazione');
        }
       
        foreach($bike->spares as $spare){
            $bike->spares()->detach($spare->id);
        };
       
        $bike->delete();
        return redirect(route('bike.index'))->with('bikeDeleted', 'Hai cancellellato correttamente');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePlaceRequest;
use App\Models\Place;
use Illuminate\Http\Request;

class PlacesController extends Controller
{
    public function index()
    {
        $places = Place::all();

        return $places; 
    }

    public function show(Request $request)
    {
        $place = Place::where('name', $request->name)->first();

        if(!$place) return response()->json(['message' => 'Lugar nao encontrado!']);
        
        return $place;
    }

    public function store(StorePlaceRequest $request)
    {
        $data = $request->validated(); 

        $newPlace = Place::create($data);

        return $newPlace;
    }  

    public function update(StorePlaceRequest $request)
    {    
        $data = $request->validated();

        $place = Place::findOrFail($request->id);

        $place->update($data);
        
        return $place;
    }

    public function destroy(Request $request)
    {   
        Place::findOrFail($request->id)->delete();

        return response()->json([],204);
    }
}

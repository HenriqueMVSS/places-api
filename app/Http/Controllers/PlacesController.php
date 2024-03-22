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

        return response()->json($places, 200);
    }

    public function show(Request $request)
    {
        $place = Place::where('name', $request->name)->first();

        if(!$place) return response()->json(['message' => 'Lugar nao encontrado!']);
        
        return response()->json($place, 200);
    }

    public function store(StorePlaceRequest $request)
    {
        $data = $request->validated(); 

        $newPlace = Place::create($data);

        return response()->json($newPlace, 201);;
    }  

    public function update(StorePlaceRequest $request)
    {    
        $data = $request->validated();

        $place = Place::findOrFail($request->id);

        $place->update($data);
        
        return response()->json($place, 200);
    }

    public function destroy(Request $request)
    {   
        Place::findOrFail($request->id)->delete();

        return response()->json([],204);
    }
}

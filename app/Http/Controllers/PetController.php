<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;

class PetController extends Controller
{
    public function index()
    {
        $pets = Pet::all();
        return view('pets.index', compact('pets'));
    }

    public function create()
    {
        return view('pets.create');
    }

    public function store(Request $request)
    {
        Pet::create([
            'species' => $request->species,
            'breed' => $request->breed,
            'age' => $request->age,
            'price' => $request->price,
        ]);

        return redirect()->route('pets.index');
    }

    public function edit(Pet $pet)
    {
        return view('pets.edit', compact('pet'));
    }

    public function update(Request $request, Pet $pet)
    {
        $pet->update([
            'species' => $request->species,
            'breed' => $request->breed,
            'age' => $request->age,
            'price' => $request->price,
        ]);

        return redirect()->route('pets.index');
    }

    public function destroy(Pet $pet)
    {
        $pet->delete();

        return redirect()->route('pets.index');
    }
}
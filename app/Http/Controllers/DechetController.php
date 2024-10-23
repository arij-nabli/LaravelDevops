<?php

namespace App\Http\Controllers;

use App\Models\Dechet;
use App\Models\ZoneCollecte;
use Illuminate\Http\Request;

class DechetController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $dechets = Dechet::with('zoneCollecte')->get(); // Charger les relations
        $zoneCollectes = ZoneCollecte::all(); // Récupérer toutes les zones de collecte

        return view('dechets.index', [
            'dechets' => $dechets,
            'zoneCollectes' => $zoneCollectes,
        ]);
    }

    public function create()
    {
        $zoneCollectes = ZoneCollecte::all(); // Récupérer toutes les zones de collecte

        return view('dechets.create', compact('zoneCollectes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|string|max:255|min:3',
            'description' => 'required|string|max:1000|min:3',
            'zone_collecte_id' => 'required|exists:zone_collectes,id', // Validation pour zone de collecte
        ],[
            
            'type.required' => 'Le type est obligatoire.',
            'type.min' => 'Le type doit comporter au moins 3 caractère.',
            'type.max' => 'Le type ne peut pas dépasser 255 caractères.',
            'description.required' => 'La description est obligatoire.',
            'description.min' => 'La description doit comporter au moins 3 caractères.',
            'description.max' => 'La description ne peut pas dépasser 1000 caractères.',
    'zone_collecte_id.required' => 'La zone de collecte est obligatoire.',
           
        ]
    );

        Dechet::create($request->all()); // Créer un nouveau déchet avec la zone de collecte

        return redirect()->route('dechets.index')->with('success', 'Déchet créé avec succès.');
    }
    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $dechet = Dechet::with('zoneCollecte')->findOrFail($id); // Charger la relation avec zoneCollecte
        return view('dechets.show', compact('dechet'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $zoneCollectes = ZoneCollecte::all(); // Récupérer toutes les zones de collecte
        $dechet = Dechet::findOrFail($id); // Récupérer le déchet

        return view('dechets.edit', compact('dechet', 'zoneCollectes')); // Passer les zones de collecte pour la sélection
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'type' => 'required|string|max:255|min:3',
            'description' => 'required|string|max:1000|min:3',

            'zone_collecte_id' => 'required|exists:zone_collectes,id', // Validation pour zone de collecte
        ],[
            
            'type.required' => 'Le type est obligatoire.',
            'type.min' => 'Le type doit comporter au moins 3 caractère.',
            'type.max' => 'Le type ne peut pas dépasser 255 caractères.',
            'description.required' => 'La description est obligatoire.',
            'description.min' => 'La description doit comporter au moins 3 caractères.',
            'description.max' => 'La description ne peut pas dépasser 1000 caractères.',
    'zone_collecte_id.required' => 'La zone de collecte est obligatoire.',
           
        ]
    );

        $dechet = Dechet::findOrFail($id);
        $dechet->update($request->all()); // Mettre à jour avec la zone de collecte sélectionnée

        return redirect()->route('dechets.index')->with('success', 'Déchet mis à jour avec succès.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $dechet = Dechet::findOrFail($id);
        $dechet->delete();

        return redirect()->route('dechets.index')->with('success', 'Déchet supprimé avec succès.');
    }
}

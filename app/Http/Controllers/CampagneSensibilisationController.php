<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CampagneSensibilisation;

class CampagneSensibilisationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // Affiche toutes les campagnes
    public function index()
    {
        $campagnes = CampagneSensibilisation::all();
        return view('campagnes.index', compact('campagnes'));
    }

    // Affiche le formulaire pour créer une campagne
    public function create()
    {
        return view('campagnes.create');
    }

    // Stocke une nouvelle campagne dans la base de données
    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date',
        ]);

        CampagneSensibilisation::create($request->all());

        return redirect()->route('campagnes.index')->with('success', 'Campagne créée avec succès');
    }

    // Affiche une campagne spécifique
    public function show(CampagneSensibilisation $campagne)
    {
        return view('campagnes.show', compact('campagne'));
    }

    // Affiche le formulaire pour éditer une campagne
    public function edit(CampagneSensibilisation $campagne)
    {
        return view('campagnes.edit', compact('campagne'));
    }

    // Met à jour une campagne existante dans la base de données
    public function update(Request $request, CampagneSensibilisation $campagne)
    {
        $request->validate([
            'titre' => 'required',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date',
        ]);

        $campagne->update($request->all());

        return redirect()->route('campagnes.index')->with('success', 'Campagne mise à jour avec succès');
    }

    // Supprime une campagne
    public function destroy(CampagneSensibilisation $campagne)
    {
        $campagne->delete();
        return redirect()->route('campagnes.index')->with('success', 'Campagne supprimée avec succès');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CentreRecyclage;

class CentreRecyclageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      
            // Pagination avec 5 éléments par page
        $centres = CentreRecyclage::paginate(5);

        // Retourner la vue avec la liste des centres
        return view('centre-recyclage.index', [
            'centres' => $centres
        ]);
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('centre-recyclage.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation des données
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'material_type' => 'required|string',
            'capacity' => 'required|integer',
            'number_of_employees' => 'required|integer',
        ]);

        // Créer un nouveau centre de recyclage
        CentreRecyclage::create([
            'name' => $request->name,
            'address' => $request->address,
            'material_type' => $request->material_type,
            'capacity' => $request->capacity,
            'number_of_employees' => $request->number_of_employees
        ]);

        // Rediriger avec un message de succès
        return redirect('/centre-recyclage')->with('status', 'Centre de recyclage créé avec succès.');
    }
    /**
     * Display the specified resource.
     */
    public function show(CentreRecyclage $centreRecyclage)
    {
        return view('centre-recyclage.show', compact('centreRecyclage'));
    }

    /**
     * Afficher le formulaire d'édition pour un centre existant.
     */
    public function edit(CentreRecyclage $centreRecyclage)
    {
        return view('centre-recyclage.edit', compact('centreRecyclage'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CentreRecyclage $centreRecyclage)
    {
        // Validation des données mises à jour
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'material_type' => 'required|string',
            'capacity' => 'required|integer',
            'number_of_employees' => 'required|integer',
        ]);

        // Mettre à jour les informations du centre de recyclage
        $centreRecyclage->update([
            'name' => $request->name,
            'address' => $request->address,
            'material_type' => $request->material_type,
            'capacity' => $request->capacity,
            'number_of_employees' => $request->number_of_employees
        ]);

        // Rediriger avec un message de succès
        return redirect('/centre-recyclage')->with('status', 'Centre de recyclage mis à jour avec succès.');
    }

    /**
     * Supprimer un centre de recyclage.
     */
    public function destroy(CentreRecyclage $centreRecyclage)
    {
        // Supprimer le centre
        $centreRecyclage->delete();

        // Rediriger avec un message de succès
        return redirect('/centre-recyclage')->with('status', 'Centre de recyclage supprimé avec succès.');
    }
}
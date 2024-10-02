<?php

namespace App\Http\Controllers;

use App\Models\Dechet;
use Illuminate\Http\Request;

class DechetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dechets = Dechet::all();
        return view('dechets.index', compact('dechets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dechets.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Dechet::create($request->all());

        return redirect()->route('dechets.index')->with('success', 'Déchet créé avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $dechet = Dechet::findOrFail($id);
        return view('dechets.show', compact('dechet'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $dechet = Dechet::findOrFail($id);
        return view('dechets.edit', compact('dechet'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'type' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $dechet = Dechet::findOrFail($id);
        $dechet->update($request->all());

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

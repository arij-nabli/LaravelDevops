<?php

namespace App\Http\Controllers;

use App\Models\Dechet;
use App\Models\ZoneCollecte;
use Illuminate\Http\Request;

class ZoneCollecteController extends Controller
{
    public function index()
    {
        $dechets = Dechet::all();
        $zoneCollectes = ZoneCollecte::all();
        return view('dechets.index',[
            'dechets' =>$dechets,
            'zoneCollectes' =>$zoneCollectes
    
        ], compact('zoneCollectes'));
    }

    public function create()
    {
        return view('zone_collectes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'code_postal' => 'required|integer',
            'localisation' => 'required|string',
        ]);

        ZoneCollecte::create($request->all());
        return redirect()->route('dechets.index')
            ->with('success', 'Zone de collecte créée avec succès.');
    }

    public function show(ZoneCollecte $zoneCollecte)
    {
        return view('zone_collectes.show', compact('zoneCollecte'));
    }

    public function edit(ZoneCollecte $zoneCollecte)
    {
        return view('zone_collectes.edit', compact('zoneCollecte'));
    }

    public function update(Request $request, ZoneCollecte $zoneCollecte)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'code_postal' => 'required|integer',
            'localisation' => 'required|string',
        ]);

        $zoneCollecte->update($request->all());
        return redirect()->route('zone-collectes.index')
            ->with('success', 'Zone de collecte mise à jour avec succès.');
    }

    public function destroy(ZoneCollecte $zoneCollecte)
    {
        $zoneCollecte->delete();
        return redirect()->route('zone-collectes.index')
            ->with('success', 'Zone de collecte supprimée avec succès.');
    }
}

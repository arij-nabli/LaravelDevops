<?php

namespace App\Http\Controllers;

use App\Models\Equipement;
use Illuminate\Http\Request;

class EquipementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $equipements = Equipement::paginate(3);
        return view('equipement.index',[
            'equipements' => $equipements
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('equipement.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'validity' => 'required|string',
            'disponibility' => 'nullable',
            'quantity' => 'required|integer',
        ]);
        equipement::create([
            'name'=> $request->name,
            'validity'=> $request->validity,
            'disponibility'=> $request->disponibility == true ? 1:0,
            'quantity'=> $request->quantity
        ]);
        return redirect('/equipement')->with('status', 'Equipement created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Equipement $equipement)
    {
        return view('equipement.show' , compact('equipement'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Equipement $equipement)
    {
        return view('equipement.edit' , compact('equipement'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Equipement $equipement)
    {
        $request->validate([
            'name' => 'required|string',
            'validity' => 'required|string',
            'disponibility' => 'nullable',
            'quantity' => 'required|integer',
        ]);
        $equipement->update([
            'name'=> $request->name,
            'validity'=> $request->validity,
            'disponibility'=> $request->disponibility == true ? 1:0,
            'quantity'=> $request->quantity
        ]);
        return redirect('/equipement')->with('status', 'Equipement  updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Equipement $equipement)
    {
        $equipement->delete();
        return redirect('/equipement')->with('status', 'Equipement  deleted successfully');

    }
}

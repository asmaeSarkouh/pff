<?php

namespace App\Http\Controllers;

use App\Models\EspaceCarburant;
use App\Models\EspaceVehicule;
use Illuminate\Http\Request;

class EspaceCarburantController extends Controller
{
    public function index()
    {
        $espace_carburants=EspaceCarburant::with('espaceVehicule')->get();
        return view('pages.espace_carburant.index',compact('espace_carburants'));
    }
    public function create()
    {
        $espaceVehicules=EspaceVehicule::all();
        return view('pages.espace_carburant.create',compact('espaceVehicules'));
    }
    public function store(Request $request)
    {
        $valide=$request->validate([
            'date'=>'required|date',
            'quantite'=>'required|numeric|min:0',
            'paye'=>'required|numeric|min:0',
        ]);
        EspaceCarburant::create($valide);
        return redirect('/espace_carburants');
    }
    public function edit(EspaceCarburant $espaceCarburant)
    {
        $espaceVehicules=EspaceVehicule::all();
        return view('pages.espace_carburant.edit',compact('espaceCarburant','espaceVehicules'));
    }
    public function update(Request $request, EspaceCarburant $espaceCarburant)
    {
        $valide=$request->validate([
            'date'=>'required|date',
            'quantite'=>'required|numeric|min:0',
            'paye'=>'required|numeric|min:0',
        ]);
        $espaceCarburant->update($valide);
        return redirect('/espace_carburants');
    }

    public function destroy( $id)
    {
        EspaceCarburant::destroy($id);
        return back();
    }
}

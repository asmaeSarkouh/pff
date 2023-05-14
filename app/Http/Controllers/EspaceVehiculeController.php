<?php

namespace App\Http\Controllers;

use App\Models\AnneeMise;
use App\Models\EspaceVehicule;
use App\Models\Marque;
use App\Models\Modele;
use App\Models\TypeCarburant;
use Illuminate\Http\Request;

class EspaceVehiculeController extends Controller
{
    public function index()
    {
        $espace_vehicules=EspaceVehicule::with('typeCarburant','anneeMise','modele','marque')->get();
        return view('pages.espace_vehicule.index',compact('espace_vehicules'));
    }
    public function create()
    {
        $type_carburants=TypeCarburant::all();
        $marques=Marque::all();
        $modeles=Modele::all();
        $annee_mises=AnneeMise::all();
        return view('pages.espace_vehicule.create',
    compact(
        'type_carburants','marques','modeles','annee_mises'
    ));
    }
    
    public function store(Request $request)
    {
        $valide=$request->validate([
            'nom_vehicule'=>'required|max:255',
            'immatricule'=>'required|unique:espace_vehicules',
            'type_carburant_id'=>'required|exists:type_carburants,id',
            'consomation'=>'required|numeric|min:0',
            'marque_id'=>'required|exists:marques,id',
            'modele_id'=>'required|exists:modeles,id',
            'annee_mise_id'=>'required|exists:annee_mises,id',
            'kilometrage'=>'required|numeric|min:0',
            'image'=>'required|image|mimes::jpg,jpeg,png|max:2048',
        ]);
        if($request->hasFile('image')){
            $path = $request->file('image')->store('public');
            $valide['image']="$path";
        }
        EspaceVehicule::create($valide);
        return redirect('/espace_vehicules');
    }
    public function edit(EspaceVehicule $espaceVehicule )
    {
        
        
        $type_carburants=TypeCarburant::all();
        $marques=Marque::all();
        $modeles=Modele::all();
        $annee_mises=AnneeMise::all();
        return view('pages.espace_vehicule.edit',
    compact(
        'type_carburants','marques','modeles','annee_mises',"espaceVehicule"
    ));
    }

    public function update(Request $request, EspaceVehicule $espaceVehicule)
    {
        $valide=$request->validate([
            'nom_vehicule'=>'required|max:255',
            'immatricule'=>'required|unique:espace_vehicules',
            'type_carburant_id'=>'required|exists:type_carburants,id',
            'consomation'=>'required|numeric|min:0',
            'marque_id'=>'required|exists:marques,id',
            'modele_id'=>'required|exists:modeles,id',
            'annee_mise_id'=>'required|exists:annee_mises,id',
            'kilometrage'=>'required|numeric|min:0',
            'image' => 'required|image|mimes:png,jpg,jpeg|max:2048'
        ]);
        if($request->file('image')){
            $path = $request->file('image')->store('public');
            $valide['image']="$path";
        }
        $espaceVehicule->update($valide);
        return redirect('/espace_vehicules');
    }

    public function destroy($id)
    {
        EspaceVehicule::destroy($id);
        return back();
    }
}
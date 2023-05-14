<?php

namespace App\Http\Controllers;

use App\Models\EspaceMaintenance;
use App\Models\EspaceVehicule;
use App\Models\TypeMaintenance;
use Illuminate\Http\Request;

class EspaceMaintenanceController extends Controller
{
    public function index()
    {
        $espace_maintenances=EspaceMaintenance::with('typeMaintenance','espaceVehicule')->get();
        return view('pages.espace_maintenance.index',compact('espace_maintenances'));
    }
    public function create()
    {
        $type_maintenances=TypeMaintenance::all();
        $espaceVehicules=EspaceVehicule::all();
        return view('pages.espace_maintenance.create',compact('type_maintenances','espaceVehicules'));
    }
    public function store(Request $request)
    {
        $valide=$request->validate([
            'nom_vehicule'=>'required|max:255',
            'type_maintenance_id'=>'required|exists:type_maintenances,id',
            'date'=>'required|date',
            'kilometrage'=>'required|numeric|min:0',
            'image'=>'required|image|mimes::png,jpg,jpeg|max:2048',
            'frais'=>'required|numeric|min:0',
        ]);
        if($request->file('image')){
            $path = $request->file('image')->store('public');
            $valide['image']="$path";
        }
        EspaceMaintenance::create($valide);
        return redirect('/espace_maintenances');
    }
    public function edit(EspaceMaintenance $espaceMaintenance)
    {
        $type_maintenances=TypeMaintenance::all();
        $espaceVehicules=EspaceVehicule::all();
        return view('pages.espace_maintenance.edit',compact('espaceMaintenance','type_maintenances','espaceVehicules'));
    }
    public function update(Request $request, EspaceMaintenance $espaceMaintenance)
    {
        $valide=$request->validate([
            'nom_vehicule'=>'required|max:255',
            'type_maintenance_id'=>'required|exists:type_maintenances,id',
            'date'=>'required|date',
            'kilometrage'=>'required|numeric|min:0',
            'image'=>'required|image|mimes::png,jpg,jpeg|max:2048',
            'frais'=>'required|numeric|min:0',
        ]);
        if($request->file('image')){
            $path = $request->file('image')->store('public');
            $valide['image']="$path";
        }
        $espaceMaintenance->update($valide);
        return redirect('/espace_maintenances');
    }
    public function destroy($id)
    {
        EspaceMaintenance::destroy($id);
        return back();
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EspaceVehicule;
use Illuminate\Http\Request;

class EspaceVehiculeAdmin extends Controller
{
    public function index()
    {
        $espace_vehicules=EspaceVehicule::with('typeCarburant','anneeMise','modele','marque')->paginate(5);
        return view('pages.admin.espace_vehicule.index',compact('espace_vehicules'));
    }
    public function destroy($id)
    {
        EspaceVehicule::destroy($id);
        return back();
    }   
}

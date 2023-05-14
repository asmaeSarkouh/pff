<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Marque;
use App\Models\Modele;
use Illuminate\Http\Request;

class ModeleVehiculeAdmin extends Controller
{
    public function index()
    {
        $modeleVehicule=Modele::with('marque')->paginate(5);
        $marques=Marque::all();
        return view('pages.admin.modeleVehicule.index',compact('modeleVehicule','marques'));
    }
    public function create(){
        $marques=Marque::all();
        return view('pages.admin.modeleVehicule.index',compact('marques'));
    }
    public function store(Request $request){
        $valide=$request->validate([
            'type'=>'required|max:255',
            'marque_id'=>'required|exists:marques,id'
        ]);
        Modele::create($valide);
        return back();
    }
    public function destroy($id)
    {
        Modele::destroy($id);
        return back();
    }
}

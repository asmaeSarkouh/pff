<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Marque;
use Illuminate\Http\Request;

class MarqueVehiculeAdmin extends Controller
{
    public function index()
    {
        $marqueVahicule=Marque::all();
        return view('pages.admin.marqueVehicule.index',compact('marqueVahicule'));
    }
    public function create(){
        return view('pages.admin.marqueVehicule.index');
    }
    public function store(Request $request){
        $valide=$request->validate([
            'marque'=>'required|max:255'
        ]);
        Marque::create($valide);
        return back();
    }
    public function destroy($id)
    {
        Marque::destroy($id);
        return back();
    }
}

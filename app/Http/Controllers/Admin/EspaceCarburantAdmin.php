<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EspaceCarburant;
use Illuminate\Http\Request;

class EspaceCarburantAdmin extends Controller
{
    public function index()
    {
        $espace_carburants=EspaceCarburant::with('espaceVehicule')->paginate(5);
        return view('pages.admin.espace_carburant.index',compact('espace_carburants'));
    }
    public function destroy($id)
    {
        EspaceCarburant::destroy($id);
        return back();
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EspaceMaintenance;
use Illuminate\Http\Request;

class EspaceMaintenanceAdmin extends Controller
{
    public function index()
    {
        $espace_maintenances=EspaceMaintenance::with('typeMaintenance','espaceVehicule')->paginate(5);
        return view('pages.admin.espace_maintenance.index',compact('espace_maintenances'));
    }
    public function destroy($id)
    {
        EspaceMaintenance::destroy($id);
        return back();
    }
}

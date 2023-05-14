<?php

namespace App\Http\Controllers;

use App\Models\TableDeBord;
use Illuminate\Http\Request;

class TableDeBordController extends Controller
{
    public function index()
    {
        $table_de_bords=TableDeBord::with('espaceMaintenance','espaceVehicule','espaceCarburant')->get();
        return view('pages.table_de_bord.index',compact('table_de_bords'));
    }

    public function create()
    {
        //
    }

     public function store(Request $request)
    {
        //
    }

    public function show(TableDeBord $tableDeBord)
    {
        //
    }

    public function edit(TableDeBord $tableDeBord)
    {
        //
    }
    public function update(Request $request, TableDeBord $tableDeBord)
    {
        //
    }

    public function destroy(TableDeBord $tableDeBord)
    {
        //
    }
}

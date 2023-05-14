<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TableDeBord extends Model
{
    use HasFactory;
    public function espaceMaintenance(){
        return $this->belongsTo(EspaceMaintenance::class);
    }
    public function espaceVehicule(){
        return $this->belongsTo(EspaceVehicule::class);
    }
    public function espaceCarburant(){
        return $this->belongsTo(EspaceCarburant::class);
    }
    // public function totalCarburant(){
    //     return $this->hasMany(EspaceCarburant::class)->whereMonth('date');
    // }
}

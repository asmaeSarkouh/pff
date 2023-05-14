<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EspaceMaintenance extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_vehicule',
        'type_maintenance_id',
        'date',
        'kilometrage',
        'image',
        'frais',
    ];
    public function typeMaintenance(){
        return $this->belongsTo(TypeMaintenance::class);
    }
    public function espaceVehicule(){
        return $this->belongsTo(EspaceVehicule::class);
    }
    public function tableDeBord(){
        return $this->hasMany(TableDeBord::class);
    }
}

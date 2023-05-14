<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EspaceVehicule extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_vehicule',
        'immatricule',
        'type_carburant_id',
        'consomation',
        'marque_id',
        'modele_id',
        'annee_mise_id',
        'kilometrage',
        'image',
    ];
    public function marque(){
        return $this->belongsTo(Marque::class);
    }
    public function modele(){
        return $this->belongsTo(Modele::class);
    }
    public function anneeMise(){
        return $this->belongsTo(AnneeMise::class);
    }
    public function typeCarburant(){
        return $this->belongsTo(TypeCarburant::class);
    }
    public function espaceMaintenance(){
        return $this->hasMany(EspaceMaintenance::class);
    }
    public function espaceCarburant(){
        return $this->hasMany(EspaceCarburant::class);
    }
    public function tableDeBord(){
        return $this->hasMany(TableDeBord::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modele extends Model
{
    use HasFactory;
    protected $fillable = [
        'model',
        'marque_id'
    ];
    public function espaceVehicule(){
        return $this->hasMany(EspaceVehicule::class);
    }
    public function marque(){
        return $this->belongsTo(Marque::class);
    }
}

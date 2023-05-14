<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EspaceCarburant extends Model
{
    use HasFactory;
    protected $fillable = [
        'date',
        'quantite',
        'paye',
    ];
    public function tableDeBord(){
        return $this->hasMany(TableDeBord::class);
    }
    public function espaceVehicule(){
        return $this->belongsTo(EspaceVehicule::class);
    }
}

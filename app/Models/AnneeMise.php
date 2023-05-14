<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnneeMise extends Model
{
    use HasFactory;
    public function espaceVehicule(){
        return $this->hasMany(EspaceVehicule::class);
    }
}

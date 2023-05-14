<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeMaintenance extends Model
{
    use HasFactory;
    public function espaceMaintenance(){
        return $this->hasMany(EspaceMaintenance::class);
    }
}

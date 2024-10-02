<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CentreRecyclage extends Model
{
    use HasFactory;
    protected $table = 'centre_recyclages'; 
    protected $fillable = [
        'name',              // nom
        'address',           // adresse
        'material_type',     // type_materiaux
        'capacity',          // capacité
        'number_of_employees' // nombre d'employés
    ];
}

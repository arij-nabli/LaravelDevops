<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CentreRecyclage extends Model
{
    use HasFactory;

    // Le nom de la table si ce n'est pas "centres_recyclage"
    protected $table = 'centres_recyclage';

    // Les colonnes qui peuvent être mass-assignable
    protected $fillable = [
        'nom', 
        'adresse', 
        'capacite_max', 
        'nbr_employes'
    ];
}

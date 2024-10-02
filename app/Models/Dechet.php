<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dechet extends Model
{
    use HasFactory;

    // Le nom de la table si ce n'est pas "wastes"
    protected $table = 'dechets';

    // Les colonnes qui peuvent être mass-assignable
    protected $fillable = [
        'type', 
        'description'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZoneCollecte extends Model
{
    use HasFactory;
    protected $table = 'zone_collectes';
    protected $fillable = [
        'nom',
        'code_postal',
        'localisation',
    ];
}
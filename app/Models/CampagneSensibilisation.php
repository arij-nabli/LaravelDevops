<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CampagneSensibilisation extends Model
{
    protected $fillable = ['titre', 'date_debut', 'date_fin'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Structure extends Model
{

    protected $fillable = ['personne_id','nom','sigle','domaine','localite','prefecture','region','type_structure','evaluation','convention','reference_convention','statut_juridique','guide'] ;
    use HasFactory;
}

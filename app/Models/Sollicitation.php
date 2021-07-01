<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sollicitation extends Model
{
    protected $fillable = ['nombre_de_volontaires_sollicites','nombre_de_volontaires_recus'] ;
    use HasFactory;
}

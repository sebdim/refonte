<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Affectation extends Model
{
    protected $fillable = ['candidat_id','structure_id'] ;
    use HasFactory;
}

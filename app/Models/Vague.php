<?php

namespace App\Models;
use App\Models\Candidat;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vague extends Model
{
    use HasFactory;
    protected $fillable = ['candidat_id','nom','nombre_candidat'] ;

    public function candidats(){
        return $this->hasMany(Candidat::class);
    }
}

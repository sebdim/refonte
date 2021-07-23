<?php

namespace App\Models;
use App\Models\Vague;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidat extends Model
{
    use HasFactory;
    protected $fillable = ['nom','prenoms','date_de_naissance','sexe','handicap','lieu_de_residence',
    'contacts','email','niveau_etude','diplome','domaine_diplome','domaine_affectation','moyenne','jury',
    'decision_jury','date_entretien','formation','date_formation','statut',] ;

    public function post(){
        return $this->belongsTo(Vague::class);
    }
}

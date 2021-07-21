<?php

namespace App\Models;
use App\Models\Vague;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidat extends Model
{
    use HasFactory;

    protected $fillable = ['nom','prenoms','titre','contacts','email'] ;

    public function post(){
        return $this->belongsTo(Vague::class);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Candidat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CandidatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $candidat = Candidat::all();
        return view('pages.candidat.liste',compact(['candidat']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.candidat.candidat');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'sexe' => 'required',
            'email'=> 'required',
            'handicap'=>'required',
            'contact' => 'required',
            'niveau' => 'required',
            'diplome' => 'required',
            'domaine' => 'required',
            'affectation' => 'required',
            'moyenne'=>'required',
            'jury' => 'required',
            'decision' => 'required',
            'date_ent' => 'required',
            'formation' => 'required',
            'date_form' => 'required',
            'statut' => 'required',
            'lieu_resid' => 'required'

        ]);

        Candidat::create([
        'nom_candidat' => request('nom'),
        'prenoms' => request('prenom'),
        'date_de_naissance' => request('date'),
        'sexe' => request('sexe'),
        'handicap' => request('handicap'),
        'lieu_de_residence' => request('lieu_resid'),
        'contacts' => request('contact'),
        'email' => request('email'),
        'niveau_etude' => request('niveau'),
        'diplome' => request('diplome'),
        'domaine_diplome' => request('domaine'),
        'domaine_affectation' => request('affectation'),
        'moyenne' => request('moyenne'),
        'jury' => request('jury'),
        'decision_jury' => request('decision'),
        'date_entretien' => request('date_ent'),
        'formation' => request('formation'),
        'date_formation' => request('date_form'),
        'statut' => request('statut'),
        ]);

        return redirect::route('candidat.liste');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Candidat::find($id);
        return view('pages.candidat.edit',compact(['data']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $candidat = Candidat::find($id);
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'sexe' => 'required',
            'email'=> 'required',
            'handicap'=>'required',
            'contact' => 'required',
            'niveau' => 'required',
            'diplome' => 'required',
            'domaine' => 'required',
            'affectation' => 'required',
            'moyenne'=>'required',
            'jury' => 'required',
            'decision' => 'required',
            'date_ent' => 'required',
            'formation' => 'required',
            'date_form' => 'required',
            'statut' => 'required',
            'lieu_resid' => 'required'

        ]);


        $candidat->nom_candidat = request('nom');
        $candidat->prenoms = request('prenom');
        $candidat->date_de_naissance = request('date');
        $candidat->sexe = request('sexe');
        $candidat->handicap = request('handicap');
        $candidat->lieu_de_residence = request('lieu_resid');
        $candidat->contacts = request('contact');
        $candidat->email = request('email');
        $candidat->niveau_etude = request('niveau');
        $candidat->diplome = request('diplome');
        $candidat->domaine_diplome = request('domaine');
        $candidat->domaine_affectation = request('affectation');
        $candidat->moyenne = request('moyenne');
        $candidat->jury = request('jury');
        $candidat->decision_jury = request('decision');
        $candidat->date_entretien = request('date_ent');
        $candidat->formation = request('formation');
        $candidat->date_formation = request('date_form');
        $candidat->statut = request('statut');

        $candidat->save();

        return redirect::route('candidat.liste');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id = Candidat::find($id);
        $id -> delete();

        return redirect::route('candidat.liste');
    }
}

<?php

namespace App\Http\Controllers;
use App\Models\Structure;
use App\Models\Personne;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;


class StructureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $structure = Structure::paginate(10);
        return view('pages.structure.liste',compact(['structure']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $personne = Personne::all();
        return view('pages.structure.structure',compact(['personne']));
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
            'personne' => 'required',
            'sigle' => 'required',
            'domaine' => 'required',
            'localite'=> 'required',
            'prefecture'=>'required',
            'region' => 'required',
            'type' => 'required',
            'evaluation' => 'required',
            'convention' => 'required',
            'reference' => 'required_if:convention,oui',
            'statut'=>'required',
            'guide' => 'required'
            
        ]); 

        Structure::create([
            'nom' => request('nom'),
            'personne_id' => request('personne'),
            'sigle' => request('sigle'),
            'domaine' => request('domaine'),
            'localite' => request('localite'),
            'prefecture' => request('prefecture'),
            'region' => request('region'),
            'type_structure' => request('type'),
            'evaluation' => request('evaluation'),
            'convention' => request('convention'),
            'reference_convention' => request('reference'),
            'statut_juridique' => request('statut'),
            'guide' => request('guide')
        ]);

        return redirect::route('structure.liste');
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
        $personne = Personne::all();
        $data = Structure::find($id);
        return view('pages.structure.edit',compact(['data','personne']));
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
        $structure = Structure::find($id);
        $request->validate([
            'nom' => 'required',
            'personne' => 'required',
            'sigle' => 'required',
            'domaine' => 'required',
            'localite'=> 'required',
            'prefecture'=>'required',
            'region' => 'required',
            'type' => 'required',
            'evaluation' => 'required',
            'convention' => 'required',
            'reference' => 'required',
            'statut'=>'required',
            'guide' => 'required'
            
        ]); 

    
        $structure->nom = request('nom');
        $structure->personne_id = request('personne');
        $structure->sigle = request('sigle');
        $structure->domaine = request('domaine');
        $structure->localite = request('localite');
        $structure->prefecture = request('prefecture');
        $structure->region = request('region');
        $structure->type_structure = request('type');
        $structure->evaluation = request('evaluation');
        $structure->convention = request('convention');
        $structure->reference_convention = request('reference');
        $structure->statut_juridique = request('statut');
        $structure->guide = request('guide');

        $structure->save();

        return redirect::route('structure.liste');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id = Structure::find($id);
        $id -> delete();

        return redirect::route('structure.liste');
    }
}

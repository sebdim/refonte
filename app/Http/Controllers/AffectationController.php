<?php

namespace App\Http\Controllers;


use App\Models\Candidat;
use App\Models\Affectation;
use App\Models\Structure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class AffectationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $affectation = DB::table('affectations')
        ->join('candidats', 'affectations.candidat_id', '=', 'candidats.id')
        ->join('structures', 'affectations.structure_id', '=', 'structures.id')
        ->select('candidats.*', 'affectations.*', 'structures.*')
        ->get();
        return view('pages.affectation.liste',compact(['affectation']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        $candidat = Candidat::all();
        $structure = Structure::all();
        $affectation = Affectation::all();
        return view('pages.affectation.affectation',compact(['candidat','structure','affectation']));    
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
            'structure' => 'required',
            'candidat' => 'required',
        ]); 

        Affectation::create([
        'structure_id' => request('structure'),
        'candidat_id' => request('candidat'),
        ]);

        return redirect::route('affectation.liste');
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
        $candidat = Candidat::all();
        $structure = Structure::all();
        $data = Affectation::find($id);
        return view('pages.affectation.edit',compact(['data','candidat','structure']));
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
        $affectation = Affectation::find($id);
        $request->validate([
            'structure' => 'required',
            'candidat' => 'required',
        ]); 


        $affectation->candidat_id = request('candidat');
        $affectation->structure_id = request('structure');

        $affectation->save();

        return redirect::route('affectation.liste');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id = Affectation::find($id);
        $id -> delete();

        return redirect::route('affectation.liste');
    }
}

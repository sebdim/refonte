<?php

namespace App\Http\Controllers;

//use Illuminate\Validation\Validator;
use Illuminate\Http\Request;
use App\Models\Mission;
use App\Models\Structure;
use Illuminate\Support\Facades\Redirect;

class MissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $structure = Structure::all();
        return view('pages.mission.mission',compact(['structure']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $mission = Mission::paginate(10);
        return view('pages.mission.liste',compact(['mission']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $todayDate = date('Y-m-d');
        $request->validate([
            'titre' => 'required',
            'etat' => 'required',
            'structure' => 'required',
            'date_debut' => 'required',
            'date_fin' => 'required'
        ]);

       /* if ($request->fails()) {
           return back()->withErrors($request)->withInput();
       } */

        Mission::create([
            'titre' => request('titre'),
            'etat' => request('etat'),
            'structure_id' => request('structure'),
            'date_debut' => request('date_debut'),
            'date_fin' => request('date_fin')
        ]);

        /* Mission::create([
            'titre' => $request -> titre,
            'etat' => $request -> etat,
            'date_debut' => $request -> date_debut,
            'date_fin' => $request -> date_fin,
           ]); */

        return redirect::route('mission.liste');
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
        //

        $data = Mission::find($id);
        return view('pages.mission.edit',compact(['data']));
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


        $mission = Mission::find($id);
        $request->validate([
            'titre' => 'required',
            'etat' => 'required',
            'structure' => 'required',
            'date_debut' => 'required|after_or_equal:today',
            'date_fin' => 'required'
        ]);
        $mission->titre = request('titre');
        $mission->etat = request('etat');
        $mission->etat = request('structure');
        $mission->date_debut = request('date_debut');
        $mission->date_fin = request('date_fin');
        $mission->save();

        return redirect::route('mission.liste');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id = Mission::find($id);
        $id -> delete();

        return redirect::route('mission.liste');
    }
}

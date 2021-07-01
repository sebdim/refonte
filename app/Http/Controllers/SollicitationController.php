<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sollicitation;
use Illuminate\Support\Facades\Redirect;

class SollicitationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('pages.sollicitation.sollicitation');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $sollicitation = Sollicitation::paginate(10);
        return view('pages.sollicitation.liste',compact(['sollicitation']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'demande' => 'required|max:10',
            'recu' => 'required|min:1',
        ]);

      
        
        Sollicitation::create([
            'nombre_de_volontaires_sollicites' => request('demande'),
            'nombre_de_volontaires_recus' => request('recu'),
        ]);

        return redirect::route('sollicitation.liste');
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
        $data = Sollicitation::find($id);
        return view('pages.sollicitation.edit',compact(['data']));
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
        //
        $sollicitation = Sollicitation::find($id);
        $request->validate([
            'demande' => 'required|max:10',
            'recu' => 'required|min:1',
        ]);
        $sollicitation->nombre_de_volontaires_sollicites = request('demande');
        $sollicitation->nombre_de_volontaires_recus = request('recu');
        $sollicitation->save();

        return redirect::route('sollicitation.liste');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $id = Sollicitation::find($id);
        $id -> delete();

        return redirect::route('sollicitation.liste');
    }
}

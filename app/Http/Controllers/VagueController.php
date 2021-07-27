<?php

namespace App\Http\Controllers;

use App\Models\Vague;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class VagueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vague = Vague::all();
        return view('pages.vague.liste',compact(['vague']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.vague.vague');
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
            'candidat' => 'required',
            'nom' => 'required',
            'nombre' => 'required',
        ]);
        Vague::create([
            'candidat_id' => request('candidat'),
            'nom' => request('nom'),
            'nombre_candidat' => request('nombre'),
        ]);
        return redirect::route('vague.liste');
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
        $data = Vague::find($id);
        return view('pages.vague.edit',compact(['data']));
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
        $vague = Vague::find($id);
        $request->validate([
            'nom' => 'required',
        ]);
        $vague->nom = request('nom');
        $vague->save();

        return redirect::route('vague.liste');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id = Vague::find($id);
        $id -> delete();

        return redirect::route('vague.liste');
    }
}

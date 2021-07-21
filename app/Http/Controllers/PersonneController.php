<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personne;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;


class PersonneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.personne.personne');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nbre = count(Personne::all());
        $personne = Personne::all();
        $tous = DB::table('personnes')->paginate(1);
        return view('pages.personne.liste',compact(['nbre','personne','tous']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        Personne::create([
         'nom' => $request -> nom,
         'prenoms' => $request -> prenoms,
         'titre' => $request -> titre,
         'contacts' => $request -> contact,
         'email' => $request -> email
        ]);

        return redirect::route('personne.liste');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Personne::find($id);
        return view('pages.personne.edit',compact(['data']));
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
        $id = Personne::find($id);
        $id -> nom = request('nom');
        $id -> prenoms = request('prenoms');
        $id -> titre = request('titre');
        $id -> contacts = request('contact');
        $id -> email = request('email');

        $id -> save();

        return redirect::route('personne.liste');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id = Personne::find($id);
        $id -> delete();

        return redirect::route('personne.liste');
    }
}

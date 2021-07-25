@extends('layouts.layout')
@section('title','Modification Candidat | ANPC')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row ">
            <div class="col-lg-12">
                <h1 align="center">Modification</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form class="form-valide" action="{{ route('candidat.update',$data->id)}}" method="post">
                            @csrf
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="nom">Nom du candidat </label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="nom" name="nom" value="{{$data -> nom_candidat}}"required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="prenom">Prenom du candidat </label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="prenom" name="prenom" value="{{$data -> prenoms}}"  required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="date">Date de naissance </label>
                                <div class="col-lg-6">
                                    <input type="date" class="form-control" placeholder="2017-06-04" id="" name="date"  value="{{$data -> date_de_naissance}}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="sexe">Sexe </label>
                                <div class="col-lg-6">
                                    <input class="radio-inline" type="radio" name="sexe" id="sexe" value="Masculin" @if($data->sexe == 'Masculin') checked @endif>
                                    <label class="form-check-label" for="sexe">Masculin</label>
                                    <input class="radio-inline" type="radio" name="sexe" id="sexe" value="Féminin" @if($data->sexe == 'Féminin') checked @endif>
                                    <label class="form-check-label" for="sexe">Féminin</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="email">E-mail </label>
                                <div class="col-lg-6">
                                    <input type="email" class="form-control" id="email" name="email" value="{{$data -> email}}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="handicap">Etat d'handicap </label>
                                <div class="col-lg-6">
                                    <input class="radio-inline" type="radio" name="handicap" id="handicap" value="Oui" @if($data->handicap == 'Oui') checked @endif>
                                    <label class="form-check-label" for="handicap">Oui</label>
                                    <input class="radio-inline" type="radio" name="handicap" id="handicap" value="Non" @if($data->handicap == 'Non') checked @endif>
                                    <label class="form-check-label" for="handicap">Non</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="contact">Contact </label>
                                <div class="col-lg-6">
                                    <input type="tel" class="form-control" id="contact" name="contact" placeholder="99999999" pattern="[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}" value="{{$data -> contacts}}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="lieu_resid">Lieu de résidence </label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="lieu_resid" name="lieu_resid" value="{{$data -> lieu_de_residence}}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="niveau">Niveau d'étude  </label>
                                <div class="col-lg-6">
                                    <select class="form-control" id="niveau" name="niveau" value="{{$data -> niveau_etude}}" required>
                                        <option value="">Choisir le niveau d'étude</option>
                                        <option value="Troisième">Troisième</option>
                                        <option value="Seconde">Seconde</option>
                                        <option value="Terminale">Terminale</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="diplome">Diplôme  </label>
                                <div class="col-lg-6">
                                    <select class="form-control" id="diplome" name="diplome" value="{{$data -> diplome}}" required>
                                        <option value="">Choisir le diplome </option>
                                        <option value="BEPC">BEPC</option>
                                        <option value="BAC 2">Baccalauréaut Deuxième partie</option>
                                        <option value="Licence">Licence</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="domaine">Domaine du diplôme </label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="domaine" name="domaine" value="{{$data -> domaine_diplome}}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="affectation">Domaine d'affectation </label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="affectation" name="affectation" value="{{$data -> domaine_affectation}}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="moyenne">Moyenne </label>
                                <div class="col-lg-6">
                                    <input type="number" class="form-control" id="moyenne" name="moyenne" value="{{$data -> moyenne}}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="jury">Jury </label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="jury" name="jury" value="{{$data -> jury}}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="decision">Décision du jury </label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="decision" name="decision" value="{{$data -> decision_jury}}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="date">Date d'entretien </label>
                                <div class="col-lg-6">
                                    <input type="date" class="form-control" placeholder="2017-06-04" id="" name="date_ent" value="{{$data -> date_entretien}}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="formation">A-t-il été formé ?? </label>
                                <div class="col-lg-6">
                                    <input class="radio-inline" type="radio" name="formation" id="formation" value="Oui" @if($data->formation == 'Oui') checked @endif>
                                    <label class="form-check-label" for="formation">Oui</label>
                                    <input class="radio-inline" type="radio" name="formation" id="formation" value="Non" @if($data->formatio == 'Non') checked @endif>
                                    <label class="form-check-label" for="formation">Non</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="date">Date de formation </label>
                                <div class="col-lg-6">
                                    <input type="date" class="form-control" placeholder="2017-06-04" id="" name="date_form" value="{{$data -> date_formation}}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="statut">Statut </label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="statut" name="statut" value="{{$data -> statut}}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-8 ml-auto">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

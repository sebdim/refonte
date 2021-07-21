@extends('layouts.layout')
@section('title','Structure | hello city')
@section('content')
        <div class="content-body">
            <div class="container-fluid">
            <div class="row ">
                <div class="col-lg-12">
                    <h1 align="center">Enrgistrement</h1>
                </div>
            </div>
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                    <form class="form-valide" action="{{ route('structure.add')}}" method="post">
                                    @csrf
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="nom">Nom de la structure <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom de la structure">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="sigle">Sigle de la structure <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="sigle" name="sigle" placeholder="Sigle de la structure">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="domaine">Domaine de la structure <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="domaine" name="domaine" placeholder="Domaine de la structure">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="localite">Localité de la structure <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="localite" name="localite" placeholder="Localité de la structure">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="prefecture">Préfecture de la structure <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="prefecture" name="prefecture" placeholder="Préfecture de la structure">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="region">Région de la structure <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="region" name="region" rows="5" placeholder="Région de la structure">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="type">Type de la structure <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="type" name="type" placeholder="Type de la structure">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="evaluation">La structure est-elle évaluée ?? <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input class="radio-inline" type="radio" name="evaluation" id="inlineRadio1" value="Oui">
                                                    <label class="form-check-label" for="inlineRadio1">Oui</label>
                                                <input class="radio-inline" type="radio" name="evaluation" id="inlineRadio1" value="Non">
                                                    <label class="form-check-label" for="inlineRadio1">Non</label>                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="convention">La structure a-t-elle signé une convention??<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input class="radio-inline" type="radio" name="convention" id="inlineRadio1" value="Oui">
                                                    <label class="form-check-label" for="inlineRadio1">Oui</label>
                                                <input class="radio-inline" type="radio" name="convention" id="inlineRadio1" value="Non">
                                                    <label class="form-check-label" for="inlineRadio1">Non</label>                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="reference">Référence de la convention <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="reference" name="reference" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="statut">Statut jurique de la structure <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="statut" name="statut" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="guide">Guide <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="guide" name="guide" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="personne">Personne ressource <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="personne" name="personne" value="{{old('personne')}}"> 
                                                    <option value="">Choisir la personne ressource</option>
                                                    @foreach ($personne as $personne)
                                                        <option value="{{$personne->id}}">{{$personne-> nom}} {{$personne->prenoms}}</option>
                                                    @endforeach
                                                </select>
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
        </div>
@endsection
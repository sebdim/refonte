@extends('layouts.layout')
@section('title','Modification | Structure | ANVT')
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
                            @if (Session::get('success'))
                            <div class="alert alert-success">
                                <div class="alert alert-success">
                                    {{Session:get('success')}}
                                </div>
                            </div>
                            @endif
                            @if (Session::get('fail'))
                            <div class="alert alert-success">
                                <div class="alert alert-danger">
                                    {{Session:get('fail')}}
                                </div>
                            </div>
                            @endif
                                
                                    <form class="form-valide" action="{{ route('structure.update',$data->id)}}" method="post">
                                    @csrf
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="nom">Nom de la structure 
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="nom" name="nom" value="{{$data ->nom}}" placeholder="Nom de la structure">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="sigle">Sigle de la structure 
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="sigle" name="sigle" value="{{$data -> sigle}}" placeholder="Sigle de la structure">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="domaine">Domaine de la structure 
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="domaine" name="domaine" value="{{$data ->domaine}}" placeholder="Domaine de la structure">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="localite">Localité de la structure 
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="localite" name="localite" value="{{$data ->localite}}" placeholder="Localité de la structure">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="region">Région de la structure 
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="region" name="region" value="{{$data ->region}}" placeholder="Région de la structure">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="type">Type de la structure 
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="type" name="type" value="{{$data ->type_structure}}" placeholder="Type de la structure">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="evaluation">La structure est-elle évaluée ?? 
                                            </label>
                                            <div class="col-lg-6">
                                                <input class="radio-inline" type="radio" name="evaluation" id="inlineRadio1" value="Oui">
                                                    <label class="form-check-label" for="inlineRadio1">Oui</label>
                                                <input class="radio-inline" type="radio" name="evaluation" id="inlineRadio1" value="Non">
                                                    <label class="form-check-label" for="inlineRadio1">Non</label>                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="convention">La structure a-t-elle signé une convention??
                                            </label>
                                            <div class="col-lg-6">
                                                <input class="radio-inline" type="radio" name="convention" id="inlineRadio1" value="Oui">
                                                    <label class="form-check-label" for="inlineRadio1">Oui</label>
                                                <input class="radio-inline" type="radio" name="convention" id="inlineRadio1" value="Non">
                                                    <label class="form-check-label" for="inlineRadio1">Non</label>                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="reference">Référence de la convention 
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="reference" value="{{$data ->reference_convention}}" name="reference" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="statut">Statut jurique de la structure 
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="statut" value="{{$data -> statut_juridique}}" name="statut" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="guide">Guide 
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="guide" value="{{$data ->guide}}" name="guide" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="nom">Personne ressource 
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="personne" name="personne"> 
                                                @foreach($personne as $personne) 
                                                    <option @if($personne->id==$data->personne_id) selected @endif value="{{$personne->id}}"> {{$personne->nom}} {{$personne->prenoms}}</option>                   
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
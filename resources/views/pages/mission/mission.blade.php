@extends('layouts.layout')
@section('title','Ajout | Mission')
@section('content')
        <div class="content-body">
            <div class="container-fluid">
            <div class="row ">
                <div class="col-lg-12">
                    <h1 align="center">Enrégistrement d'une mission</h1>
                </div>
            </div>
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                           
                                
                                    <form class="form-valide" action="{{ route('mission.add')}}" method="post">
                                    @csrf
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="etat">Titre de la mission  </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="titre" name="titre" placeholder="Titre" value="{{old('titre')}}" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="etat">Etat de la mission  </label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="etat" name="etat" value="{{old('etat')}}"> 
                                                    <option value="">Choisir l'état</option>
                                                    <option value="en cours">En cours...</option>
                                                    <option value="satisfait">Satisfait</option>
                                                    <option value="non satisfait">Non satisfait</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class=" form-group row form-material">
                                            <label class="col-lg-4 col-form-label" for="date_debut">Date de début </label>
                                            <div class="col-lg-6">
                                                <input type="date" class="form-control" placeholder="2017-06-04" id="" name="date_debut" value="{{old('date_debut')}}">
                                            </div>
                                        </div>
                                        <div class=" form-group row form-material">
                                            <label class="col-lg-4 col-form-label" for="date_debut">Date de fin </label>
                                            <div class="col-lg-6">
                                                <input type="date" class="form-control datepicker" placeholder="2017-06-04" id="" name="date_fin" min="" value="{{old('date_fin')}}">
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
@extends('layouts.layout')
@section('title','Affectation | ANPC')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row ">
            <div class="col-lg-12">
                <h1 align="center">Enrégistrement</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">       
                        <form class="form-valide" action="{{ route('affectation.add')}}" method="post">
                            @csrf
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="nom">Nom du candidat </label>
                                <div class="col-lg-6">
                                    <select class="form-control" id="candidat" name="candidat" value="{{old('candidat')}}"> 
                                        <option value="">Choisir le candidat</option>
                                        @foreach ($candidat as $candidat)
                                            <option value="{{$candidat->id}}">{{$candidat-> nom_candidat}} {{$candidat->prenoms}}</option>
                                        @endforeach
                                    </select>                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="prenom">Nom de la structure </label>
                                <div class="col-lg-6">
                                    <select class="form-control" id="structure" name="structure" value="{{old('structure')}}"> 
                                        <option value="">Choisir la structure</option>
                                        @foreach ($structure as $structure)
                                            <option value="{{$structure->id}}">{{$structure-> nom}} </option>
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
@endsection


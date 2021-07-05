@extends('layouts.layout')
@section('title','Modification | Personnes ressources')
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
                           
                                
                                    <form class="form-valide" action="{{ route('personne.update',$data->id)}}" method="post">
                                    @csrf
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="nom">Nom  <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="nom" value="{{$data -> nom}}" name="nom" placeholder="Nom de la personne ressource">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="prenoms">Prénoms <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="prenoms" value="{{$data -> prenoms}}" name="prenoms" placeholder="Prénoms de la personne ressource">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="titre">Titre <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="titre" value="{{$data -> titre}}" name="titre" placeholder="Titre de la personne ressource">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="contact">Contact <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="tel" class="form-control" id="contact" value="{{$data -> contacts}}" name="contact" placeholder="99 99 99 99" pattern="[0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="email">E-mail <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="email" class="form-control" id="email" value="{{$data -> email}}" name="email"  placeholder="E-mail de la personne ressource">
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
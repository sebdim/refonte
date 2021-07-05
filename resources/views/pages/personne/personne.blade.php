@extends('layouts.layout')
@section('title','Ajout | Personnes ressources')
@section('content')
        <div class="content-body">
            <div class="container-fluid">
            <div class="row ">
                <div class="col-lg-12">
                    <h1 align="center">Enrégistrement d'une personne ressource</h1>
                </div>
            </div>
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                           
                                
                                    <form class="form-valide" action="{{ route('personne.add')}}" method="post">
                                    @csrf
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="nom">Nom  </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom de la personne ressource" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="prenoms">Prénoms </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="prenoms" name="prenoms" placeholder="Prénoms de la personne ressource" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="titre">Titre </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="titre" name="titre" placeholder="Titre de la personne ressource" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="contact">Contact </label>
                                            <div class="col-lg-6">
                                                <input type="tel" class="form-control" id="contact" name="contact" placeholder="99 99 99 99" pattern="[0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="email">E-mail </label>
                                            <div class="col-lg-6">
                                                <input type="email" class="form-control" id="email" name="email"  placeholder="E-mail de la personne ressource" required>
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
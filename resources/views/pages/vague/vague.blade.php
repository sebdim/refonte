@extends('layouts.layout')
@section('title','Ajout vague | ANVT')
@section('content')
        <div class="content-body">
            <div class="container-fluid">
            <div class="row ">
                <div class="col-lg-12">
                    <h1 align="center">Enrégistrement d'une vague</h1>
                </div>
            </div>
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">


                                    <form class="form-valide" action="{{ route('vague.add')}}" method="post">
                                    @csrf
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="nom">Titre de la mission  </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="nom" name="nom" placeholder="" value="" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="nombre">Nombre de candidats </label>
                                            <div class="col-lg-6">
                                                <input type="numeric" class="form-control" id="nombre" name="nombre" placeholder="" value="" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="candidat">Candidat  </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" placeholder="" id="" name="candidat" value="">
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

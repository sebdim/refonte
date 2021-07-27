@extends('layouts.layout')
@section('title','Modification Vague | ANVT')
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
                        <form class="form-valide" action="{{ route('vague.update',$data->id)}}" method="post">
                            @csrf
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="nom">nom </label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="nom" value="{{$data -> nom}}" name="nom" placeholder="Nom de la personne ressource">
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

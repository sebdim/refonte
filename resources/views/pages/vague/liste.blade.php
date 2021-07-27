@extends('layouts.layout')
@section('title','Liste des vague | ANVT')
@section('content')
<div class="content-body">
    <div class="container-fluid mt-3">
        <div class="row ">
            <div class="col-lg-12">
                <h1 align="center">Liste des vagues</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="float-right"><a href="{{route('mission.index')}}" class="btn btn-primary">Ajouter</a></div>
                        <div class="active-member">
                            <div class="table-responsive">
                                <table class="table table-xs mb-0">
                                    <thead>
                                        <tr>
                                            <th>Nom</th>
                                            <th>Nombre de candidats</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($vague as $vague )
                                            <tr>
                                                <td>{{ $vague->nom }}</td>
                                                <td>{{ $vague->nombre_candidat }}</td>
                                                <td>
                                                    <span>
                                                        <a href="{{ route('vague.edit',$vague->id)}}" data-toggle="tooltip" data-placement="top" title="Editer"><i class="fa fa-pencil color-muted m-r-5"></i></a>
                                                        &nbsp; &nbsp; &nbsp;&nbsp;
                                                        <a href="{{route('vague.delete',$vague->id)}}" data-toggle="tooltip" data-placement="top" title="Supprimer"><i class="fa fa-close color-danger"></i></a>
                                                    </span>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


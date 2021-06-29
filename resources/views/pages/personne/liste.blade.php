@extends('layouts.layout')
@section('title','Liste | Personnes ressources')
@section('content')
        <div class="content-body">
            <div class="container-fluid mt-3">
                <div class="row ">
                    <div class="col-lg-12">
                        <h1 align="center">Liste des personnes ressources</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="float-right"><a href="{{route('personne.index')}}" class="btn btn-primary">Ajouter</a>
                        
                                </div>
                                <div class="active-member">
                                    <div class="table-responsive">
                                        <table class="table table-xs mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Noms</th>
                                                    <th>Prénoms</th>
                                                    <th>Titre</th>
                                                    <th>Contacts</th>
                                                    <th>Adresse mail</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($personne as $pers )
                                            <tr>
                                                <td>{{ $pers -> nom }}</td>
                                                <td>{{ $pers -> prenoms }}</td>
                                                <td>{{ $pers -> titre }}</td>
                                                <td>{{ $pers -> contacts }}</td>
                                                <td>{{ $pers -> email }}</td>
                                                <td>
                                                    <span>
                                                        <a href="{{ route('personne.edit',$pers->id)}}" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted m-r-5"></i></a>
                                                        &nbsp; &nbsp; &nbsp;&nbsp;  
                                                        <a href="{{route('personne.delete',$pers->id)}}" data-toggle="tooltip" data-placement="top" title="Close"><i class="fa fa-close color-danger"></i></a>
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
            <!-- #/ container -->
        </div>
@endsection
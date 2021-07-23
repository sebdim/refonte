@extends('layouts.layout')
@section('title','Liste Affectations | ANVT')
@section('content')
        <div class="content-body">
            <div class="container-fluid mt-3">
                <div class="row ">
                    <div class="col-lg-12">
                        <h1 align="center">Liste des affectations</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="float-right"><a href="{{route('affectation.index')}}" class="btn btn-primary">Ajouter</a>
                                </div>
                                <div class="active-member">
                                    <div class="table-responsive">
                                        <table class="table table-xs mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Nom de la structure</th>
                                                    <th>Sigle</th>
                                                    <th>Nom du volontaire</th>
                                                    <th>Prénoms</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($affectation as $affectation )
                                            <tr>
                                                <td>{{ $affectation -> nom }}</td>
                                                <td>{{ $affectation -> sigle }}</td>
                                                <td>{{ $affectation -> nom_candidat }}</td>
                                                <td>{{ $affectation -> prenoms }}</td>
                                                <td>
                                                    <span>
                                                        <a href="{{ route('affectation.edit',$affectation->id)}}" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted m-r-5"></i></a>
                                                        &nbsp; &nbsp; &nbsp;&nbsp;  
                                                        <a href="{{route('affectation.delete',$affectation->id)}}" data-toggle="tooltip" data-placement="top" title="Close"><i class="fa fa-close color-danger"></i></a>
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
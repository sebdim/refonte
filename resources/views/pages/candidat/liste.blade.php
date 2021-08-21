@extends('layouts.layout')
@section('title','Liste | Structures | ANVT')
@section('content')
        <div class="content-body">
            <div class="container-fluid mt-3">
                <div class="row ">
                    <div class="col-lg-12">
                        <h1 align="center">Liste des candidats</h1>
                    </div>
                </div>
                   
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="float-right"><a href="{{route('candidat.index')}}" class="btn btn-primary">Ajouter</a>
                                </div>
                                <div class="active-member">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered zero-configuration">
                                            <thead>
                                                <tr>
                                                    <th>Noms</th>
                                                    <th>Prénoms</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($candidats as $candidat )
                                            <tr>
                                                <td>{{ $candidat -> nom_candidat }}</td>
                                                <td>{{ $candidat -> prenoms }}</td>
                                                <td>
                                                    <span>
                                                        <a href="{{ route('candidat.edit',$candidat->id)}}" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted m-r-5"></i></a>
                                                        &nbsp; &nbsp; &nbsp;&nbsp;  
                                                        <a href="{{route('candidat.delete',$candidat->id)}}" data-toggle="tooltip" data-placement="top" title="Close"><i class="fa fa-close color-danger"></i></a>
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
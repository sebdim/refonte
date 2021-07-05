@extends('layouts.layout')
@section('title','Liste | Structures | ANVT')
@section('content')
        <div class="content-body">
            <div class="container-fluid mt-3">
                <div class="row ">
                    <div class="col-lg-12">
                        <h1 align="center">Liste des structures</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="float-right"><a href="{{route('structure.index')}}" class="btn btn-primary">Ajouter</a>
                        
                                </div>
                                <div class="active-member">
                                    <div class="table-responsive">
                                        <table class="table table-xs mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Noms</th>
                                                    <th>Sigle</th>
                                                    <th>Personne res.</th>
                                                    <th>Domaine</th>
                                                    <th>Localité</th>
                                                    <th>Prefecture</th>
                                                    <th>Région</th>
                                                    <th>Type de structure</th>
                                                    <th>Evaluation</th>
                                                    <th>Convention</th>
                                                    <th>Référence Conv.</th>
                                                    <th>Statut juridique</th>
                                                    <th>Guide</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($structure as $structure )
                                            <tr>
                                                <td>{{ $structure -> nom }}</td>
                                                <td>{{ $structure -> sigle }}</td>
                                                <td>{{ $structure -> personne_id }}</td>
                                                <td>{{ $structure -> domaine }}</td>
                                                <td>{{ $structure -> localite }}</td>
                                                <td>{{ $structure -> prefecture }}</td>
                                                <td>{{ $structure -> region }}</td>
                                                <td>{{ $structure -> type_structure }}</td>
                                                <td>{{ $structure -> evaluation }}</td>
                                                <td>{{ $structure -> convention }}</td>
                                                <td>{{ $structure -> reference_convention }}</td>
                                                <td>{{ $structure -> statut_juridique }}</td>
                                                <td>{{ $structure -> guide }}</td>
                                                <td>
                                                    <span>
                                                        <a href="{{ route('structure.edit',$structure->id)}}" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted m-r-5"></i></a>
                                                        &nbsp; &nbsp; &nbsp;&nbsp;  
                                                        <a href="{{route('structure.delete',$structure->id)}}" data-toggle="tooltip" data-placement="top" title="Close"><i class="fa fa-close color-danger"></i></a>
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
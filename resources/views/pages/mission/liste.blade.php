@extends('layouts.layout')
@section('title','Liste | Mission')
@section('content')
        <div class="content-body">
            <div class="container-fluid mt-3">
                <div class="row ">
                    <div class="col-lg-12">
                        <h1 align="center">Liste des missions</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="float-right"><a href="{{route('mission.index')}}" class="btn btn-primary">Ajouter</a>
                        
                                </div>
                                <div class="active-member">
                                    <div class="table-responsive">
                                        <table class="table table-xs mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Titre</th>
                                                    <th>Structure</th>
                                                    <th>Etat de la mission</th>
                                                    <th>Date de début</th>
                                                    <th>Date de fin</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($mission as $mission )
                                            <tr>
                                                <td>{{ $mission -> titre }}</td>
                                                <td>{{ $mission -> structure_id }}</td>
                                                <td>{{ $mission -> etat }}</td>
                                                <td>{{ $mission -> date_debut }}</td>
                                                <td>{{ $mission -> date_fin }}</td>
                                                <td>
                                                    <span>
                                                        <a href="{{ route('mission.edit',$mission->id)}}" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted m-r-5"></i></a>
                                                        &nbsp; &nbsp; &nbsp;&nbsp;  
                                                        <a href="{{route('mission.delete',$mission->id)}}" data-toggle="tooltip" data-placement="top" title="Close"><i class="fa fa-close color-danger"></i></a>
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
@extends('layouts.layout')
@section('title','Liste | sollicitation')
@section('content')
        <div class="content-body">
            <div class="container-fluid mt-3">
                <div class="row ">
                    <div class="col-lg-12">
                        <h1 align="center">Liste des sollicitations</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="float-right"><a href="{{route('sollicitation.index')}}" class="btn btn-primary">Ajouter</a>
                        
                                </div>
                                <div class="active-member">
                                    <div class="table-responsive">
                                        <table class="table table-xs mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Nombre de volontaires sollicités</th>
                                                    <th>Nombre de volontaires reçus</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($sollicitation as $sollicitation )
                                            <tr>
                                                <td>{{ $sollicitation -> nombre_de_volontaires_sollicites }}</td>
                                                <td>{{ $sollicitation -> nombre_de_volontaires_recus }}</td>
                                                <td>
                                                    <span>
                                                        <a href="{{ route('sollicitation.edit',$sollicitation->id)}}" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted m-r-5"></i></a>
                                                        &nbsp; &nbsp; &nbsp;&nbsp;  
                                                        <a href="{{route('sollicitation.delete',$sollicitation->id)}}" data-toggle="tooltip" data-placement="top" title="Close"><i class="fa fa-close color-danger"></i></a>
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
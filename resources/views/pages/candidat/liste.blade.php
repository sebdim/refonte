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
                                        <table class="table table-xs mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Noms</th>
                                                    <th>Prénoms</th>
                                                    <th>Date de N.</th>
                                                    <th>Sexe</th>
                                                    <th>Etat d'handicap</th>
                                                    <th>Lieu de rés.</th>
                                                    <th>Téléphone</th>
                                                    <th>E-mail</th>
                                                    <th>Niveu d'étude</th>
                                                    <th>Diplôme</th>
                                                    <th>Domaine du diplôme</th>
                                                    <th>Domine d'affectation</th>
                                                    <th>Moyenne</th>
                                                    <th>Jury</th>
                                                    <th>Décision du Jury</th>
                                                    <th>Date d'entretien</th>
                                                    <th>Formation</th>
                                                    <th>Date de formation</th>
                                                    <th>Statut</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($candidat as $candidat )
                                            <tr>
                                                <td>{{ $candidat -> nom }}</td>
                                                <td>{{ $candidat -> prenoms }}</td>
                                                <td>{{ $candidat -> date_de_naissance }}</td>
                                                <td>{{ $candidat -> sexe }}</td>
                                                <td>{{ $candidat -> handicap }}</td>
                                                <td>{{ $candidat -> lieu_de_residence }}</td>
                                                <td>{{ $candidat -> contacts }}</td>
                                                <td>{{ $candidat -> email }}</td>
                                                <td>{{ $candidat -> niveau_etude }}</td>
                                                <td>{{ $candidat -> diplome }}</td>
                                                <td>{{ $candidat -> domaine_diplome }}</td>
                                                <td>{{ $candidat -> domaine_affectation }}</td>
                                                <td>{{ $candidat -> moyenne }}</td>
                                                <td>{{ $candidat -> jury }}</td>
                                                <td>{{ $candidat -> decision_jury }}</td>
                                                <td>{{ $candidat -> date_entretien }}</td>
                                                <td>{{ $candidat -> formation }}</td>
                                                <td>{{ $candidat -> date_formation }}</td>
                                                <td>{{ $candidat -> statut }}</td>
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
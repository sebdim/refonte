@extends('layouts.layout')
@section('title','Candidat | ANPC')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row ">
            <div class="col-lg-12">
                <h1 align="center">Enrégistrement</h1>
            </div>
<<<<<<< HEAD
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">       
                        <form class="form-valide" action="{{ route('candidat.add')}}" method="post">
                            @csrf
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="nom">Nom du candidat </label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="nom" name="nom" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="prenom">Prenom du candidat </label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="prenom" name="prenom" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="date">Date de naissance </label>
                                <div class="col-lg-6">
                                    <input type="date" class="form-control" placeholder="2017-06-04" id="" name="date" required>  
                                </div>
                            </div>
                           <!--  <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="lieu">Lieu de naissance </label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="lieu" name="lieu" required>
                                </div>
                            </div> -->
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="sexe">Sexe </label>
                                <div class="col-lg-6">
                                    <input class="radio-inline" type="radio" name="sexe" id="sexe" value="Masculin">
                                    <label class="form-check-label" for="sexe">Masculin</label>
                                    <input class="radio-inline" type="radio" name="sexe" id="sexe" value="Féminin">
                                    <label class="form-check-label" for="sexe">Féminin</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="email">E-mail </label>
                                <div class="col-lg-6">
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="handicap">Etat d'handicap </label>
                                <div class="col-lg-6">
                                    <input class="radio-inline" type="radio" name="handicap" id="handicap" value="Oui">
                                    <label class="form-check-label" for="handicap">Oui</label>
                                    <input class="radio-inline" type="radio" name="handicap" id="handicap" value="Non">
                                    <label class="form-check-label" for="handicap">Non</label> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="contact">Contact </label>
                                <div class="col-lg-6">
                                    <input type="tel" class="form-control" id="contact" name="contact" placeholder="99999999" pattern="[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="lieu_resid">Lieu de résidence </label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="lieu_resid" name="lieu_resid" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="niveau">Niveau d'étude  </label>
                                <div class="col-lg-6">
                                    <select class="form-control" id="niveau" name="niveau" value="" required> 
                                        <option value="">Choisir le niveau d'étude</option>
                                        <option value="Troisième">Troisième</option>
                                        <option value="Seconde">Seconde</option>
                                        <option value="Terminale">Terminale</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="diplome">Diplôme  </label>
                                <div class="col-lg-6">
                                    <select class="form-control" id="diplome" name="diplome" value="" required> 
                                        <option value="">Choisir le diplome </option>
                                        <option value="BEPC">BEPC</option>
                                        <option value="BAC 2">Baccalauréaut Deuxième partie</option>
                                        <option value="Licence">Licence</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="domaine">Domaine du diplôme </label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="domaine" name="domaine" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="affectation">Domaine d'affectation </label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="affectation" name="affectation" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="moyenne">Moyenne </label>
                                <div class="col-lg-6">
                                    <input type="number" class="form-control" id="moyenne" name="moyenne" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="jury">Jury </label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="jury" name="jury" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="decision">Décision du jury </label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="decision" name="decision" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="date">Date d'entretien </label>
                                <div class="col-lg-6">
                                    <input type="date" class="form-control" placeholder="2017-06-04" id="" name="date_ent" required>  
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="formation">A-t-il été formé ?? </label>
                                <div class="col-lg-6">
                                    <input class="radio-inline" type="radio" name="formation" id="formation" value="Oui">
                                    <label class="form-check-label" for="formation">Oui</label>
                                    <input class="radio-inline" type="radio" name="formation" id="formation" value="Non">
                                    <label class="form-check-label" for="formation">Non</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="date">Date de formation </label>
                                <div class="col-lg-6">
                                    <input type="date" class="form-control" placeholder="2017-06-04" id="" name="date_form" required>  
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="statut">Statut </label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="statut" name="statut" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-8 ml-auto">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
=======
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                    <form class="form-valide" action="{{ route('candidat.add')}}" method="post">
                                    @csrf
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="nom">Nom du candidat </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="nom" name="nom" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="prenom">Prenom du candidat </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="prenom" name="prenom" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="date">Date de naissance </label>
                                            <div class="col-lg-6">
                                                <input type="date" class="form-control" placeholder="2017-06-04" id="" name="date">  
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="lieu">Lieu de naissance </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="lieu" name="lieu" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="sexe">Sexe </label>
                                            <div class="col-lg-6">
                                                <input class="radio-inline" type="radio" name="sexe" id="sexe" value="Oui">
                                                    <label class="form-check-label" for="sexe">Masculin</label>
                                                <input class="radio-inline" type="radio" name="sexe" id="sexe" value="Non">
                                                    <label class="form-check-label" for="sexe">Féminin</label>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="email">E-mail </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="email" name="email" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="handicap">Etat d'handicap </label>
                                            <div class="col-lg-6">
                                                <input class="radio-inline" type="radio" name="handicap" id="handicap" value="Oui">
                                                    <label class="form-check-label" for="handicap">Oui</label>
                                                <input class="radio-inline" type="radio" name="handicap" id="handicap" value="Non">
                                                    <label class="form-check-label" for="handicap">Non</label> 
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="contact">Contact </label>
                                            <div class="col-lg-6">
                                                <input type="tel" class="form-control" id="contact" name="contact" placeholder="99 99 99 99" pattern="[0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="niveau">Niveau d'étude  </label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="niveau" name="niveau" value=""> 
                                                    <option value="">Choisir le niveau d'étude</option>
                                                    <option value=""></option>
                                                    <option value=""></option>
                                                    <option value=""></option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="diplome">Diplôme  </label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="diplome" name="diplome" value=""> 
                                                    <option value="">Choisir le diplome </option>
                                                    <option value=""></option>
                                                    <option value=""></option>
                                                    <option value=""></option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="domaine">Domaine du diplôme </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="domaine" name="domaine" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="affectation">Domaine d'affectation </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="affectation" name="affectation" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="moyenne">Moyenne </label>
                                            <div class="col-lg-6">
                                                <input type="number" class="form-control" id="moyenne" name="moyenne" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="jury">Jury </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="jury" name="jury" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="decision">Décision du jury </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="decision" name="decision" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="date">Date d'entretien </label>
                                            <div class="col-lg-6">
                                                <input type="date" class="form-control" placeholder="2017-06-04" id="" name="date_ent">  
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="formation">A-t-il été formé ?? </label>
                                            <div class="col-lg-6">
                                                <input class="radio-inline" type="radio" name="formation" id="formation" value="Oui">
                                                    <label class="form-check-label" for="formation">Oui</label>
                                                <input class="radio-inline" type="radio" name="formation" id="formation" value="Non">
                                                    <label class="form-check-label" for="formation">Non</label>                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="date">Date de formation </label>
                                            <div class="col-lg-6">
                                                <input type="date" class="form-control" placeholder="2017-06-04" id="" name="date_form" max="2003-12-31">  
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="statut">Statut </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="statut" name="statut" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="structure">Ancienne structure </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="structure" name="structure" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="raison">Raison </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="raison" name="raison" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="decison">Décision </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="decison" name="anc_decison" placeholder="">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col">
                                                <label class="col-lg-4 col-form-label" for="decison">Décision </label>
                                                <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                                            </div>
                                            <div class="col">
                                                <label class="col-lg-4 col-form-label" for="decison">Décision </label>
                                                <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
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
>>>>>>> 916e011a5d23420d956ac83a5aadf8bcdd8d17c0
                    </div>
                </div>
            </div>
        </div>
<<<<<<< HEAD
    </div>
</div>
@endsection
=======
@endsection
>>>>>>> 916e011a5d23420d956ac83a5aadf8bcdd8d17c0

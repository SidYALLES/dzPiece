@extends('admin.admin')
@section('content_admin')
    <div class="container alert" style="padding: 2rem;background-color: #a6d5ec;margin: 2rem">

        <form id="form2" method="post" action="{{url('/modifyUser')}}">
            <select class="form-control" id="selectType" name="selectType" >
                <option>Particulier</option>
                <option>Privé</option>
                <option>Concessionnaire</option>
            </select>
            <select class="form-control" id="selectUserT" name="selectUserT" >
                <option>Particulier</option>
                <option>Privé</option>
                <option>Concessionnaire</option>
            </select>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="Email">Adresse mail</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Mot de passe</label>
                    <input type="password" class="form-control" id="mdp" name="mdp" placeholder="Password">
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" placeholder="">
            </div>
            <div class="form-group">
                <label for="inputAddress2">Prenom</label>
                <input type="text" class="form-control" id="prenom" name="prenom" placeholder="">
            </div>
            <div class="form-group">
                <label for="inputAddress">Nom d'utilisateur</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="">
            </div>
            <div class="form-group">
                <label for="inputAddress">Date de Naissence</label>
                <input type="date" class="form-control" id="dateN" name="dateN" placeholder="">
            </div>
            <div class="form-group">
                <label for="inputAddress">Numero</label>
                <input type="number" class="form-control" id="numero" name="numero" placeholder="">
            </div>
            <div class="form-group">
                <label for="inputAddress">Adresse</label>
                <input type="text" class="form-control" id="adresse" name="adresse" placeholder="">
            </div>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </form>


    </div>
@stop
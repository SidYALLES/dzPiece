@extends('admin.admin')
@section('content_admin')
    <div class="container alert" style="padding: 2rem;background-color: #bcdff1;margin: 2rem">

        <form id="form2" method="post" action="{{url('/addAdmin')}}">
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
            <select class="form-control" id="selectPrivil" name="selectPrivil" >
                <option value="0" selected="selected" disabled="disabled">Selectionnez le privilége </option>
                @for($i=$privil;$i<=2;$i++)
                    <option>{{$i}}</option>
                @endfor
            </select>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </form>
    </div>
@stop
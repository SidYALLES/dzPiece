@extends('Layouts.main')
@section('contenu')
    <div class="container">
        <h1 style="display: inline">{{'this is the admin page'}}</h1>
        <div class="btn-group" style="float: right">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                Menu
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu dropdown-menu-right" role="menu">
                <li><a href="/modifyInfo" methods="get">Mes Informations</a></li>
                <li><a href="/addUser" methods="get">Ajouter Client</a></li>
                <li><a href="/modifyUser" methods="get">Modifier Client</a></li>
                <li><a href="/addAdmin" methods="get">Ajouter Admin</a></li>
                <li><a href="/modifyAdmin" methods="get">Modifier Admin</a></li>
            </ul>
        </div>
    </div>
    <div class="container">
        @yield('content_admin')
    </div>
@stop
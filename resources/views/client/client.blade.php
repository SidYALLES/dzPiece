@extends('Layouts.main')
@section('contenu')
    <div class="row">
        <div class="col-lg-2 col-sm-12" style="background-color: #bcdff1">
            <div class="main">
                <div class="side">
                    <nav class="dr-menu">
                        <div class="dr-trigger"><span class="dr-icon dr-icon-menu"></span><a class="dr-label">{{Auth::user()->name}}</a></div>
                        <ul>
                            <li><a class="dr-icon dr-icon-user" href="/client/lp">Mon garage</a></li>
                            <li><a class="dr-icon dr-icon-camera" href="/client/ab">Mes abonnements</a></li>
                            <li><a class="dr-icon dr-icon-heart" href="/client/stats">Mes statistiques</a></li>
                            <li><a class="dr-icon dr-icon-bullhorn" href="/client/info">Mes informations</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <script src="js/ytmenu.js"></script>
        </div>
        <div class="col-lg-10 col-sm-12" >
            @yield('contentClient')
        </div>
    </div>
@stop
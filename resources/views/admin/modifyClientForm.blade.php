@extends('admin.admin')
@section('content_admin')
    <div class="container alert" style="">

    <div class="table-responsive" id="employee_details" style="">
        <form action="{{url('modifyUser')}}" method="post" id="form1">
            <select class="form-control" id="selectUserType" name="selectUserType" >
                <option value="0" id="st" selected="selected">Selectionnez un type </option>
                <option>Particulier</option>
                <option>Privé</option>
                <option>Concessionnaire</option>
            </select>

            <select name="email_list" id="email_list" class="form-control">
                <option value="0" id="st1" selected="selected">Selectionnez l'Email</option>
            </select>
        <table class="table table-bordered">
            <tr>
                <td width="10%" align="right"><b>Nom</b></td>
                <td width="90%"><input name="nom" id="client_nom"></input></td>
            </tr>
            <tr>
                <td width="10%" align="right"><b>Prenom</b></td>
                <td width="90%"><input name="prenom" id="client_prenom"></input></td>
            </tr>

            <tr>
                <td width="10%" align="right"><b>Nom d'utilisateur</b></td>
                <td width="90%"><span id="client_user_name"></span></td>
            </tr>
            <tr>
                <td width="10%" align="right"><b>Date de Naissence</b></td>
                <td width="90%"><input type="date" name="dateN" id="dateN"></input></td>
            </tr>
            <tr>
                <td width="10%" align="right"><b>Numero</b></td>
                <td width="90%"><input type="number" name="numero" id="numero"></input></td>
            </tr>
            <tr>
                <td width="10%" align="right"><b>Adresse</b></td>
                <td width="90%"><input type="text" name="addresse" id="adresse"></input></td>
            </tr>
        </table>
            <input type="submit" class="btn btn-danger">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </form>
    </div>
    <script src="/js/a.js"  ></script>
    </div>
@stop
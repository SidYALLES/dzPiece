@extends('admin.admin')
@section('content_admin')
    <div class="container alert" style="">

        <div class="table-responsive" id="details" style="">
            <form action="{{url('modifyAdmin')}}" method="post" id="form3">
                <select name="email_list_admin" id="email_list_admin" class="form-control">
                    <option value="0"  selected="selected" id="st2">Selectionnez l'Email</option>
                    @foreach($emails as $email)
                        <option>{{$email->email}}</option>
                    @endforeach
                </select>
                <table class="table table-bordered">
                    <tr>
                        <td width="10%" align="right"><b>Nom</b></td>
                        <td width="90%"><input name="nom" id="nom"></input></td>
                    </tr>
                    <tr>
                        <td width="10%" align="right"><b>Prenom</b></td>
                        <td width="90%"><input name="prenom" id="prenom"></input></td>
                    </tr>

                    <tr>
                        <td width="10%" align="right"><b>Nom d'utilisateur</b></td>
                        <td width="90%"><span id="user_name"></span></td>
                    </tr>
                    <tr>
                        <td width="10%" align="right"><b>Niveau de privilège</b></td>
                        <td width="90%"><span id="privilege"></span></td>
                    </tr>
                </table>
                <input type="submit" class="btn btn-danger">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
        </div>
        <script src="/js/a.js"  ></script>
    </div>
@stop
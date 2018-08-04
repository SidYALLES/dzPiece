@extends('admin.admin')
@section('content_admin')
    <div class="container alert" style="">

        <div class="table-responsive" id="details" style="">
            <form action="{{url('modifyAdmin')}}" method="post" id="form3">
                <table class="table table-bordered">
                    <tr>
                        <td width="10%" align="right"><b>Nom</b></td>
                        <td width="90%"><input name="nom" id="nom" value="{{$info->nom}}"></input></td>
                    </tr>
                    <tr>
                        <td width="10%" align="right"><b>Prenom</b></td>
                        <td width="90%"><input name="prenom" id="prenom" value="{{$info->prenom}}"></input></td>
                    </tr>

                    <tr>
                        <td width="10%" align="right"><b>Nom d'utilisateur</b></td>
                        <td width="90%"><span id="user_name">{{Auth::user()->name}}</span></td>
                    </tr>
                    <tr>
                        <td width="10%" align="right"><b>Niveau de privilège</b></td>
                        <td width="90%"><span id="privilege">{{$info->privilege}}</span></td>
                    </tr>
                </table>
                <input type="submit" class="btn btn-danger">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
        </div>
        <script src="/js/a.js"  ></script>
    </div>
@stop
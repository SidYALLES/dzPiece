@extends('Layouts.main')
@section('contenu')
<div class="container">
   <h1>SECTION CONTACT</h1>
   {!! Form::open(array('url' => 'contact/submit')) !!}
     <div class="form-group">
         {{Form::label('name', 'name')}}
         {{Form::text('name', '',['class'=>'form-control','placeholder'=>'Entrer le nom'])}}
     </div>
     <div class="form-group">
         {{Form::label('email', 'email')}}
         {{Form::text('email', '',['class'=>'form-control','placeholder'=>'Entrer l"email'])}}
     </div>
     <div class="form-group">
         {{Form::label('msg', 'msg')}}
         {{Form::textArea('msg', '',['class'=>'form-control','placeholder'=>'Entrer le message'])}}
     </div>
     <div>
     {{Form::submit('Envoyer',['class'=>'btn btn-primary'])}}
     </div>
   {!! Form::close() !!}
</div>
@stop
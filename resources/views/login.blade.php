@extends('Layouts.main')
    @section('contenu')
     <div class="container w-25 p-5">
         {!! Form::open(array('url' => '/login')) !!}
         <div class="form-group">
             {{Form::label('email', 'Email')}}
             {{Form::text('email', '',['class'=>'form-control','placeholder'=>'Entrer l"email'])}}
         </div>
         <div class="form-group">
             {{Form::label('password', 'Password')}}
             {{Form::text('password', '',['class'=>'form-control','placeholder'=>'Entrer le mdp'])}}
         </div>
         <div>
             {{Form::submit('Login',['class'=>'btn btn-primary'])}}
         </div>
         {!! Form::close() !!}
     </div>
    @stop
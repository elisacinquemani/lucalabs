@extends('layouts.app')
@section('content')
  <h1 class="text-center">Create a new student</h1>
  <div class="col-md-6 offset-md-3">
    {{ Form::open(array('action' => 'StudentsController@store', 'class' => 'card')) }}
       {{Form::label('name', 'Name')}}
       {{Form::text('name', '')}}
       {{Form::label('surname', 'Surname')}}
       {{Form::text('surname', '')}}
       {{Form::label('birthday', 'Birthday')}}
       {{Form::date('birthday', '')}}
       {{Form::submit('Add student')}}
    {{ Form::close() }}
  </div>
@endsection

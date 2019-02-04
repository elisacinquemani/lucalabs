@extends('layouts.app')
@section('content')
  <h1 class="text-center">Create a new student</h1>
  <div class="col-md-6 offset-md-3">
    {{ Form::open(array('action' => array('StudentsController@update', $student->id), 'method' => 'PUT', 'class' => 'card')) }}
      {{Form::label('name', 'Name')}}
      {{Form::text('name', $student->name)}}
      {{Form::label('surname', 'Surname')}}
      {{Form::text('surname', $student->surname)}}
      {{Form::label('birthday', 'Birthday')}}
      {{Form::date('birthday', $student->birthday)}}
      {{Form::submit('Update')}}
    {{ Form::close() }}
  </div>
@endsection

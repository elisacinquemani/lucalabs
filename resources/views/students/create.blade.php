@extends('layouts.app')
@section('content')
  <h1 class="text-center">Create a new student</h1>
  {{ Form::open(array('action' => 'StudentsController@store')) }}
     {{Form::label('name', 'Name')}}
  {{ Form::close() }}
@endsection

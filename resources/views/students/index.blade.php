@extends('layouts.app')
@section('content')
<h1 class="text-center">Students <a class="btn btn-success" href="{{ route('students.create') }}">+</a></h1>
@if(count($students)>0)
  <table class="table">
    <thead>
      <tr>
        <th> Name </th>
        <th> Surname </th>
        <th> Birthday </th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach($students as $value)
        <tr>
          <td> {{$value->name}} </td>
          <td> {{$value->surname}} </td>
          <td> {{$value->birthday}} </td>
          <td> <a class="btn btn-primary" href="{{ route('students.edit', $value->id)}}">Modifica</a></td>
          <td> <form action="{{ action('StudentsController@destroy', $value->id)}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Elimina</button>
          </form> </td>
        </tr>
      @endforeach
    </tbody>
  </table>
@else
  <h3 class="text-center">Wow, such empty.</h3>
@endif
@endsection

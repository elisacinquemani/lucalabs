@extends('layouts.app')
@section('content')
<h1 class="text-center">Students</h1>
@if(count($students)>0)
  <table class="table">
    <thead>
      <tr>
        <th> Name </th>
        <th> Surname </th>
        <th> Birthday </th>
      </tr>
    </thead>
    <tbody>
      @foreach($students as $value)
        <tr>
          <td> {{$value->name}} </td>
          <td> {{$value->surname}} </td>
          <td> {{$value->birthday}} </td>
        </tr>
      @endforeach
    </tbody>
  </table>
@else
  <h3 class="text-center">Wow, such empty.</h3>
@endif
@endsection

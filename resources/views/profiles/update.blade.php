@extends('layouts.app')
@section('content')

  @if (count($users) > 0)
    <ul>
      @foreach ($users as $user)
        <li>{{$user->name}}</li>          
      @endforeach
    </ul>
  @else
      <p>No user</p>
  @endif
   
@endsection

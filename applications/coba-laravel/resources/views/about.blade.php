@extends('layouts.main')

@section('container')
    <h1> {{ $name }} </h1>
    <h3> {{ $email }} </h3>
    <p>{{ $email }}</p>
    <img src="img/{{ $image }}" alt=" {{ $name }}" width="200px" class="img-thumbnail rounded-circle">
@endsection

    
    
    

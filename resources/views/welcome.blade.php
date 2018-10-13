@extends('app.layout')

@section('title')
    Welcome
@endsection

@section('content')
    <h1>Welcome Page</h1>
    <p>Halaman welcome dari layout blade</p> 

   @foreach ($tasks as $t)
    <ul>
        <li>{{ $t }}</li>
    </ul>
       
   @endforeach
@endsection
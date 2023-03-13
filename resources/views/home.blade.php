@extends('layouts.layout')

@section('content')
    <h1>Movie List</h1>

    <ul>
        @foreach ($movies as $movie)
            <li>{{ $movie['title'] }}</li>
        @endforeach
    </ul>
@endsection
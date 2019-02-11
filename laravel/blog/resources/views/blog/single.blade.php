@extends('layouts.master')

@section('title', 'Code-q mas')


@section('content')
    <h1>Halo Assalamu'alaikum</h1>

    <h1>Halo single</h1>
    <h2> {{ $blog->title }}</h2>
    <hr>
    <p>
        {{$blog->description}}
    </p>

@endsection
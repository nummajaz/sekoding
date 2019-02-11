@extends('layouts.master')

@section('title', 'Code-q mas')


@section('content')
    <h1>Halo Assalamu'alaikum ini Halaman Edit</h1>

    <form action="/blog/{{$blog->id}}" method="POST">
        <input type="text" name="title" value="{{ $blog->title }}"> <br>
        <textarea name="description" cols="40" rows="8" >{{$blog->description}}</textarea><br>


        <input type="submit" name="_method" value="edit">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">
    </form>
@endsection
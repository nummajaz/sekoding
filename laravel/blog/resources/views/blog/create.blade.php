@extends('layouts.master')

@section('title', 'Code-q mas')


@section('content')
    <h1>Halo Assalamu'alaikum ini Halaman Create</h1>

    <form action="/blog" method="post">
        <input type="text" name="title" value="{{old('title') }}"> <br>
        @if ($errors->has('title'))
          <p>
              {{$errors->first('title')}}  
          </p>
        @endif

        <textarea name="description" cols="40" rows="8">{{old('description') }}</textarea><br>
        @if ($errors->has('description'))
          <p>
              {{$errors->first('description')}}  
          </p>
        @endif

        <input type="submit" name="submit" value="Create">
        {{ csrf_field() }}
    </form>
@endsection
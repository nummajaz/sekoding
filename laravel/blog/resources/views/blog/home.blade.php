@extends('layouts.master')

@section('title', 'Code-q mas')


@section('content')
    <h1>Halo Assalamu'alaikum</h1>

    @foreach ($blogs as $blog)
    <li> 
        <a href="/blog/{{$blog->id}}"> {{ $blog->title }} </a>
        <form action="/blog/{{$blog->id}}" method="POST">
            <input type="submit" name="submit" value="delete">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="DELETE">
        </form>
    </li>     
        
    @endforeach

    <div class="container">
        {{ $paginate }}
    </div>
@endsection
@extends('layouts.main')

@section('container') 
<h2>Halaman {{$title}}</h2>
@foreach ($blogs as $blog)
    <h4><a href="/posts/{{$blog['slug']}}">{{$blog["title"]}}</a> </h2>    
    <h5>{{$blog["author"]}} </h3>
    <p>
        {{$blog["isi"]}}
    </p>
@endforeach
@endsection
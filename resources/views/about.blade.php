@extends('layouts.main')

@section('container') 
<h2>Halaman {{$title}}</h2>
<p>
    <img src="img/{{$gambar}} " alt="" width="300"><br>
   <a href="link">Anime: {{$anime}}</a>  <br>
    Nama: {{$nama}} <br>
    umur: {{$umur}} <br>
    umur: {{$status}} <br>
    
</p>
@endsection
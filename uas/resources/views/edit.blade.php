@extends('nav')
@section('title', 'index')
    
@section('konten')
@foreach($story as $story)
    <form action="/foreign/update" method = "post">
        {{crsf_field()}}
        Judul <br> <input type=text, name="judul", required="required", value="{{$story->judul}}"><br>
        Link <br> <input type=text, name="link", required="required", value="{{$story->link}}"><br>
        <input type="submit" value="Simpan Data">
    </form>
@endforeach
@endsection
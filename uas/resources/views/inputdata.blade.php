@extends('nav')
@section('title', 'index')
    
@section('konten')
<form action="/foreign/store" method = "post">
    {{crsf_field()}}
    Juduk<br> <input type=text, name="judul", required="required", value="{{$story->judul}}"><br>
    Link <br> <input type=text, name="link", required="required", value="{{$story->link}}"><br>
    <input type="submit" value="Simpan Data">
</form>
@endsection
@extends('nav')
@section('title', 'foreign')
    
@section('konten')
<link rel="stylesheet" href="\css\kunang.css">

<div class="firefly"></div><div class="firefly"></div><div class="firefly"></div><div class="firefly"></div><div class="firefly"></div><div class="firefly"></div><div class="firefly"></div><div class="firefly"></div><div class="firefly"></div><div class="firefly"></div><div class="firefly"></div><div class="firefly"></div>

<style>
    h1{
        font-size: 30px;
    }

    .kiri{
        margin-left: 20px;
    }
</style>

<div class="container">
    <h2> title</h2>
	<div class="kolom kiri">
    <img src="\img\jamur.png" width="600"/>

        <div class="table-responsive">                
            <table id="mytable" class="table table-bordred table-striped">
                <thead>
                    <th>judul</th>
                    <th>link</th>
                </thead>
            <tbody>
                @foreach($story as $sy)
                <tr>
                <td>{{$sy->judul}}</td>
                <td>{{$sy->link}}</td>
                    <td>
                    <a href="/foreign/update{judul}" class="tbl-biru">Edit Your Story</a><p>
                        <a style="color:red;" href="/tambahcerita">Add Story</a>
                        <a href="/foreign/hapus/{judul}" class="tbl-biru">Delete Your Story</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection


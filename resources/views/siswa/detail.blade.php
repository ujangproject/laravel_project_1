<?php

use Illuminate\Support\Facades\Form;
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Crud Siswa</title>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-inverse">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{URL::to('siswa')}}">Sekolahku</a>
                </div>
                <ul class="nav navbar-nav">
                    <li>
                        <a href="{{URL::to('siswa')}}">Melihat Semua Siswa</a>
                    </li>
                    <li>
                        <a href="{{URL::to('siswa/create')}}">Membuat Siswa</a>
                    </li>
                    <li>
                        <a href="{{URL::to('guru')}}">Melihat Semua Guru</a>
                    </li>
                    <li>
                        <a href="{{URL::to('guru/create')}}">Membuat Guru</a>
                    </li>
                </ul>
            </nav>
            
            <h1>Menampilkan {{$siswa->nama}}</h1>

            <div class="jumbotron text-center">
                <h2>{{$siswa->nama}}</h2>
                <p>
                    <strong>Alamat: </strong>{{$siswa->alamat}}
                    <strong>No Hp. : </strong>{{$siswa->no_hp}}
                </p>
            </div>
        </div>
    </body>
</html>
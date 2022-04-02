@extends('layouts.main')
@section('container')
    <h1>Ini Halaman About</h1>
    <h1>{{ $name }}</h1>
    <h1>{{ $email }}</h1>
    <img src="img/<?=$image ?>"alt="<?= $name ?>" width="250" >
@endsection
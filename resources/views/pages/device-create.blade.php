
@extends('layouts.main-layout')

@section('content')


    <h1>
        CREA NUOVO DEVICE
    </h1>

    <form action="{{ route('device-store') }}" method="POST">
        @csrf
        @method('POST')

        <label for="name">Nome:</label>
        <input name="name" type="text">
        <br>

        <label for="model">Model:</label>
        <input name="model" type="text">
        <br>

        <label for="price">price:</label>
        <input name="price" type="text">
        <br>

        <label for="consumption">consumption:</label>
        <input name="consumption" type="text">
        <br>


        <input type="submit" value="SALVA">
    </form>
    

@endsection

@extends('layouts.main-layout')

@section('content')

  <div class="content">

    <h1>
      ID: {{ $device -> id }} <br>
      NAME: {{ $device -> name }} <br>
      MODEL: {{ $device -> model }} <br>
      PRICE: {{ $device -> price }} $ <br>
      CONSUMPTION: {{ $device -> consumption }} KW <br>

    </h1>

    
  </div>

@endsection
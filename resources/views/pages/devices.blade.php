@extends('layouts.main-layout')

@section('content')

  <div class="content">

    <h1>HOME</h1>

    <ul>
      @foreach ($devices as $device)
    
        <li>{{ $device -> name }}</li>
      @endforeach
    
    </ul>


  </div>

@endsection
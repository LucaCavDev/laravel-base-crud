@extends('layouts.main-layout')

@section('content')

  <div class="content">

    <h1>DEVICES:</h1>

    <a href="{{ route('device-create') }}">CREA NUOVO DEVICE</a>

    <ul>
      @foreach ($devices as $device)
    
        <li>
          <a href="{{ route('device-show', $device -> id ) }}">
            {{ $device -> name }}
          </a>
        </li>
      @endforeach
    
    </ul>

 
  </div>

@endsection
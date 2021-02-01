@extends('layouts.main-layout')

@section('content')

  <div class="content">

    <h1>HOME</h1>

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
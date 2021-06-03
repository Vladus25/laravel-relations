@extends('layouts.main-layout')
@section('content')

  {{-- Pilot <-N----M-> Car <-N----1-> Brand --}}
  <main>

    <ul>

      <li>
        <h2>Number</h2>
        @for ($i = 1; $i <= $cars -> count(); $i++)
          <div>
            {{ $i }}
          </div>
        @endfor
      </li>

      <li>
        <h2>Name</h2>
        @foreach ($cars as $car)
          <div>
            {{ $car -> name }}
          </div>
        @endforeach
      </li>

      <li>
        <h2>Model</h2>
        @foreach ($cars as $car)
          <div>
            {{ $car -> model }}
          </div>
        @endforeach
      </li>

      <li>
        <h2>KW</h2>
        @foreach ($cars as $car)
          <div>
            {{ $car -> kw }}
          </div>
        @endforeach
      </li>

      <li>
        <h2>Information</h2>
        @foreach ($cars as $car)
          <div>
            <a href="{{route('car', $car -> id)}}">
              <i class="fas fa-info-circle"></i>
            </a>
          </div>
        @endforeach
      </li>

    </ul>
    <a href="{{route('create')}}">New Car</a>
  </main>
@endsection

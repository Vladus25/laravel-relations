@extends('layouts.main-layout')
@section('content')
  <main>
    <div>
      <form method="POST" action="{{ route('update', $car -> id) }}">
        @csrf
        @method('POST')

        <h1 class="text-center">Update Car:</h1>
        <ul class="create-edit">

          <li>
            <h2>Name</h2>
            <div>
              <input type="text" name="name" placeholder="Name" value="{{ $car -> name }}" required>
            </div>
          </li>

          <li>
            <h2>Model</h2>
            <div>
              <input type="text" name="model" placeholder="Model" value="{{ $car -> model }}" required>
            </div>
          </li>

          <li>
            <h2>KW</h2>
            <div>
              <input type="number" name="kw" placeholder="KW" value="{{ $car -> kw }}" required>
            </div>
          </li>

          <li>
            <h2>Brand</h2>
            <div>
              <select id="brand_id" name="brand_id" required>
                <option selected disabled>Brand</option>
                @foreach ($brands as $brand)
                  <option value="{{ $brand -> id }}"> {{$brand -> name}} {{$brand -> nationality}}
                  </option>
                @endforeach
              </select>
            </div>
          </li>

          <li>
            <h2>Pilots</h2>
            <div>
              <select id="pilots_id[]" name="pilots_id[]" required multiple>
                @foreach ($pilots as $pilot)
                  <option value="{{ $pilot -> id }}">
                    {{$pilot -> name}}
                    {{$pilot -> lastname}}
                  </option>
                @endforeach
              </select>
            </div>
          </li>

        </ul>

        <div class="button-center">
          <button type="submit" class="home">Update Car</button>
          <a class="home" href="{{route('home')}}">List Cars</a>
        </div>

      </form>
    </div>
  </main>
@endsection

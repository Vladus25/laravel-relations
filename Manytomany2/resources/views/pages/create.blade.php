@extends('layouts.main-layout')
@section('content')
  <main>
    <div>
      <form method="POST" action="{{ route('store') }}">
        @csrf
        @method('POST')
        <h1>Create New Car:</h1>
        <ul>

          <li>
            <h2>Name</h2>
            <div>
              <input type="text" name="name" placeholder="Name" required>
            </div>
          </li>

          <li>
            <h2>Model</h2>
            <div>
              <input type="text" name="model" placeholder="Model" required>
            </div>
          </li>

          <li>
            <h2>KW</h2>
            <div>
              <input type="number" name="kw" placeholder="Kilometers" required>
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
                    {{$pilot -> firstname}}
                    {{$pilot -> lastname}}
                  </option>
                @endforeach
              </select>
            </div>
          </li>

        </ul>
        <button type="submit" class="home">Ad Car</button>
      </form>
    </div>
  </main>
@endsection

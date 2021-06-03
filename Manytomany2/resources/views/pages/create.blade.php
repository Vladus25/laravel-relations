@extends('layouts.main-layout')
@section('content')
  <main>
    <div>
      <form method="POST" action="{{ route('store') }}">
        @csrf
        @method('POST')
        <h1>Create New Car:</h1>
        <ul>
          <li><input type="text" name="name" placeholder="team1" required></li>
          <li><input type="text" name="model" placeholder="team2" required></li>
          <li><input type="number" name="kw" placeholder="point1" required></li>
        </ul>
        <button type="submit" class="home">Ad Car</button>
      </form>
    </div>
  </main>
@endsection

@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <h3>My Favorite Movies</h3>
      <ul>
        @foreach($movies as $row) 
          <li>{{$row['name']}}, released in {{$row['release_year'] }}({{$year - $row['release_year']}} years ago) </li>
        @endforeach
      </ul>
    </div>
  </div>
@endsection
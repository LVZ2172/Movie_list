@extends('layouts.app')

@section('content')

<div class="container">
  <h1>{{ $movies->Name }}</h1>
  <div class="container">
    <h3>{{ $movies->description }}</h3>
  </div>
</div>

@stop

@extends('layouts.app')

@section('content')

  <h1>{{ $movies->Name }}</h1>
  <h4>{{ $movies->description }}</h4>
    <hr>
  <h3>Reviews</h3>
      @foreach ($movies->reviews as $review)
        <h5>Author: {{ $review->author }}</h5>
        <p>Review: {{ $review->review }}</p>
        {!! Form::open([
            'method' => 'DELETE',
            'route' => ['movies.reviews.destroy', $movies->id, $review->id]
        ]) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
        <br>
      @endforeach
      <hr>

  <a href="{{ route('movies.reviews.create', $movies->id) }}" class="btn btn-primary">Add Review</a>
@stop

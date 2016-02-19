@extends('layouts.app')

@section('content')

@if(Session::has('flash_message'))
    <div class="alert alert-success">
        {{ Session::get('flash_message') }}
    </div>
@endif

  <div class="container">
    <h2>Movie List</h2>
    @foreach ($movies as $movie)
    <ul>
      <h3>- <a href="movies/{{ $movie->id }}">{{ $movie->Name }}</h3></a>

      <!-- <form action="{{ url('movies/'.$movie->id) }}" method="POST">
            {!! csrf_field() !!}
            {!! method_field('DELETE') !!}

            <button type="submit" class="btn btn-danger">
                <i class="fa fa-trash"></i> Delete
            </button>

        </form> -->

        <div class="col-md-6 text-right">
        {!! Form::open([
            'method' => 'DELETE',
            'route' => ['movies.destroy', $movie->id]
        ]) !!}
            {!! Form::submit('Delete this movie?', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
       </div>

        <a href="{{ route('movies.edit', $movie->id) }}" class="btn btn-primary">Edit Movie</a>
        <hr>


    </ul>
    @endforeach
  </div>

@stop

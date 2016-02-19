@extends('layouts.app')

@section('content')

@if(Session::has('flash_message'))
    <div class="alert alert-success">
        {{ Session::get('flash_message') }}
    </div>
@endif

    <h2>Movie List</h2>
    @foreach ($movies as $movie)
      <h3><a href="movies/{{ $movie->id }}">{{ $movie->Name }}</h3></a>

      <!-- <form action="{{ url('movies/'.$movie->id) }}" method="POST">
            {!! csrf_field() !!}
            {!! method_field('DELETE') !!}

            <button type="submit" class="btn btn-danger">
                <i class="fa fa-trash"></i> Delete
            </button>

        </form> -->

        <a href="{{ route('movies.edit', $movie->id) }}" class="btn btn-primary">Edit Movie</a>
        {!! Form::open([
            'method' => 'DELETE',
            'route' => ['movies.destroy', $movie->id]
        ]) !!}
            {!! Form::submit('Delete this movie?', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}

        <hr>
    @endforeach
@stop

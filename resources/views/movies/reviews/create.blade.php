@extends('layouts.app')

@section('content')



{!! Form::open(['route' => ['movies.reviews.store', $movie], 'class' => 'form']) !!}

<div class="form-group">
    {!! Form::label('author', 'Author:', ['class' => 'control-label']) !!}
    {!! Form::text('author', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('review', 'Review:', ['class' => 'control-label']) !!}
    {!! Form::textarea('review', null, ['class' => 'form-control']) !!}
</div>

{!! Form::submit('Create Review', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}


@stop

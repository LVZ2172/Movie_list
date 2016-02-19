@extends('layouts.app')

@section('content')



{!! Form::open(['route' => 'movies.store']) !!}

<div class="form-group">
    {!! Form::label('Name', 'Name:', ['class' => 'control-label']) !!}
    {!! Form::text('Name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

{!! Form::submit('Create New Movie', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}


@stop

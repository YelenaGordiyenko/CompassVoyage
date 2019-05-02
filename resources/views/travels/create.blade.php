@extends('layouts.app')

@section('cover')
<div class="parallax p-img7">
        <div class="row h-100">
            <div class="col-md-12 align-self-center">
            </div>
        </div>
    </div>
@endsection

@section('content')
    <h1>Travel Request Form</h1>
    {!! Form::open(['action' => 'TravelsController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name'])}}
        </div>
        <div class="form-group">
            {{Form::label('email', 'Email')}}
            {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Email'])}}
        </div>
        <div class="form-group">
            {{Form::label('origin', 'Origin')}}
            {{Form::text('origin', '', ['class' => 'form-control', 'placeholder' => 'Origin'])}}
        </div>
        <div class="form-group">
            {{Form::label('destination', 'Destination')}}
            {{Form::text('destination', '', ['class' => 'form-control', 'placeholder' => 'Destination'])}}
        </div>
        <div class="form-group">
            {{Form::label('depart_date', 'Depart')}}
            {{Form::date('depart_date', '', ['class' => 'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('return_date', 'Return')}}
            {{Form::date('return_date', '', ['class' => 'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('num_adults', 'Adults')}}
            {{Form::number('num_adults', '', ['class' => 'form-control', 'placeholder' => 'Number of adults'])}}
        </div>
        <div class="form-group">
            {{Form::label('num_children', 'Children')}}
            {{Form::number('num_children', '', ['class' => 'form-control', 'placeholder' => 'Number of Children'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Detailed Description')}}
            {{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Detailed Description'])}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
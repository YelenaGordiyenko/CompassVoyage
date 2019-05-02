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
    <a href="/travels" class="btn btn-outline-secondary">Go Back</a>
    <hr>
    <div class="card-header">Travel Request</div>
    <br>
    <h3>{{$travel->name}}</h3>
    <small>Requested on {{$travel->created_at}}</small>
        <div>
            <strong>Email:</strong>  {{$travel->email}}<br>
            <strong>Origin:</strong> {{$travel->origin}}<br>
            <strong>Destination:</strong> {{$travel->destination}}<br>
            <strong>Depart:</strong> {{$travel->depart_date}}<br>
            <strong>Return:</strong> {{$travel->return_date}}<br>
            <strong>Adults:</strong> {{$travel->num_adults}}<br>
            <strong>Children:</strong> {{$travel->num_children}}<br>
            <strong>Detailed Description:</strong> {{$travel->body}}<br>
        </div>
        <hr>

        <a href="/travels/{{$travel->id}}/edit" class="btn btn-outline-secondary">Edit</a>
        {!!Form::open(['action' => ['TravelsController@destroy', $travel->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}
@endsection
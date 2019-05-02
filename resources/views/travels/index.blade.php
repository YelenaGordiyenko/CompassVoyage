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
    <h1>Travel Requests</h1>
    @if(count($travels) > 0)
        @foreach($travels as $travel)
            <div class="well">
            <h3><a href="/travels/{{$travel->id}}">{{$travel->name}}</a></h3>
                <small>Requested on {{$travel->created_at}}</small>
            </div>
        @endforeach
        {{$travels->links()}}
    @else
        <p>No requests found.</p>
    @endif
@endsection
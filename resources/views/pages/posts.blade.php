@extends('layouts.app')

@section('content')
    <h1>{{$title}}</h1>
    @if(count($keys) >0)
        <ul class="list-group">
        @foreach ($keys as $value)
            <li class="list-group-item">{{$value}}</li>
        @endforeach
        </ul>
    @endif
@endsection

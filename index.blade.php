@extends('layouts.user')

@section('title')
    Site title
@endsection

@section('content')
    Yeah, that's content, you know
@endsection

@section('arr')
@if (count($obj->arr) === 1)
    {{$obj->arr}}
@elseif (count($obj->arr) > 1)
    @foreach($obj->arr as $key => $value)
        {{$key}} -> {{$value}} <br>
    @endforeach
@else
    Array is empty
@endif
@endsection

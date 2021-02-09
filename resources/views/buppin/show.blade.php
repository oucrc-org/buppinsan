@extends('layouts.app')

@section('content')
    <form action="{{route('buppin.destroy', ['buppin'=>$board->id])}}" method="POST">@csrf {{method_field("DELETE")}} <input type='submit'></form>
    <p>hey x</p>
    {{$board->id}}
    {{$board->name}}
    {{$board->tepra_number}}
    {{$board->belong}}
    {{$board->photo_path}}
    {{$board->detail}}
    {{$board->created_at}}
    {{$board->updated_at}}
@endsection

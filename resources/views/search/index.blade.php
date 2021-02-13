@extends('layouts.app')

@section('content')
    @forelse($boards as $board)
        <p>{{$board->name}}</p>
    @empty
    @endforelse
@endsection

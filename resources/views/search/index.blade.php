@extends('layouts.app')

@section('content')
    @forelse($boards as $board)
        <h1>{{$board->name}}</h1>
        @forelse($board->tags as $tag)
            <p>{{$tag->name}}</p>
        @empty
        @endforelse
    @empty
    @endforelse
@endsection

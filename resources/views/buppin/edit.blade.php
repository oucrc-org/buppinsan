@extends('layouts.app')

@section('content')
    @include('buppin.form', ['target' => 'edit', 'board' => $board])
@endsection

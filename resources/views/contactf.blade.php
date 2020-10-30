@extends('layout.master')


@section('content')

    @forelse($people as $person)
     My name is {{ $person  }} it's nice meeting you!
        <br>
     @empty
        No one in list
    @endforelse

    @endsection

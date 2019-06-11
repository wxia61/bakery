@extends('layout')


@section('title', 'home')

@section('content')
    <h1>Main</h1>
    @foreach($inventories as $inventory)
        <li>{{$inventory->name}}</li>
    @endforeach
@endsection
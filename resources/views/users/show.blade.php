@extends('layouts.app')

{{-- @section('title', 'Listing Users') --}}

@section('content')
    <h1>Show User</h1>
    <div>{{ $user->id }}</div>
    <div>{{ $user->name }}</div>
@endsection


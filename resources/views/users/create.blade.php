@extends('layouts.app')

{{-- @section('title', 'Listing Users') --}}

@section('content')
    <h1>Create User</h1>
    @include('users.form', ['user' => $user])

@endsection

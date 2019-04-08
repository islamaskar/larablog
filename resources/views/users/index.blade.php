@extends('layouts.app')

{{-- @section('title', 'Listing Users') --}}

@section('content')
    <h1>Listing users</h1>
    @foreach ($users as $user )
    <div>{{ $user->id }}</div>
    <div>{{ $user->name }}</div>
    <a class="btn btn-primary" href="{{ url('users/'.$user->id.'/edit') }}">Edit</a>
    <form action="{{ url('users/'.$user->id) }}" method="POST">
        {{ csrf_field() }}
        {{-- {{ method_field('DELETE') }} --}}
        @method('DELETE')

        <button type="submit" class="btn btn-danger">
            Delete
        </button>
    </form>

    @endforeach
@endsection

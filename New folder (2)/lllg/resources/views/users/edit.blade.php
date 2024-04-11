@extends('layout')

@section('title', 'Edit User')

@section('content')
<form action="{{ route('users.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT')

    <!-- User fields here, for example: -->
    <div>
        <label>Name</label>
        <input type="text" name="name" value="{{ $user->name }}" required>
    </div>

    <div>
        <label>Email</label>
        <input type="email" name="email" value="{{ $user->email }}" required>
    </div>

    <!-- ... other fields ... -->

    <button type="submit">Update User</button>
</form>
@endsection

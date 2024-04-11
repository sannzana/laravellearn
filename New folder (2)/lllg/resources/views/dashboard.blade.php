@extends('layout')

@section('title', 'Dashboard')

@section('content')
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Operations</th>
        <!-- Add more columns if needed -->
    </tr>
    </thead>
    <tbody>
    @foreach ($users as $user)
    <tr>
        <th scope="row">{{ $user->id }}</th>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>
        <td>
            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-primary">Update</a>
            <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this user?');">Delete</button>
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this user?');">Delete</button>
            </form>
        </td>


    </tr>
    @endforeach
    </tbody>
</table>
@endsection
s

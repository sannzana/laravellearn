@extends('layout')

<!-- folder e layout thakle @extend('folder.lauout') -->
@section('title','Login')
@section('content')



<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header bg-purple text-white text-center">
                    <h4>Register to Cinetickets</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login.post') }}" enctype="multipart/form-data">
                        @csrf {{-- CSRF token field --}}





                        {{-- Email --}}
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                        </div>




                        {{-- Password --}}
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>



                        {{-- Submit Button --}}
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

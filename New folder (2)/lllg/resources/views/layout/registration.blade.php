@extends('layout')

<!-- folder e layout thakle @extend('folder.lauout') -->
@section('title','Registration')
@section('content')



<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header bg-purple text-white text-center">
                    <h4>Register to Cinetickets</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('registration.post') }}" enctype="multipart/form-data">
                        @csrf {{-- CSRF token field --}}

                        {{-- Full Name --}}
                        <div class="mb-3">
                            <label for="full_name" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="full_name" name="name" value="{{ old('full_name') }}" required autofocus>
                        </div>



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
                        <button type="submit" class="btn btn-primary">REGISTER</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection





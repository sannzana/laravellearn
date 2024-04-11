@extends('base.backend.master')
@section('Manage-user.admin-user')
active
@endsection
@section('title')
Create Admin User
@endsection
@section('page-name')
Create Admin User
@endsection
@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a>
</li>
<li class="breadcrumb-item active" aria-current="page">All Admin User
</li>
@endsection
@section('content')
<div class="row">
    <div class="col-12 col-6">
        <form method="POST" action="{{ route('admin-users.store') }}">
            @csrf
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="form-group ">
                        <label class="form-label">Name</label> <span class="text-primary">*</span>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                            value="{{ old('name') }}" placeholder="Enter name" required autofocus>
                        @error('name')
                        <label id="name-error" class="error" for="name">{{ $message }}</label>
                        @enderror
                    </div>

                    <div class="form-group ">
                        <label class="form-label">Email</label> <span class="text-primary">*</span>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" placeholder="Email" required autofocus>
                        @error('email')
                        <label id="email-error" class="error" for="email">{{ $message }}</label>
                        @enderror
                    </div>

                    <div class="form-group ">
                        <label class="form-label">Mobile</label> <span class="text-primary">*</span>
                        <input type="tel" class="form-control @error('mobile') is-invalid @enderror" name="mobile"
                            value="{{ old('mobile') }}" placeholder="Enter Valid Mobile number" required>
                        @error('mobile')
                        <label id="mobile-error" class="error" for="mobile">{{ $message }}</label>
                        @enderror
                    </div>

                    <div class="form-group ">
                        <label class="form-label">Password</label> <span class="text-primary">*</span>
                        <input type="password" value="{{ old('password') }}"
                            class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password"
                            required>
                        @error('password')
                        <label id="password-error" class="error" for="name">{{ $message }}</label>
                        @enderror
                    </div>
                    <div class="form-group ">
                        <label class="form-label">Can Login</label> <span class="text-primary">*</span>
                        <select class="form-control select2" name="can_login" required>
                            <option value="select">Select login status</option>
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                            <option value="2">Banned</option>
                        </select>
                        @error('roles')
                        <label id="roles-error" class="error" for="email">{{ $message }}</label>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="box-footer">
                <a href="{{ route('admin-users.index') }}">
                    <button type="button" class="btn btn-danger">Cancel</button>
                </a>
                <button type="submit" class="btn btn-success">Save</button>
            </div>
        </form>                          
    </div>
</div>
@endsection
@extends('base.backend.master')
@section('Manage-user.customer')
active
@endsection
@section('title')
Edit Customer Information
@endsection
@section('page-name')
Edit Customer Information
@endsection
@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a>
</li>
<li class="breadcrumb-item active" aria-current="page">All Customer
</li>
@endsection
@section('content')
<div class="row">
    <div class="col-12 col-6">
        <form id="form_validation" method="POST" action="{{ route('customer.update', $user->id) }}">
            @csrf
            <div class="row">
                <div class="col-lg-6 col-12">
                    {{-- <input name="_method" type="hidden" value="PUT"> --}}
                    <div class="form-group">
                        <input type="hidden" name="id" value="{{ $user->id }}">
                        <label class="form-label">Name</label> <span class="text-primary">*</span>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                            value="{{ $user->name }}" placeholder="name" required autofocus>
                        @error('name')
                        <label id="name-error" class="error" for="name">{{ $message }}</label>
                        @enderror
                    </div>
        
                    <div class="form-group ">
                        <label class="form-label">Email</label> <span class="text-primary">*</span>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ $user->email }}" placeholder="Email Id" required autofocus>
                        @error('email')
                        <label id="email-error" class="error" for="email">{{ $message }}</label>
                        @enderror
                    </div>
        
                    <div class="form-group ">
                        <label class="form-label">Mobile</label> <span class="text-primary">*</span>
                        <input type="tel" class="form-control @error('mobile') is-invalid @enderror" name="mobile"
                            value="{{ $user->mobile }}" placeholder="Enter Valid Mobile number" required>
                        @error('mobile')
                        <label id="mobile-error" class="error" for="mobile">{{ $message }}</label>
                        @enderror
                    </div>
                    <div class="form-group ">
                        <label class="form-label">Can Login</label> <span class="text-primary">*</span>
                        <select class="form-control select2" name="can_login" required>
                            <option value="select">Select login status</option>
                            <option value="1" {{ $user->can_login == 1 ? 'selected' : '' }}>Yes</option>
                            <option value="0" {{ $user->can_login == 0 ? 'selected' : '' }}>no</option>
                            <option value="2" {{ $user->can_login == 2 ? 'selected' : '' }}>Banned</option>
                        </select>
                        @error('can_login')
                        <label id="roles-error" class="error" for="email">{{ $message }}</label>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="box-footer">
                <a href="{{ route('customer.index') }}">
                    <button type="button" class="btn btn-danger">Cancel</button>
                </a>
                <button type="submit" class="btn btn-warning">Update</button>
            </div>
        </form>                        
    </div>
</div>
@endsection
@extends('base.backend.master')
@section('Manage-user.admin-user')
active
@endsection
@section('title')
Update Credit Balance
@endsectionv
@section('page-name')
Update Credit Balance
@endsection
@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a>
</li>
<li class="breadcrumb-item active" aria-current="page">All Admin User</li>
@endsection
@section('content')
<form id="form_validation" method="POST" action="{{ route('admin-users.credit.update', $user->id) }}">
    @csrf
    <div class="row">
        <div class="col-lg-6 col-12">
            <div class="form-group ">
                <input type="hidden" value="{{ $user->id }}">
            </div>
            <div class="form-group ">
                <label class="form-label">Name</label>
                <input type="text" class="form-control @error('username') is-invalid @enderror" name="username"
                    value="{{ $user->name }}" placeholder="Username" disabled>
                @error('name')
                <label id="name-error" class="error" for="name">{{ $message }}</label>
                @enderror
            </div>
            <div class="form-group ">
                <label class="form-label">Wallet Balance</label>
                <input type="text" class="form-control @error('wallet_balance') is-invalid @enderror"
                    name="wallet_balance" value="{{ $user->wallet_balance ?? 0}}" placeholder="wallet balance" disabled>
                @error('agent-code')
                <label id="wallet_balance-error" class="error" for="wallet_balance">{{ $message }}</label>
                @enderror
            </div>
            <div class="form-group">
                <input type="hidden" value="{{ $userID }}">
                <input type="hidden" value="{{ Auth::User()->wallet_balance }}">
            </div>
            <div class="form-group ">
                <label class="form-label">Credit Amount</label>
                <input type="number" class="form-control @error('credit_amount') is-invalid @enderror"
                    name="credit_amount" value="" placeholder="Credit Amount" min="1" step="any" required>
                @error('credit_amount')
                <label id="credit_amount-error" class="error" for="credit_amount">{{ $message }}</label>
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
@endsection
@section('script')

@endsection
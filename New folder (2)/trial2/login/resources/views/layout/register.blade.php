@section('styles')
<style>
    .floating-alert {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 1050; /* Ensure it floats above most elements */
        width: 50%; /* Or any other width */
    }


    .cl{color: #0000FF;}

    .cl2{color:	#00bfff}


    .bg-purple {
    background-color: #6f42c1; /* This is a Bootstrap purple, but you can use any color you like */
    color: #fff;}
</style>
@endsection

@extends('layout')

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
                    <!-- Floating Error Message Block -->
                    @if ($errors->any())
                        <div class="alert alert-danger floating-alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf {{-- CSRF token field --}}

                        {{-- Full Name --}}
                        <div class="mb-3">
                            <label for="full_name" class="form-label cl">Full Name<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="full_name" name="full_name" value="{{ old('full_name') }}" required autofocus>
                        </div>

                        {{-- Mobile Number --}}
                        <div class="mb-3">
                            <label for="mobile_number" class="form-label cl">Mobile Number<span class="text-danger">*</span></label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1">+88</span>
                                <input type="text" class="form-control" id="mobile_number" name="mobile_number" value="{{ old('mobile_number') }}" required>
                            </div>
                        </div>

                        {{-- Email --}}
                        <div class="mb-3">
                            <label for="email" class="form-label cl">Email<span class="text-danger">*</span></label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                        </div>

                        {{-- Gender --}}
                        <div class="mb-3">
                            <label for="gender" class="form-label cl">Gender<span class="text-danger">*</span></label>
                            <select class="form-select" id="gender" name="gender" required>
                                <option selected>Choose...</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        {{-- Select Image --}}
                        <div class="mb-3">
                            <label for="image" class="form-label">Select Image</label>
                            <input type="file" class="form-control" id="image" name="image">
                        </div>

                        {{-- Password --}}
<div class="mb-3">
    <label for="password" class="form-label cl">Password<span class="text-danger">*</span></label>
    <input type="password" class="form-control" id="password" name="password" required>
    <input type="checkbox" onclick="togglePassword()"> Show Password
</div>

{{-- Confirm Password --}}
<div class="mb-3">
    <label for="password_confirmation" class="form-label cl">Confirm Password<span class="text-danger">*</span></label>
    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
</div>


                        {{-- Submit Button --}}
                        <button type="submit" class="btn btn-primary">REGISTER</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Include this script at the end of your body or after including jQuery -->




@endsection












@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    // Play a sound when the alert is shown
    var audio = new Audio('path_to_your_sound_file.mp3'); // Replace with the path to your sound file
    audio.play();

    // Wait for 5 seconds, then fade out the alert
    setTimeout(function () {
        var alert = document.querySelector('.floating-alert');
        if (alert) {
            alert.style.transition = 'opacity 0.5s';
            alert.style.opacity = 0;
            setTimeout(function() {
                alert.remove();
            }, 500); // Wait for the transition to finish
        }
    }, 2000); // 2 seconds
});




function togglePassword() {
    var password = document.getElementById("password");
    var passwordConfirmation = document.getElementById("password_confirmation");
    if (password.type === "password") {
        password.type = "text";
        passwordConfirmation.type = "text";
    } else {
        password.type = "password";
        passwordConfirmation.type = "password";
    }
}
</script>
@endsection








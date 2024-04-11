@extends('layout')

@section('title','LOGIN')

@section('styles')
<style>









.btn-violet {
        background-color: #6f42c1;
        color: #ffffff;
        border: none;
        transition: box-shadow 0.3s ease-in-out, background-color 0.3s ease;
    }

    .btn-violet:hover {
        background-color: #5a3495;
        box-shadow: 0 4px 15px rgba(111, 66, 193, 0.5); /* Adjust color and size as needed */
    }






    .floating-alert {
        position: fixed;
        top: 20px;
        right: 20px;
        z-index: 1050;
        width: auto;
    }

    .separator {
        display: flex;
        align-items: center;
        text-align: center;
        margin: 20px 0;
    }

    .separator::before,
    .separator::after {
        content: '';
        flex: 1;
        border-bottom: 1px solid #e9ecef;
    }

    .separator:not(:empty)::before {
        margin-right: .25em;
    }

    .separator:not(:empty)::after {
        margin-left: .25em;
    }

    .separator-box {
        padding: 5px 10px;
        background: #fff;
        border: 1px solid #e9ecef;
    }

    .cl {
        color: #6f42c1;
    }

    .bg-purple {
        background-color: #6f42c1;
        color: #fff;
    }

    .btn-purple {
        background-color: #6f42c1;
        border: none;
    }

    .btn-purple:hover {
        background-color: #5a3495;
    }

    .card-custom {
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(102, 51, 153, .1);
    }

    .link-primary {
        color: #6f42c1;
    }

    .link-primary:hover {
        color: #5a3495;
    }
</style>
@endsection

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card card-custom">
                <div class="card-header bg-purple text-white text-center">
                    <h4>Access Cinetickets</h4>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger floating-alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label cl">Email/Mobile<span class="text-danger">*</span></label>
                            <input id="email" class="form-control" type="email" name="email" required autofocus>
                        </div>
                        <div class="mb-4">
                            <label for="password" class="form-label cl">Password<span class="text-danger">*</span></label>
                            <input id="password" class="form-control" type="password" name="password" required>
                            <input type="checkbox" onclick="togglePassword()"> Show Password
                        </div>
                        <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-violet">Login</button>

                    <div class="separator">
                        <div class="separator-box">OR</div>
                    </div>
                    
                </div>
                <div class="extra-action">
                    <span>Don't have an account? <a href="{{ route('register') }}" class="register-link">Register Now</a></span>
                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
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











































<!-- @section('footer')
@include('layout.footer') 
@endsection -->





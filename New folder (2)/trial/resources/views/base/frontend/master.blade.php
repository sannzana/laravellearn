<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- include css link here --}}
    @include('base.frontend.include.css')
    <title>Boleto  - Online Ticket Booking Website HTML Template</title>
</head>

<body>
    <!-- ==========Preloader========== -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ==========Preloader========== -->
    <!-- ==========Overlay========== -->
    <div class="overlay"></div>
    <a href="#0" class="scrollToTop">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- ==========Overlay========== -->

    @include('base.frontend.partials.header')

    @yield('content')
    
    @include('base.frontend.partials.footer')
    
    <!-- include js link here-->
    @include('base.frontend.include.js')

    
</body>
</html>
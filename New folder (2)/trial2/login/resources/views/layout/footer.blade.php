<!-- resources/views/include/footer.blade.php -->

<footer class="bg-dark text-white mt-4">
    <div class="container-fluid py-3">
        <!-- Add 'justify-content-center' to center the columns and 'g-4' for spacing between columns -->
        <div class="row justify-content-center g-4">
            <!-- Add 'ms-auto' and 'me-auto' classes to give equal margins on both sides -->
            <div class="col-md-6 ms-auto me-auto">
                <h5>ABOUT US</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ url('/history') }}" class="text-white">History</a></li>
                    <li><a href="{{ url('/vision') }}" class="text-white">Our Vision</a></li>
                </ul>
            </div>
            <div class="col-md-6">
                <h5>NEED HELP?</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ url('/faq') }}" class="text-white">FAQ</a></li>
                    <li><a href="{{ url('/contact') }}" class="text-white">Contact Us</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center py-3">
                <h5>CONNECT WITH US</h5>
                <!-- Social media links -->
            </div>
        </div>
    </div>
    <div class="text-center small py-3">© {{ date('Y') }} The Name of Your Company. All rights reserved.</div>
</footer>

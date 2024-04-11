<style>
    /* Ensure the custom styles are scoped only for the footer */
    footer.footer-background {
        background-color: rgba(0, 0, 128, 0.7); /* Adjusted opacity for more transparency */
    }

    footer.footer-background a.text-white {
        transition: all 0.3s ease; /* Smooth transition for hover effect */
        text-decoration: none; /* Removes the underline text by default */
    }

    /* Define the hover effect for links within the footer */
    footer.footer-background a.text-white:hover {
        box-shadow: 0 0 10px #ffd700; /* Increased size for better visibility */
    }
</style>


<!-- resources/views/include/footer.blade.php -->

<footer class="footer-background text-white mt-4">
    <div class="container py-4">
        <!-- Footer content row -->
        <div class="row text-center text-md-start">
            <!-- About Us column -->
            <div class="col-md-4 mb-3">
                <h5>ABOUT US</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ url('/history') }}" class="text-white footer-link">History</a></li>
                    <li><a href="{{ url('/vision') }}" class="text-white">Our Vision</a></li>
                </ul>
            </div>
            <!-- Need Help column -->
            <div class="col-md-4 mb-3">
                <h5>NEED HELP?</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ url('/faq') }}" class="text-white">FAQ</a></li>
                    <li><a href="{{ url('/contact') }}" class="text-white">Contact Us</a></li>
                    <li><a href="{{ url('/contact') }}" class="text-white">Email</a></li>
                </ul>
            </div>
            <!-- Connect With Us column -->
            <div class="col-md-4 mb-3">
                <h5>CONNECT WITH US</h5>
                <a href="https://facebook.com" class="text-white me-2"><i class="bi-facebook"></i></a>
                <a href="https://twitter.com" class="text-white me-2"><i class="bi-twitter"></i></a>
                <a href="https://instagram.com" class="text-white"><i class="bi-instagram"></i></a>
                <!-- Add other social links as needed -->
            </div>
        </div>
        <!-- Copyright row -->
        <div class="row">
            <div class="col-12 text-center small my-3">© {{ date('Y') }} The Name of Your Company. All rights reserved.</div>
        </div>
    </div>
</footer>

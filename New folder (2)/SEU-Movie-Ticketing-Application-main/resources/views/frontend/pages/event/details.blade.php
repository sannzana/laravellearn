@extends('base.frontend.master')

@section('content')

<!-- ==========Event-Banner-Section========== -->
<section class="event-banner-section bg_img" data-background="{{ asset('frontend/assets/images/banner/banner06.jpg') }}">
    <div class="container">
        <div class="event-banner">
            <a href="https://www.youtube.com/embed/GT6-H4BRyqQ" class="video-popup">
                <span></span>
                <i class="flaticon-play-button"></i>
            </a>
        </div>
    </div>
</section>
<!-- ==========Event-Banner-Section========== -->

<!-- ==========Event-Book-Search========== -->
<section class="event-book-search padding-top pt-lg-0">
    <div class="container">
        <div class="event-search bg_img" data-background="{{ asset('frontend/assets/images/ticket/ticket-bg01.jpg') }}">
            <div class="event-search-top">
                <div class="left">
                    <h3 class="title">Digital Marketing Conference -2020</h3>
                </div>
                <div class="right">
                    <ul class="countdown">
                        <li>
                            <h2><span class="days">00</span></h2>
                            <p class="days_text">days</p>
                        </li>
                        <li>
                            <h2><span class="hours">00</span></h2>
                            <p class="hours_text">hrs</p>
                        </li>
                        <li>
                            <h2><span class="minutes">00</span></h2>
                            <p class="minu_text">min</p>
                        </li>
                        <li>
                            <h2><span class="seconds">00</span></h2>
                            <p class="seco_text">sec</p>
                        </li>
                    </ul>
                    <a href="#0" class="custom-button">book tickets</a>
                </div>
            </div>
            <div class="event-search-bottom">
                <div class="contact-side">
                    <div class="item">
                        <div class="item-thumb">
                            <img src="{{ asset('frontend/assets/images/event/icon/event-icon01.png') }}" alt="event">
                        </div>
                        <div class="item-content">
                            <span class="up">3 Days (Friday-Sunday)</span>
                            <span>70+ Workshops</span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-thumb">
                            <img src="{{ asset('frontend/assets/images/event/icon/event-icon02.png') }}" alt="event">
                        </div>
                        <div class="item-content">
                            <span class="up">17 South Sherman Street</span>
                            <span>Astoria, NY 11106</span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-thumb">
                            <img src="{{ asset('frontend/assets/images/event/icon/event-icon03.png') }}" alt="event">
                        </div>
                        <div class="item-content">
                            <span class="up">Drop us a line:</span>
                            <a href="MailTo:hello@Boleto .com"><span class="__cf_email__" data-cfemail="b3dbd6dfdfdcf3f1dcdfd6c7dc">[email&#160;protected]</span> .com</a>
                        </div>
                    </div>
                </div>
                <ul class="social-icons">
                    <li>
                        <a href="#0">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#0" class="">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#0" class="active">
                            <i class="fab fa-pinterest-p"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#0" class="">
                            <i class="fab fa-google"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#0">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>    
<!-- ==========Event-Book-Search========== -->

<!-- ==========Event-About========== -->
<section class="event-about padding-top padding-bottom">
    <div class="container">
        <div class="row justify-content-between flex-wrap-reverse">
            <div class="col-lg-7 col-xl-6">
                <div class="event-about-content">
                    <div class="section-header-3 left-style m-0">
                        <span class="cate">are you ready to attend?</span>
                        <h2 class="title">Digital Marketing Conference - <span>2020</span></h2>
                        <p>Morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, tristique senectus et netus et malesuada fames ac turpis egestas ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.Aenean ultricies mi vitae est. Mauris Eonec eu ribero sit amet quam egestas semper. Aenean are ultricies mi senectus et netus et malesuada fames ac turpis egestas.
                        </p>
                        <a href="#0" class="custom-button">book tickets</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-7">
                <div class="event-about-thumb">
                    <img src="{{ asset('frontend/assets/images/event/event-about.jpg') }}" alt="event">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==========Event-About========== -->

@endsection

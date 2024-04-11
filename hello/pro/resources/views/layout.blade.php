<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title','Custom Auth Laravel')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
      <link href=" https://assets-global.website-files.com/611ec50fa0a8e74bad5a61ff/css/onemoreproductions.webflow.50668d100.min.css" rel="stylesheet">

      <link rel="stylesheet" href="css/bootstrap.min.css" />
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />


    <link href="{{ asset('css/your-stylesheet.css') }}" rel="stylesheet">


    @yield('styles')
  </head>
  <body>


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

<!---->
<!---->
<!---->
<!--  <header class="header">-->
<!--      <a href="#" class="logo">logo</a>-->
<!---->
<!--      <nav class="navbar">-->
<!--          <a href="#">home</a>-->
<!--          <a href="#">homeww</a>-->
<!--          <a href="#">ddhome</a>-->
<!--          <a href="#">hdfdome</a>-->
<!--          <a href="#">hffome</a>-->
<!---->
<!---->
<!---->
<!--      </nav>-->
<!--  </header>-->


@yield('content')



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/select2.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/slick-animation.min.js"></script>
  <script src="document.querySelector("#mission")"></script>


@yield('scripts')

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












  <style>
      @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

      *{
          font-family: 'Roboto', sans-serif;
          margin:0;
          padding:0;
          box-sizing: border-box;

      }
      /*body{*/
      /*    min-height: 100vh;*/
      /*    background: url("/image/3800.jpg") no-repeat;*/
      /*    background-size:cover ;*/
      /*    background-position: center;*/

      /*}*/
      .header{
          position:fixed;
          top:0;
          left:0;
          width: :100%;
          padding: 1.3rem 10%;
          background: #1c7430;
          display:flex:
          justify-content:space-between;
          z-index: 100;
      }
      header#main-header{
          position: fixed;
          left: 0;
          right: 0;
          text-align: center;
          z-index: 99;
          background: rgba(20, 20, 20, 0.5) !important;
          backdrop-filter: blur(10px);
      }
      header .navbar-light .navbar-brand img.logo{
          width: 160px;
      }
      header .navbar .menu-header-menu-container, header .navbar .menu-main-menu-container{
          display: inline-block;
          width: 100%;
      }
      a{
          color: #d1d0cf;
          text-decoration: none;
          outline: medium none;
          transition: all 0.5s ease-out 0s;
      }
      header .navbar ul.navbar-nav{
          display: block;
          text-align: center;
      }
      header .navbar ul li{
          list-style: none;
          margin-right: 18px;
          position: relative;
          transition: all 0.3s ease-in-out;
          display: inline-block;
      }
      header .navbar ul li.menu-item a{
          font-size: 16px;
          font-weight: 400;
          position: relative;
          padding: 0 0 0 10px;
          line-height: 70px;
          z-index: 9;
          text-decoration: none;
          transition: all 0.3s ease-in-out;
          text-transform: uppercase;
      }
      header .navbar ul li.menu-item a:hover{
          color: #e50914 !important;
      }
      .navbar ul li:hover > .sub-menu{
          display: block !important;
          animation: fade-in 0.5s cubic-bezier(0.39,0.575,0.565,1) both;
      }
      .navbar ul li:hover .sub-menu{
          display: block;
          padding: 15px 0;
          background: #141414;
          position: absolute;
          top: 100%;
          left: 0;
          padding-left: 0;
          display: inline-block;
          min-width: 256px;
          box-shadow: 0 1px 30px 0 rgb(36 38 43 / 10%);
      }
      .navbar ul li .sub-menu li>.sub-menu{
          display: none;
      }
      .navbar .navbar-nav li:last-child .sub-menu li:hover>.sub-menu, .navbar .navbar-nav li:nth-last-child(2) .sub-menu li:hover > .sub-menu{
          left: auto;
          right: 100%;
          top: -15px;
      }
      .navbar ul li:last-child{
          margin-right: 0;
      }
      .navbar ul.navbar-nav>li.menu-item:hover > a, .navbar ul.navbar-nav > li.menu-item:hover>i{
          color: #e50914;
      }

      .navbar ul.navbar-nav>li.menu-item>a{
          text-transform: uppercase;
      }
      .navbar ul.navbar-nav>li:hover > a{
          font-weight: 600;
      }

      .navbar ul li.menu-item a{
          font-size: 16px;
          font-weight: 400;
          position: relative;
          padding: 0 0 0 10px;
          line-height: 70px;
          z-index: 9;
          text-decoration: none;
          transition: all 0.3s ease-in-out;
          text-transform: capitalize;
      }
      .navbar ul li .sub-menu{
          display: none;
      }
      .navbar ul li .sub-menu li{
          margin-right: 0;
          padding: 0 15px;
      }
      .navbar ul.sub-menu li{
          display: block;
          text-align: left;
      }
      .navbar ul li{
          list-style: none;
          margin-right: 18px;
          position: relative;
          transition: all 0.3s ease-in-out;
          display: inline-block;
      }

      .menu-sticky .navbar ul li .sub-menu > li a{
          line-height: 1em;
      }

      .navbar ul li .sub-menu li > a{
          font-size: 14px;
          border-radius: 0;
          display: inline-block;
          width: 100%;
          line-height: 1em;
          padding: 15px;
          color: #d1d0cf;
          position: relative;
          overflow: hidden;
      }

      .navbar ul li.menu-item a{
          font-size: 16px;
          font-weight: 400;
          position: relative;
          padding: 0 0 0 10px;
          line-height: 70px;
          position: relative;
          z-index: 9;
          text-decoration: none;
          transition: all 0.3s ease-in-out;
          text-transform: capitalize;
      }
      .navbar ul li .sub-menu li>a::before{
          position: absolute;
          content: "";
          background: #e50914;
          top: 0;
          bottom: 0;
          left: 0;
          right: 0;
          width: 4px;
          opacity: 0;
          transform: translate3d(-100%,0,0);
          transition: all 0.5s ease-in-out;
      }

      header .navbar ul li .sub-menu li.current-menu-parent>a::after,
      header .navbar ul li .sub-menu li .sub-menu li.menu-item.current-menu-item>a::after,
      header .navbar ul li .sub-menu li .sub-menu li.menu-item:hover>a::after{
          opacity: 1;
          transform: translate3d(0,0,0);
          transition: all 0.5s ease-in-out;
      }

      header .navbar ul li .sub-menu li:hover>a::after{
          opacity: 1;
          transform: translate3d(0,0,0);
          transition: all 0.5s ease-in-out;
      }
      .navbar ul li .sub-menu li >a::after{
          position: absolute;
          content: "";
          background: linear-gradient(270deg, rgba(11,1,2,0) 0% , rgba(255,55,65,0.3) 100%);
          top: 0;
          bottom: 0;
          left: 0;
          right: 0;
          transform: translate3d(-100%,0,0);
          transition: all 0.5s ease-in-out;
          z-index: -1;
          opacity: 0;
      }

      header .navbar ul li .sub-menu li:hover>a::before{
          opacity: 1;
          transform: translate3d(0,0,0);
          transition: all .5s ease-in-out;
      }
      .nav-open .nav-overlay{
          visibility: visible;
          transition: 0.3s;
      }

      .nav-overlay{
          left: 0;
          right: 0;
          top: 0;
          bottom: 0;
          opacity: 0;
          z-index: 900;
          display: block;
          width: 100%;
          position: fixed;
          visibility: hidden;
          background: rgba(0, 0, 0, 0.6);
          transition: 0.3s;
      }
      .more-toggle{
          color: #fff !important;
          font-size: 22px;
      }

      .dropdown-toggle.more-toggle::after{
          content: none;
      }
      .mobile-more-menu{
          display: none;
      }
      .more-menu{
          position: absolute;
          top: 50px;
          left: auto;
          right: 0;
          min-width: 18rem;
          padding: 0.35rem 0.5rem;
          margin: 0;
          opacity: 0;
          transform: translate(0,70px);
          transition: all 0.3s ease-out 0s;
          background: #191919;
          box-shadow: 0px 3px 10px rgba(0, 0, 0, 0.75);
          visibility: hidden;
          z-index: 999;
      }
      .more-menu.show{
          opacity: 1;
          transform: translate(0,0);
          visibility: visible;
      }

      header .navbar ul li:last-child{
          margin-right: 0;
      }

      .nav-item span.dots{
          height: 10px;
          width: 10px;
          font-size: 0;
          text-align: center;
          padding: 0;
          position: absolute;
          top: 3px;
          right: 12px;
          border-radius: 50%;
      }
      .menu-right .nav-items span.dots{
          right: 0;
      }

      .navbar-right li .iq-sub-dropdown .iq-sub-card{
          position: relative;
          font-size: inherit;
          padding: 15px 15px;
          line-height: normal;
          color: inherit;
          text-align: left;
          display: inline-block;
          width: 100%;
          border: 1px solid;
          border-image-slice: 1;
          border-width: 0 0 1px 0;
          border-image-source: linear-gradient(to right, rgba(209,208,207,0.6), rgba(209,208,207,0.3), rgba(209,208,207,0));
      }
      .iq-sub-card.setting-dropdown{
          padding: 15px 15px 15px 0 !important;

      }

      .navbar-right li .iq-sub-dropdown a.iq-sub-card:last-child{
          border-bottom: 0;
      }
  </style>













  </body>
</html>





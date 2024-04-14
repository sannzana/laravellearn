<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">






</head>
<body>


<div class="ImageVideoCarousel_carouselCon__jaPvM">
    <div class="ImageVideoCarousel_overlayBorder__yN6tN">
        <div class="ImageVideoCarousel_carouselWrap___L6yE">
            <div class="ImageVideoCarousel_sfWrap__SFWnc">
                <div>
                    <img src="https://assetscdn1.paytm.com/images/catalog/view_item/2572723/1710834731786.jpg?format=webp&amp;imwidth=500" decoding="sync" loading="eager" class="bgImg" width="500" height="100%" alt="">
                </div>
            </div>
            <div class="ImageVideoCarousel_sfWrap__SFWnc">
                <div>
                    <img decoding="async" class="bgImg" width="500" height="100%" fetchpriority="auto" alt="" src="https://assetscdn1.paytm.com/images/catalog/view_item/2586826/1711174722268.jpg?format=webp&amp;imwidth=500">
                </div>
            </div>
            <div class="ImageVideoCarousel_sfWrap__SFWnc">
                <div>
                    <img decoding="async" class="bgImg" width="500" height="100%" fetchpriority="auto" alt="" src="https://assetscdn1.paytm.com/images/catalog/view_item/2592470/1711698402246.jpg?format=webp&amp;imwidth=500">
                </div>
            </div>
            <div class="ImageVideoCarousel_sfWrap__SFWnc">
                <div>
                    <img decoding="async" class="bgImg" width="500" height="100%" fetchpriority="auto" alt="" src="https://assetscdn1.paytm.com/images/catalog/view_item/2573052/1710850133656.jpg?format=webp&amp;imwidth=500">
                </div>
            </div>
        </div>
        <div class="ImageVideoCarousel_dotsWrap__7ld_K">
            <div class="ImageVideoCarousel_dot__rFKhv">

            </div>
            <div class="ImageVideoCarousel_dot__rFKhv">

            </div>
            <div class="ImageVideoCarousel_dot__rFKhv">

            </div>
            <div class="ImageVideoCarousel_dot__rFKhv ImageVideoCarousel_active__nu46Q">

            </div>
        </div>
        <div class="">

        </div>
    </div>
</div>











<style>


    /* The container that holds the carousel */
    .ImageVideoCarousel_carouselCon__jaPvM {
        overflow: hidden;
        position: relative;
        margin: 0 auto; /* Center the carousel */
        padding: 0 5%; /* Padding to ensure the side images are partially visible */
    }

    /* The wrapper for each individual item */
    .ImageVideoCarousel_carouselWrap___L6yE {
        display: flex;
        overflow-x: scroll;
        scroll-snap-type: x mandatory; /* Enable snapping */
        -ms-scroll-snap-type: x mandatory;
        -webkit-overflow-scrolling: touch; /* Smooth scrolling on iOS devices */
        gap: 20px; /* Gap between items */
        padding: 20px 0; /* Padding top and bottom */
    }

    /* Hide the scrollbar */
    .ImageVideoCarousel_carouselWrap___L6yE::-webkit-scrollbar {
        display: none;
    }

    /* The individual carousel item */
    .ImageVideoCarousel_sfWrap__SFWnc {
        flex: 0 0 auto; /* Use 'auto' for the flex-basis to handle variable widths */
        scroll-snap-align: center; /* Ensure the item snaps in the center */
        transition: transform 0.5s ease; /* Smooth transition for scaling */
        width: 80%; /* Adjust the width to fit the carousel container */
        margin-right: 10px; /* Right margin between items */
        margin-left: 10px; /* Left margin between items */
        position: relative; /* Needed for absolute positioning of pseudo-elements */
    }

    /* Styling for the images */
    .ImageVideoCarousel_sfWrap__SFWnc img {
        width: 100%; /* Full width of the parent container */
        height: auto; /* Maintain aspect ratio */
        object-fit: cover; /* Cover the area, may crop if necessary */
        border-radius: 10px; /* Slight border radius on all corners */
        box-shadow: 0 4px 6px rgba(0,0,0,0.1); /* Soft shadow for depth */
    }

    /* Pseudo-elements for gradient overlays */
    .ImageVideoCarousel_carouselCon__jaPvM::before,
    .ImageVideoCarousel_carouselCon__jaPvM::after {
        content: '';
        position: absolute;
        top: 0;
        height: 100%;
        pointer-events: none;
        z-index: 2;
        width: 50px; /* Fixed width for gradient overlays */
    }

    .ImageVideoCarousel_carouselCon__jaPvM::before {
        left: 0;
        background: linear-gradient(to right, rgba(0,0,0,0.5), transparent);
    }

    .ImageVideoCarousel_carouselCon__jaPvM::after {
        right: 0;
        background: linear-gradient(to left, rgba(0,0,0,0.5), transparent);
    }

    /* Media queries for responsive adjustments */
    @media (max-width: 1024px) {
        .ImageVideoCarousel_sfWrap__SFWnc {
            width: 85%; /* Adjust item width for better visibility on tablets */
        }
    }

    @media (max-width: 768px) {
        .ImageVideoCarousel_sfWrap__SFWnc {
            width: 90%; /* Adjust item width for better visibility on smaller tablets */
        }
    }

    @media (max-width: 480px) {
        .ImageVideoCarousel_sfWrap__SFWnc {
            width: 95%; /* Adjust item width for better visibility on mobile */
        }
    }


</style>







    <script>

        document.addEventListener('DOMContentLoaded', (event) => {
            const carouselWrap = document.querySelector('.ImageVideoCarousel_carouselWrap___L6yE');
            const slides = document.querySelectorAll('.ImageVideoCarousel_sfWrap__SFWnc');
            const images = document.querySelectorAll('.ImageVideoCarousel_sfWrap__SFWnc img'); // Select all images
            const totalSlides = slides.length;
            let autoSlideTimer; // Timer for auto-sliding

            // Clone first and last slides
            const firstSlideClone = slides[0].cloneNode(true);
            const lastSlideClone = slides[totalSlides - 1].cloneNode(true);
            carouselWrap.appendChild(firstSlideClone);
            carouselWrap.insertBefore(lastSlideClone, slides[0]);

            let index = 1; // Start from the first original slide (not a clone)

            function goToSlide(slideIndex) {
                const slideWidth = slides[0].getBoundingClientRect().width;
                carouselWrap.scrollLeft = slideWidth * slideIndex;
                index = slideIndex;

                if (index === totalSlides + 1) {
                    index = 1;
                    carouselWrap.scrollTo({left: slideWidth, behavior: 'instant'});
                } else if (index === 0) {
                    index = totalSlides;
                    carouselWrap.scrollTo({left: slideWidth * totalSlides, behavior: 'instant'});
                }

                updateDots();
            }

            function updateDots() {
                const dots = document.querySelectorAll('.ImageVideoCarousel_dot__rFKhv');
                dots.forEach(dot => dot.classList.remove('ImageVideoCarousel_active__nu46Q'));
                dots[(index - 1) % totalSlides].classList.add('ImageVideoCarousel_active__nu46Q');
            }

            function initializeAutoSlide() {
                clearInterval(autoSlideTimer);
                autoSlideTimer = setInterval(() => {
                    if (index >= totalSlides) {
                        index = 0; // Reset index to start
                    }
                    index++;
                    goToSlide(index);
                }, 3000); // Change slide every 3 seconds
            }

            function stopAutoSlide() {
                clearInterval(autoSlideTimer);
            }

            function onUserInteraction() {
                stopAutoSlide();
                setTimeout(() => { // Resume auto sliding after 8 seconds of inactivity
                    initializeAutoSlide();
                }, 8000);
            }

            // Event listeners for each image to stop and start the slideshow on hover
            images.forEach(image => {
                image.addEventListener('mouseenter', stopAutoSlide);
                image.addEventListener('mouseleave', initializeAutoSlide);
            });

            carouselWrap.addEventListener('scroll', onUserInteraction);

            // Initial setup
            carouselWrap.scrollTo({left: slides[0].getBoundingClientRect().width, behavior: 'instant'});
            initializeAutoSlide(); // Start auto-sliding
        });

    </script>




</html>


















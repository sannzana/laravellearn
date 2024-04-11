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

    /*for slide of image automatically*/




    /*!* Container for the carousel *!*/
    /*.ImageVideoCarousel_carouselCon__jaPvM {*/
    /*    overflow: hidden;*/
    /*    position: relative;*/
    /*    margin: 0 auto;*/
    /*    padding: 0 5%;*/
    /*    white-space: nowrap; !* Ensure items are in a single line *!*/
    /*}*/

    /*!* Wrapper for the individual items *!*/
    /*.ImageVideoCarousel_carouselWrap___L6yE {*/
    /*    display: flex;*/
    /*    animation: scroll 30s linear infinite; !* Looping animation *!*/
    /*    gap: 20px;*/
    /*    padding: 20px 0;*/
    /*}*/

    /*!* Hide scrollbar *!*/
    /*.ImageVideoCarousel_carouselWrap___L6yE::-webkit-scrollbar {*/
    /*    display: none;*/
    /*}*/

    /*!* Individual carousel item *!*/
    /*.ImageVideoCarousel_sfWrap__SFWnc {*/
    /*    display: inline-flex; !* Inline-flex to work with white-space: nowrap *!*/
    /*    width: 80%;*/
    /*    border-radius: 10px;*/
    /*    box-shadow: 0 4px 6px rgba(0,0,0,0.1);*/
    /*    position: relative;*/
    /*    margin: 0 10px; !* Margin to create gaps *!*/
    /*}*/

    /*!* Images within carousel item *!*/
    /*.ImageVideoCarousel_sfWrap__SFWnc img {*/
    /*    width: 100%;*/
    /*    height: auto;*/
    /*    object-fit: cover;*/
    /*    border-radius: 10px;*/
    /*}*/

    /*!* Keyframes for the scrolling animation *!*/
    /*@keyframes scroll {*/
    /*    0% {*/
    /*        transform: translateX(0);*/
    /*    }*/
    /*    100% {*/
    /*        transform: translateX(calc(-80% - 20px)); !* Move items by their width plus gap *!*/
    /*    }*/
    /*}*/

    /*!* Responsive adjustments *!*/
    /*@media (max-width: 1024px) {*/
    /*    .ImageVideoCarousel_sfWrap__SFWnc {*/
    /*        width: 85%;*/
    /*    }*/
    /*    @keyframes scroll {*/
    /*        100% {*/
    /*            transform: translateX(calc(-85% - 20px));*/
    /*        }*/
    /*    }*/
    /*}*/

    /*@media (max-width: 768px) {*/
    /*    .ImageVideoCarousel_sfWrap__SFWnc {*/
    /*        width: 90%;*/
    /*    }*/
    /*    @keyframes scroll {*/
    /*        100% {*/
    /*            transform: translateX(calc(-90% - 20px));*/
    /*        }*/
    /*    }*/
    /*}*/

    /*@media (max-width: 480px) {*/
    /*    .ImageVideoCarousel_sfWrap__SFWnc {*/
    /*        width: 95%;*/
    /*    }*/
    /*    @keyframes scroll {*/
    /*        100% {*/
    /*            transform: translateX(calc(-95% - 20px));*/
    /*        }*/
    /*    }*/
    /*}*/


















    /*for responsive*/










    /*!* The container that holds the carousel *!*/
    /*.ImageVideoCarousel_carouselCon__jaPvM {*/
    /*    overflow: hidden;*/
    /*    position: relative;*/
    /*    margin: 0 auto; !* Center the carousel *!*/
    /*}*/

    /*!* The wrapper for each individual item *!*/
    /*.ImageVideoCarousel_carouselWrap___L6yE {*/
    /*    display: flex;*/
    /*    overflow-x: scroll;*/
    /*    scroll-snap-type: x mandatory; !* Enable snapping *!*/
    /*    -ms-scroll-snap-type: x mandatory;*/
    /*    -webkit-overflow-scrolling: touch; !* Smooth scrolling on iOS devices *!*/
    /*    padding-left: 20%; !* Padding for partially visible previous image *!*/
    /*    padding-right: 20%; !* Padding for partially visible next image *!*/
    /*}*/

    /*!* Hide the scrollbar *!*/
    /*.ImageVideoCarousel_carouselWrap___L6yE::-webkit-scrollbar {*/
    /*    display: none;*/
    /*}*/

    /*!* The individual carousel item *!*/
    /*.ImageVideoCarousel_sfWrap__SFWnc {*/
    /*    flex: 0 0 auto; !* Use 'auto' to allow for variable item width *!*/
    /*    scroll-snap-align: center; !* Ensure the item snaps in the center *!*/
    /*    transition: transform 0.5s ease; !* Smooth transition for scaling *!*/
    /*    width: 60%; !* Set a base width *!*/
    /*    margin-right: 10px; !* Add space between items *!*/
    /*    margin-left: 10px; !* Add space between items *!*/
    /*}*/

    /*!* Styling for the images *!*/
    /*.ImageVideoCarousel_sfWrap__SFWnc img {*/
    /*    width: 100%; !* Full width of the parent container *!*/
    /*    height: auto; !* Maintain aspect ratio *!*/
    /*    object-fit: cover; !* Cover the area, may crop if necessary *!*/
    /*    border-radius: 12px;*/
    /*}*/

    /*!* Pseudo-elements for gradient overlays *!*/
    /*.ImageVideoCarousel_carouselCon__jaPvM::before,*/
    /*.ImageVideoCarousel_carouselCon__jaPvM::after {*/
    /*    content: '';*/
    /*    position: absolute;*/
    /*    top: 0;*/
    /*    height: 100%;*/
    /*    pointer-events: none;*/
    /*    z-index: 2;*/
    /*    width: 100px; !* Fixed width for gradient *!*/
    /*}*/

    /*.ImageVideoCarousel_carouselCon__jaPvM::before {*/
    /*    left: 0;*/
    /*    background: linear-gradient(to right, rgba(0,0,0,0.7), transparent);*/
    /*}*/

    /*.ImageVideoCarousel_carouselCon__jaPvM::after {*/
    /*    right: 0;*/
    /*    background: linear-gradient(to left, rgba(0,0,0,0.7), transparent);*/
    /*}*/

    /*!* Media queries for responsive adjustments *!*/
    /*@media (max-width: 1024px) {*/
    /*    !* Adjustments for smaller desktops and tablets *!*/
    /*    .ImageVideoCarousel_sfWrap__SFWnc {*/
    /*        width: 70%; !* Increase width for better visibility *!*/
    /*    }*/
    /*    .ImageVideoCarousel_carouselCon__jaPvM::before,*/
    /*    .ImageVideoCarousel_carouselCon__jaPvM::after {*/
    /*        width: 80px; !* Narrow the gradients a bit *!*/
    /*    }*/
    /*}*/

    /*@media (max-width: 768px) {*/
    /*    !* Adjustments for tablets *!*/
    /*    .ImageVideoCarousel_sfWrap__SFWnc {*/
    /*        width: 80%; !* Increase width for better visibility *!*/
    /*    }*/
    /*    .ImageVideoCarousel_carouselCon__jaPvM::before,*/
    /*    .ImageVideoCarousel_carouselCon__jaPvM::after {*/
    /*        width: 60px; !* Further narrow the gradients *!*/
    /*    }*/
    /*}*/

    /*@media (max-width: 480px) {*/
    /*    !* Adjustments for mobile phones *!*/
    /*    .ImageVideoCarousel_sfWrap__SFWnc {*/
    /*        width: 90%; !* Make carousel items wider on small screens *!*/
    /*    }*/
    /*    .ImageVideoCarousel_carouselCon__jaPvM::before,*/
    /*    .ImageVideoCarousel_carouselCon__jaPvM::after {*/
    /*        display: none; !* Remove gradients on very small screens *!*/
    /*    }*/
    /*}*/

</style>







    <script>

        document.addEventListener('DOMContentLoaded', (event) => {
            const carouselWrap = document.querySelector('.ImageVideoCarousel_carouselWrap___L6yE');
            const slides = document.querySelectorAll('.ImageVideoCarousel_sfWrap__SFWnc');
            const totalSlides = slides.length;
            let autoSlideTimer; // Timer for auto-sliding

            // Clone first and last slides
            const firstSlideClone = slides[0].cloneNode(true);
            const lastSlideClone = slides[totalSlides - 1].cloneNode(true);
            carouselWrap.appendChild(firstSlideClone);
            carouselWrap.insertBefore(lastSlideClone, slides[0]);

            let index = 1; // Start from the first original slide (not a clone)

            // Function to go to a specific slide
            function goToSlide(slideIndex) {
                const slideWidth = slides[0].getBoundingClientRect().width;
                carouselWrap.scrollLeft = slideWidth * slideIndex;
                index = slideIndex;

                if (index === totalSlides + 1) { // After the last slide's clone
                    index = 1; // Reset to the first original slide
                    carouselWrap.scrollTo({left: slideWidth, behavior: 'instant'});
                } else if (index === 0) { // Before the first slide's clone
                    index = totalSlides; // Move to the last original slide
                    carouselWrap.scrollTo({left: slideWidth * totalSlides, behavior: 'instant'});
                }

                updateDots();
            }

            // Function to update the navigation dots
            function updateDots() {
                const dots = document.querySelectorAll('.ImageVideoCarousel_dot__rFKhv');
                dots.forEach(dot => dot.classList.remove('ImageVideoCarousel_active__nu46Q'));
                // Adjust the index for the dots since there's an extra (clone) slide at the beginning
                dots[(index - 1) % totalSlides].classList.add('ImageVideoCarousel_active__nu46Q');
            }

            // Function to initialize or reset automatic slide change
            function initializeAutoSlide() {
                        clearInterval(autoSlideTimer); // Clear existing timer
                        autoSlideTimer = setInterval(() => {
                            if (index === totalSlides - 1) {
                                index = 0;
                            } else {
                                index++;
                            }
                            goToSlide(index);
                        }, 3000); // Change slide every 3 seconds
                    }

            // Detect user interaction to reset auto-slide timer
            function onUserInteraction() {
                initializeAutoSlide(); // Reset the timer on user interaction
            }

            // Add event listeners for user interaction
            carouselWrap.addEventListener('scroll', onUserInteraction);

            // Initialize the position to the first original slide (skipping the first clone)
            carouselWrap.scrollTo({left: slides[0].getBoundingClientRect().width, behavior: 'instant'});
            initializeAutoSlide(); // Initialize auto-sliding
        });





        // document.addEventListener('DOMContentLoaded', (event) => {
        //     let index = 0; // Current slide index
        //     const slides = document.querySelectorAll('.ImageVideoCarousel_sfWrap__SFWnc');
        //     const totalSlides = slides.length;
        //     let autoSlideTimer; // Timer for auto-sliding
        //
        //     // Function to go to a specific slide
        //     function goToSlide(slideIndex) {
        //         const carouselWrap = document.querySelector('.ImageVideoCarousel_carouselWrap___L6yE');
        //         const slideWidth = slides[0].getBoundingClientRect().width;
        //         carouselWrap.scrollLeft = slideWidth * slideIndex;
        //         index = slideIndex;
        //         updateDots();
        //     }
        //
        //     // Function to update the navigation dots
        //     function updateDots() {
        //         const dots = document.querySelectorAll('.ImageVideoCarousel_dot__rFKhv');
        //         dots.forEach(dot => dot.classList.remove('ImageVideoCarousel_active__nu46Q'));
        //         dots[index].classList.add('ImageVideoCarousel_active__nu46Q');
        //     }
        //
        //     // Function to initialize or reset automatic slide change
        //     function initializeAutoSlide() {
        //         clearInterval(autoSlideTimer); // Clear existing timer
        //         autoSlideTimer = setInterval(() => {
        //             if (index === totalSlides - 1) {
        //                 index = 0;
        //             } else {
        //                 index++;
        //             }
        //             goToSlide(index);
        //         }, 3000); // Change slide every 3 seconds
        //     }
        //
        //     // Detect user interaction to reset auto-slide timer
        //     function onUserInteraction() {
        //         initializeAutoSlide(); // Reset the timer on user interaction
        //     }
        //
        //     // Add event listeners for user interaction
        //     document.querySelector('.ImageVideoCarousel_carouselWrap___L6yE').addEventListener('scroll', onUserInteraction);
        //     // Note: You might need to adjust this event listener depending on how your manual sliding is implemented
        //
        //     initializeAutoSlide(); // Initialize auto-sliding
        // });
        //
        //




//
//
// document.addEventListener('DOMContentLoaded', function() {
//         const carousel = document.querySelector('.ImageVideoCarousel_carouselWrap___L6yE');
//         let isUserInteracting = false;
//         let autoScrollInterval;
//
//         function autoScroll() {
//         if (!isUserInteracting) {
//         // Calculate the scroll position for the next slide
//         let newScrollPosition = carousel.scrollLeft + carousel.offsetWidth;
//         if (newScrollPosition >= carousel.scrollWidth) {
//         newScrollPosition = 0; // Reset to start if we've reached the end
//     }
//         carousel.scrollLeft = newScrollPosition;
//     }
//     }
//
//         function setupAutoScroll() {
//         autoScrollInterval = setInterval(autoScroll, 3000); // Adjust time for auto-scroll speed
//     }
//
//         // Detect user interaction to pause auto-scroll
//         carousel.addEventListener('mouseenter', function() {
//         isUserInteracting = true;
//     });
//         carousel.addEventListener('mouseleave', function() {
//         isUserInteracting = false;
//     });
//         carousel.addEventListener('touchstart', function() {
//         isUserInteracting = true;
//     });
//         carousel.addEventListener('touchend', function() {
//         isUserInteracting = false;
//     });
//
//         setupAutoScroll();
//     });


</script>




<!--document.addEventListener('DOMContentLoaded', (event) => {-->
<!--        let index = 0; // Current slide index-->
<!--        const slides = document.querySelectorAll('.ImageVideoCarousel_sfWrap__SFWnc');-->
<!--        const totalSlides = slides.length;-->
<!---->
<!--        // Function to go to a specific slide-->
<!--        function goToSlide(slideIndex) {-->
<!--        const carouselWrap = document.querySelector('.ImageVideoCarousel_carouselWrap___L6yE');-->
<!--        const slideWidth = slides[0].getBoundingClientRect().width;-->
<!--        carouselWrap.scrollLeft = slideWidth * slideIndex;-->
<!--        index = slideIndex;-->
<!--        updateDots();-->
<!--    }-->
<!---->
<!--        // Function to update the navigation dots-->
<!--        function updateDots() {-->
<!--        const dots = document.querySelectorAll('.ImageVideoCarousel_dot__rFKhv');-->
<!--        dots.forEach(dot => dot.classList.remove('ImageVideoCarousel_active__nu46Q'));-->
<!--        dots[index].classList.add('ImageVideoCarousel_active__nu46Q');-->
<!--    }-->
<!---->
<!--        // Automatic slide change-->
<!--        setInterval(() => {-->
<!--        if (index === totalSlides - 1) {-->
<!--        index = 0;-->
<!--    } else {-->
<!--        index++;-->
<!--    }-->
<!--        goToSlide(index);-->
<!--    }, 3000); // Change slide every 3 seconds-->
<!---->
<!--        // Manual sliding (optional)-->
<!--        // You can add event listeners to your left/right arrows here, if you have them.-->
<!--        // Use the goToSlide function to manually change slides.-->
<!--    });-->
<!--</script>-->
<!---->
<!---->
<!---->








</html>


















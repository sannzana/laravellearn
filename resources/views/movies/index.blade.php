
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<section class="movie-section">
    @foreach($movies as $index => $movie)
    <div class="movie-card {{ $index % 2 == 0 ? 'text-left' : 'text-right' }}">
        <div class="movie-content">
            <h3 class="movie-title">{{ $movie->title }}</h3>
            <!-- New content -->
            <p class="movie-description">{{ $movie->description }}</p>
            <p class="movie-duration">{{ $movie->duration }}</p>
            <p class="movie-genre">{{ $movie->genre }}</p>
            <!-- Existing buttons -->
            <div class="btn-container">
                <a href="/movies/{{ $movie->id }}" class="btn">Learn more</a>
                <a href="/movies/{{ $movie->id }}/book" class="btn">Book Your Seat</a>
            </div>

        </div>
        <div class="movie-image">
            <img src="{{ $movie->image_url }}" alt="{{ $movie->title }}" class="movie-img">
        </div>
    </div>
    @endforeach
</section>


<style>
    .movie-section {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        padding: 3%; /* Adjust as needed */
        position: relative; /* This is important for the ::before to work properly */
        /* Other styles */
        perspective: 1000px;
    }


    /*.movie-description,*/
    /*.movie-duration,*/
    /*.movie-genre {*/
    /*    display: none; !* Hide the new elements by default *!*/
    /*    !* Add more styles as needed *!*/
    /*}*/

    .movie-card:hover .movie-description,
    .movie-card:hover .movie-title,
    .movie-card:hover .movie-duration,
    .movie-card:hover .movie-genre {
        display: block; /* Show the new elements on hover */
        /* Add more styles as needed */

            transform: translateY(0); /* Move to original position */
            opacity: 1; /* Fade in */

        }

    .movie-title{
        margin: 5px 0; /* Add some space between text elements */
        /*white-space: nowrap; !* Prevent wrapping to ensure everything fits *!*/
        /*overflow: hidden; !* Hide overflow *!*/
        /*text-overflow: ellipsis; !* Add an ellipsis to text that overflows *!*/
        width: 100%; /* Full width within the content container */


        /*margin: 5px 0; !* Add some space between text elements *!*/
        white-space: normal; /* Allow text to wrap */
        overflow: visible; /* Show all text */
        word-break: break-word;
    }


    .movie-description,
    .movie-duration,
    .movie-genre {
        display: none;
        margin: 5px 0; /* Add some space between text elements */
        /*white-space: nowrap; !* Prevent wrapping to ensure everything fits *!*/
        /*overflow: hidden; !* Hide overflow *!*/
        text-overflow: ellipsis; /* Add an ellipsis to text that overflows */
        width: 100%; /* Full width within the content container */


        /*margin: 5px 0; !* Add some space between text elements *!*/
        white-space: normal; /* Allow text to wrap */
        overflow: visible; /* Show all text */
        word-break: break-word;
        transition: opacity 0.3s, transform 0.3s;
        transform: translateY(10px); /* Start slightly below */
        opacity: 0; /* Start invisible */
    }



    .movie-card:hover .movie-content {
        display: block;
        width: 100%; /* Expand to cover the full card */
        height: 100%; /* Expand to cover the full card */
        padding: 10px; /* Adjust padding */
        top: 0; /* Align to the top */
        left: 0; /* Align to the left */
        transform: none; /* Reset transform if previously set */
        align-items: flex-start; /* Align items to the start (top) */
    }


    .movie-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-size: contain; /* Ensure the entire image fits without being cut or repeated */
        background-position: center center; /* Center the image */
        background-repeat: no-repeat; /* Do not repeat the image */
        z-index: -1;

        filter: blur(8px);
        transition: background-image 0.8s ease-in-out, box-shadow 0.5s ease;
        background-image: var(--bg-image, url('/image/left1.jpg')); /* Initial background image, can be changed with JavaScript */
    }
    /*.movie-card:hover {*/
    /*    transform: scale(1.05);*/
    /*    border: #18181b;*/
    /*    box-shadow:*/
    /*        -10px 10px 15px -5px #ccaa00, !* Shadow on the bottom left *!*/
    /*        10px 10px 15px -5px #ccaa00;*/
    /*}*/



    .movie-card {
        position: relative;
        width: calc(25% - 40px); /* Width reduced for a more compact card size */
        margin-bottom: 3%;
        /* More space between rows of cards */
        border: #18181b;
        border-radius: 10px; /* Rounded corners for the movie card */
        overflow: hidden;
        box-shadow:
            -5px 5px 8px -3px #171301, /* Even smaller shadow for very small screens */
            5px 5px 8px -3px #413603;
        /*transition: transform 0.5s ease, box-shadow 0.5s ease;*/
        /* Smooths out the transition */
        transform: translateZ(0);
        transition: transform 0.5s ease, box-shadow 0.5s ease, z-index 0s;
        /*position: relative;*/
        /*width: calc(25% - 40px); !* Adjust the width and the margins as necessary *!*/
        /*margin-bottom: 3%;*/
        /*transition: transform 0.5s ease, box-shadow 0.5s ease;*/


    }



    .movie-card:hover {
        /*transform: scale(1.05);*/
        transform: scale(1.05) translateZ(50px); /* Slightly lifts the card up to add to the 3D effect */
        box-shadow:
            -10px 10px 20px -5px #ccaa00, /* Enhanced shadow on the bottom left */
            10px 10px 20px -5px #ccaa00; /* Enhanced shadow on the bottom right */
        transition-delay: 0.1s;/* Increase size of the hovered card */
        transition: transform 0.5s ease, box-shadow 0.5s ease;

        /* Add a shadow if needed */
    }

    .movie-card::after {
        /* ... existing styles ... */
        transition: opacity 0.3s ease, transform 0.3s ease;
        transition-delay: 0s; /* No delay for the shine effect to make it appear instantly on hover */
    }


    .movie-card:hover::after {
        transition-delay: 0.1s;
        opacity: 1; /* Show the pseudo-element */
        top: 0; /* Position it to cover the whole card */
    }

    /* The rest of the CSS for the shrinking effect on other cards remains the same */
    .movie-card:hover ~ .movie-card {
        transform: scale(0.95);
        transition: transform 0.5s ease;
    }


    /* Adjust .movie-card and other elements inside .movie-section to make sure they are positioned relatively */
    .movie-card, .movie-content {
        position: relative;
        z-index: 1; /* Ensures the content is above the blurred background */
    }
    .movie-content {
    align-items: flex-end;}



    .movie-content {

        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 2;
        width: calc(100% - 40px); /* Adjust the width slightly less than the movie-card */
        padding: 5px;
        background-color: transparent;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        border-radius: 10px;
        text-align: center;
        /*transition: transform 0.3s ease, width 0.3s ease, height 0.3s ease, padding 0.3s ease;*/
        box-sizing: border-box;

        display: flex;
        flex-direction: column;
        justify-content: center; /* Center children vertically */
        align-items: center; /* Center children horizontally */
        /* Make sure width and height are set to allow enough space for centering */
        /*width: 100%; !* Take full width of the parent .movie-card *!*/
        /* Consider if a specific height is needed or if it should be auto */
        height: auto; /* Adapt height based on content */
        /* Remove transform properties if they interfere with centering */
        /*display: flex; !* Use flexbox for a flexible layout *!*/
        /*flex-direction: column; !* Stack children vertically *!*/
        /*justify-content: center; !* Center content vertically *!*/
        /*align-items: center;*/
        transition: all 0.5s ease; /* Animate all changes smoothly */
        overflow: hidden;
    }

    .movie-image {
        width: 100%;
        padding-top: 150%; /* Increased padding-top for a taller image aspect ratio */
        position: relative;
        border-radius: 10px;
    }

    .movie-img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 10px;
    }
    .movie-title {
        font-size: 1.5em;

        white-space: normal; /* Allow text wrapping on smaller screens */
        text-overflow: clip; /* Remove ellipsis when wrapping */
        /*font-size: smaller;*/
        /* ...existing styles... */
        transition: font-size 0.3s ease;
        word-wrap: break-word; /* Ensure long words do not overflow */
        overflow: hidden; /* Hide text that overflows the element's box */
        /*text-overflow: ellipsis; !* Add an ellipsis to indicate hidden overflow *!*/
        /*white-space: nowrap; !* Prevent text from wrapping to a new line *!*/
        max-width: 100%;/* Smooth transition for font size changes */
    }

    .btn-container {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }
    .btn {
         /* Use flexbox to align buttons */
       /* This will space out the buttons equally */
        padding: 10px ; /* Adjust padding as needed */
        min-width: 90px; /* Use min-width to ensure buttons have at least this width */
        text-align: center;
        /*padding: 10px 20px; !* Adjust padding as needed *!*/
        /*text-align: center;*/
        text-decoration: none; /* Removes underline from links */
        display: inline-block;
        font-size: 10px; /* Adjust font size as needed */
        border-radius: 15px; /* Rounded corners for the button */
        color: #000; /* Text color */
        background-color: #dcc762; /* Muddy yellow background */
        border: 1px solid #57a957; /* Green border */
        box-shadow: 0 3px #57a957; /* Simulate depth with green shadow beneath the button */
        transition: all 0.3s ease; /* Smooth transition for hover effects */
        position: relative; /* Required for pseudo-elements used for the shine effect */
        overflow: hidden;
        flex: 1;/* Ensures pseudo-elements don't extend outside the button */

    }

    .btn:hover {
        background-color: transparent; /* Transparent background on hover */
        color: #000; /* Text color on hover */
        border-color: #d2a679; /* Muddy yellow border on hover */
        box-shadow: 0 6px 20px green; /* Radiant green shadow on hover */
    }

    /* Shine effect on hover */
    .btn::after {
        content: '';
        position: absolute;
        top: -50%; right: -50%;
        bottom: -50%; left: -50%;
        background: linear-gradient(45deg, transparent, rgba(255, 255, 255, 0.4), transparent);
        transition: all 0.5s ease;
        opacity: 0;
        transform: scale(0) rotate(30deg);
    }

    .btn:hover::after {
        opacity: 1;
        transform: scale(2) rotate(30deg);
    }


    @media (hover: hover) {
        .movie-card:hover {
            transform: scale(1.05);
        }

        .container:hover .movie-card:not(:hover) {
            transform: scale(0.95);
        }
    }


















    /* Adjustments for small screens */
    @media (max-width: 600px) {

        .movie-card {
            width: 100%; /* Full width for smaller screens */
            margin-bottom: 20px; /* Adjust space between cards */
        }

        .movie-card:hover {
            transform: scale(1.03);
        }

        .container:hover .movie-card:not(:hover) {
            transform: scale(0.97);
        }


        .movie-content {
            width: 90%; /* Adjust the width for a consistent look */
            padding: 20px; /* Provide sufficient padding */
            /*transform: translate(-50%, -50%); !* Center the content *!*/
            top: 60%; /* Adjust the vertical positioning if necessary */
            /* Consider if scaling is still necessary here, if not, remove the next line */
            transform: translate(-50%, -50%) scale(0.85); /* Optional: Scale down the content */
        }

        /*.movie-title {*/
        /*    font-size: 1.5em; !* Adjust the font size to fit the smaller viewport *!*/
        /*}*/


    }






    @media (max-width: 1300px) {
        .movie-card {
            width: calc(33.333% - 60px); /* Three cards per row with proper spacing */
            margin: 20px;
            padding-bottom: 30px;/* Consistent margin for all sides */
            box-shadow:
                -10px 10px 12px -5px #171301,
                10px 10px 12px -5px #413603;
            display: flex; /* Use flexbox for layout */
            flex-direction: column; /* Stack children vertically */
            justify-content: space-between; /* Distribute space evenly, keeps footer at bottom */
            align-items: center; /* Center content horizontally */
            overflow: hidden; /* Prevent content from overflowing */
            height: auto; /* Card height adjusts to content */
            max-height: 400px; /* Maximum height to prevent very tall cards */
        }
        .movie-card:hover {
            box-shadow:
                -10px 10px 12px -5px #ccaa00,
                10px 10px 12px -5px #ccaa00;
        }
        .movie-card:hover .movie-img {
            opacity: 0.9; /* Opacity change on hover */
            transition: opacity 0.5s ease;
        }

        .movie-card .movie-description,
        .movie-card .movie-duration,
        .movie-card .movie-genre {
            display: none; /* Hide additional details initially */
        }

        .movie-card:hover .movie-description,
        .movie-card:hover .movie-duration,
        .movie-card:hover .movie-genre {
            display: none; /* Maintain hidden on hover */
        }

        .movie-content {
            width: calc(100% - 30px); /* Account for padding and borders */
            padding: 15px; /* Adjust padding to prevent overflow */
        }
        .movie-card:hover .movie-content {
            padding: 30px; /* More padding on hover */
            justify-content: center; /* Center content */
        }

        .movie-title {
            font-size: 1.8em; /* Increase font size for readability */
            white-space: normal; /* Allow text wrap */
        }

        .movie-section {
            padding: 5%; /* Adjust padding for layout */
        }

        .movie-content {
            width: calc(100% - 60px); /* Width accounting for padding */
        }

        .btn {
            font-size: 20px; /* Button font size */
            padding: 12px; /* Button padding */
            min-width: 80px; /* Minimum button width */
            min-height: 60px; /* Minimum button height */
            width: 100%; /* Full width of the container */
            margin-bottom: 15px; /* Space between buttons */
        }

        .btn-container {
            display: flex;
            flex-direction: column; /* Stack buttons vertically */
            align-items: center; /* Center buttons */
            justify-content: space-around; /* Evenly distribute buttons */
            gap: 15px; /* Gap between items */
        }
    }

    @media (hover: hover) {
        .btn:hover {
            background-color: transparent; /* Transparent button background on hover */
            color: #000; /* Button text color on hover */
            border-color: #d2a679; /* Button border color on hover */
            box-shadow: 0 10px 30px rgba(0, 128, 0, 0.7); /* Button shadow on hover */
        }

        .btn:hover::after {
            opacity: 1; /* Button pseudo-element opacity on hover */
            transform: scale(3) rotate(30deg); /* Button pseudo-element transformation on hover */
        }
    }





    @media (max-width: 1200px) {
        .movie-card {
            width: calc(33.333% - 30px); /* Three cards per row with proper spacing */
            margin: 15px; /* Consistent margin for all sides */
            box-shadow:
                -10px 10px 12px -5px #171301,
                10px 10px 12px -5px #413603;
            display: flex; /* Use flexbox for layout */
            flex-direction: column; /* Stack children vertically */
            justify-content: center; /* Center content vertically */
            align-items: center; /* Center content horizontally */
            overflow: hidden; /* Prevent content from overflowing */
        }
        .movie-card:hover {
            box-shadow:
                -10px 10px 12px -5px #ccaa00,
                10px 10px 12px -5px #ccaa00;
        }
        .movie-card:hover .movie-img {
            opacity: 0.9;
            transition: opacity 0.5s ease;
        }

        .movie-card .movie-description,
        .movie-card .movie-duration,
        .movie-card .movie-genre {
            display: none;
        }

        .movie-card:hover .movie-description,
        .movie-card:hover .movie-duration,
        .movie-card:hover .movie-genre {
            display: none;
        }

        /* Adjust the styles for movie-content, movie-title, etc., as needed */

        .movie-content {
            width: calc(100% - 30px); /* Account for padding and borders */
            padding: 15px; /* Adjust padding to prevent overflow */
        }
        .movie-card:hover .movie-content {
            padding: 30px; /* More padding on hover */
            justify-content: center; /* Center content */
        }

        .movie-title {
            font-size: 1.8em; /* Increase font size for readability */
            white-space: normal; /* Allow text wrap */
        }

        .movie-section {
            padding: 5%; /* Adjust padding for layout */
        }

        .movie-content {
            width: calc(100% - 60px); /* Width accounting for padding */
        }

        .btn {
            font-size: 20px; /* Button font size */
            padding: 12px; /* Button padding */
            min-width: 80px; /* Minimum button width */
            min-height: 60px; /* Minimum button height */
            width: 100%; /* Full width of the container */
            margin-bottom: 15px; /* Space between buttons */
        }

        .btn-container {
            display: flex;
            flex-direction: column; /* Stack buttons vertically */
            align-items: center; /* Center buttons */
            justify-content: space-around; /* Evenly distribute buttons */
            gap: 15px; /* Gap between items */
        }
    }

    @media (hover: hover) {
        .btn:hover {
            background-color: transparent; /* Transparent button background on hover */
            color: #000; /* Button text color on hover */
            border-color: #d2a679; /* Button border color on hover */
            box-shadow: 0 10px 30px rgba(0, 128, 0, 0.7); /* Button shadow on hover */
        }

        .btn:hover::after {
            opacity: 1; /* Button pseudo-element opacity on hover */
            transform: scale(3) rotate(30deg); /* Button pseudo-element transformation on hover */
        }
    }








    @media (max-width: 992px) {
        .movie-card {
            width: calc(50% - 20px); /* Adjust width to prevent overflow */
            margin-bottom: 50px; /* More space between cards */
            margin-right: 10px; /* Added right margin for spacing */
            margin-left: 10px; /* Added left margin for spacing */
            box-shadow:
                -10px 10px 12px -5px #171301,
                10px 10px 12px -5px #413603;
        }
        .movie-card:hover {
            box-shadow:
                -10px 10px 12px -5px #ccaa00,
                10px 10px 12px -5px #ccaa00;
        }
        .movie-card:hover .movie-img {
            opacity: 0.9;
            transition: opacity 0.5s ease;
        }

        .movie-card .movie-description,
        .movie-card .movie-duration,
        .movie-card .movie-genre {
            display: none;
        }

        .movie-card:hover .movie-description,
        .movie-card:hover .movie-duration,
        .movie-card:hover .movie-genre {
            display: none;
        }
        .movie-content {
            width: 100%;
            padding: 15px;
            top: 50%;
            transform: translate(-50%, -50%) scale(1);
        }
        .movie-card:hover .movie-content {
            padding: 25px;
            justify-content: center;
        }

        .movie-title {
            font-size: 1.7em;
            white-space: normal;
        }

        .movie-section {
            padding: 10%;
        }

        .movie-content {
            width: calc(100% - 40px);
        }

        .btn {
            font-size: 20px;
            padding: 10px;
            min-width: 20px; /* This seems too small for min-width, check if this is intended */
            min-height: 60px;
            width: 100%; /* Take full width of the parent container */
            margin-bottom: 10px; /* Add space between the buttons */
        }

        .btn-container {
            display: flex;
            flex-direction: column; /* Stack buttons vertically */
            align-items: center; /* Center buttons horizontally */
            justify-content: space-around; /* Distribute buttons evenly */
            gap: 15px; /* Keep the gap if you need space around the items */
        }
    }


    @media (hover: hover) {
        .btn:hover {
            background-color: transparent;
            color: #000;
            border-color: #d2a679;
            box-shadow: 0 10px 30px rgba(0, 128, 0, 0.7);
        }

        .btn:hover::after {
            opacity: 1;
            transform: scale(3) rotate(30deg);
        }
    }





    /*@media (max-width: 768px) {*/
    /*    .movie-card {*/
    /*        width: 100%; !* Full width for smaller screens *!*/
    /*        margin: 0 0 20px; !* Space between cards *!*/
    /*        !* Ensure height is not restricting the card *!*/
    /*        height: auto;*/
    /*        !* No transformation on hover to prevent layout shifts *!*/
    /*        transform: none;*/
    /*        box-shadow: none; !* Optional: remove shadow on hover *!*/
    /*    }*/

    /*    .movie-card .movie-description,*/
    /*    .movie-card .movie-duration,*/
    /*    .movie-card .movie-genre {*/
    /*        !* Hide additional info by default *!*/
    /*        display: none;*/
    /*    }*/
    /*    .movie-card:hover .movie-description,*/
    /*    .movie-card:hover .movie-duration,*/
    /*    .movie-card:hover .movie-genre {*/
    /*        display: none; !* Keep details hidden on hover on small screens *!*/
    /*    }*/

    /*    .movie-content {*/
    /*        !* Flex layout for the content *!*/
    /*        display: flex;*/
    /*        flex-direction: column;*/
    /*        justify-content: space-between;*/
    /*        padding: 10px; !* Padding inside the content *!*/
    /*        width: 100%; !* Full width *!*/
    /*        box-sizing: border-box; !* Include padding and border *!*/
    /*    }*/

    /*    .btn-container {*/
    /*        position: relative;*/
    /*        width: 100%; !* Container takes the full width *!*/
    /*        margin-top: 10px; !* Space from title to buttons *!*/
    /*    }*/

    /*    .btn {*/
    /*        display: block; !* Each button on its own line *!*/
    /*        width: 100%; !* Full width buttons *!*/
    /*        margin-bottom: 10px; !* Space between buttons *!*/
    /*    }*/

    /*    .btn:last-child {*/
    /*        margin-bottom: 0; !* No extra space after the last button *!*/
    /*    }*/

    /*    !* Remove scaling effects on hover *!*/
    /*    .movie-card:hover {*/
    /*        transform: none;*/
    /*    }*/

    /*    .btn:hover {*/
    /*        !* Hover effects for buttons *!*/
    /*        background-color: transparent;*/
    /*        color: #000;*/
    /*        border-color: #d2a679;*/
    /*        box-shadow: 0 6px 20px rgba(0, 128, 0, 0.5);*/
    /*    }*/

    /*    .btn:hover::after {*/
    /*        opacity: 1;*/
    /*        transform: scale(2) rotate(30deg);*/
    /*    }*/
    /*}*/

    /*.movie-card:hover .movie-img {*/
    /*    opacity: 0.7; !* Or any other value between 0 and 1 *!*/
    /*    transition: opacity 0.5s ease;*/
    /*}*/



    /*!* Remove hover effects for touch devices *!*/
    /*@media (hover: none) {*/
    /*    .btn:hover {*/
    /*        background-color: #dcc762; !* Back to default style *!*/
    /*        box-shadow: none;*/
    /*    }*/
    /*}*/

















    @media (max-width: 768px) {
        .movie-card {
            width: calc(100% - 70px); /* Slightly wider padding */
            margin-bottom: 50px; /* More space between cards */
            margin-right: 10px; /* Added right margin for spacing */
            margin-left: 10px; /* Added left margin for spacing */
            box-shadow:
                -10px 10px 12px -5px #171301,
                10px 10px 12px -5px #413603;
        }
        .movie-card:hover {
            box-shadow:
                -8px 8px 10px -4px #ccaa00, /* Larger shadow on hover */
                8px 8px 10px -4px #ccaa00;
        }
        .movie-card:hover .movie-img {
            opacity: 0.8; /* Slightly higher opacity on hover */
            transition: opacity 0.5s ease;
        }

        .movie-card .movie-description,
        .movie-card .movie-duration,
        .movie-card .movie-genre {
            display: none; /* Show details by default on medium screens */
        }

        .movie-card:hover .movie-description,
        .movie-card:hover .movie-duration,
        .movie-card:hover .movie-genre {
            display: none; /* Details visible on hover */
        }
        .movie-content {
            width: 100%; /* Full width for the content area */
            padding: 12px; /* Increased padding */
            top: 50%; /* Centered vertically */
            transform: translate(-50%, -50%) scale(0.9); /* Scale slightly down */
        }
        .movie-card:hover .movie-content {
            padding: 20px; /* More padding on hover */
            justify-content: center; /* Center content */
        }

        .movie-title {
            font-size: 1.5em; /* Larger font size for readability */
            white-space: normal; /* Text wraps to new line */
        }

        .movie-section {
            padding: 8%; /* More padding for aesthetic */
        }

        .movie-content {
            width: calc(100% - 30px); /* Adjust width for padding */
        }

        .btn {
            font-size: 24px;
            padding: 6px; /* Increased padding for larger screens */
            min-width: 60px;
            min-height: 50px; /* Larger buttons for easier interaction */
            width: calc(50% - 15px); /* Adjust width for buttons */
        }

        .btn-container {
            justify-content: center;
            gap: 10px; /* Increased gap for layout */
        }
    }

    @media (hover: hover) {
        .btn:hover {
            background-color: transparent;
            color: #000;
            border-color: #d2a679;
            box-shadow: 0 8px 25px rgba(0, 128, 0, 0.6);
        }

        .btn:hover::after {
            opacity: 1;
            transform: scale(2.5) rotate(30deg);
        }
    }


    @media (max-width: 600px) {
        .movie-card {
            width: calc(100% - 30px); /* Full width minus padding */
            margin: 15px; /* Consistent margin */
            box-shadow:
                -5px 5px 7px -3px #171301, /* Smaller shadow for smaller screens */
                5px 5px 7px -3px #413603;
            display: flex;
            flex-direction: column;
            justify-content: flex-start; /* Content aligned to the top */
            align-items: center;
            overflow: hidden;
            height: auto; /* Adjust height automatically */
        }
        .movie-card:hover {
            box-shadow:
                -5px 5px 7px -3px #ccaa00,
                5px 5px 7px -3px #ccaa00;
        }
        .movie-card:hover .movie-img {
            opacity: 0.9;
            transition: opacity 0.5s ease;
        }

        .movie-card .movie-description,
        .movie-card .movie-duration,
        .movie-card .movie-genre {
            display: none; /* Hide details to simplify the card */
        }

        .movie-card:hover .movie-description,
        .movie-card:hover .movie-duration,
        .movie-card:hover .movie-genre {
            display: none; /* Keep details hidden on hover */
        }

        .movie-content {
            width: calc(100% - 30px); /* Adjust width to allow for padding */
            padding: 15px; /* Adequate padding for smaller screens */
        }
        .movie-card:hover .movie-content {
            padding: 15px; /* Keep padding consistent on hover */
            justify-content: center;
        }

        .movie-title {
            font-size: 1.5em; /* Adjust font size for smaller screens */
            white-space: normal; /* Allow title to wrap */
            text-overflow: ellipsis;
            overflow: hidden;
            max-height: 3em; /* Limit title height */
        }

        .movie-section {
            padding: 5%; /* Adjust padding */
        }

        .btn {
            font-size: 18px; /* Slightly smaller button font size */
            padding: 10px; /* Adjust button padding */
            min-width: 80px; /* Keep minimum button width */
            min-height: 50px; /* Adjust minimum button height */
            width: auto; /* Auto width for button */
            margin-bottom: 10px; /* Adjust space between buttons */
        }

        .btn-container {
            width: 100%; /* Full width for button container */
            flex-direction: column; /* Stack buttons vertically */
            align-items: center; /* Center buttons */
            justify-content: center; /* Center content */
            gap: 10px; /* Adjust gap between buttons */
        }
    }

    @media (hover: hover) {
        .btn:hover {
            background-color: transparent;
            color: #000;
            border-color: #d2a679;
            box-shadow: 0 8px 25px rgba(0, 128, 0, 0.6);
        }

        .btn:hover::after {
            opacity: 1;
            transform: scale(2.5) rotate(30deg);
        }
    }





    @media (max-width: 480px) {
        /*.movie-card:hover .movie-content {*/
        /*    padding: 10px; !* Adjust padding as needed for very small screens *!*/
        /*}*/
        .movie-card {
            width: calc(100% - 20px); /* Full width for very small screens */
            margin-bottom: 15px;
            /* Adjust space between cards */
            box-shadow:
                -5px 5px 8px -3px #171301, /* Even smaller shadow for very small screens */
                5px 5px 8px -3px #413603;

        }
        .movie-card:hover {
            box-shadow:
                -5px 5px 8px -3px #ccaa00, /* Even smaller shadow for very small screens */
                5px 5px 8px -3px #ccaa00;


        }
        .movie-card:hover .movie-img {
            opacity: 0.7; /* Or any other value between 0 and 1 */
            transition: opacity 0.5s ease;
        }


        .movie-card .movie-description,
        .movie-card .movie-duration,
        .movie-card .movie-genre {
            display: none; /* Hide details by default on small screens */
        }

        .movie-card:hover .movie-description,
        .movie-card:hover .movie-duration,
        .movie-card:hover .movie-genre {
            display: none; /* Keep details hidden on hover on small screens */
        }
        .movie-content {
            width: 90%; /* Adjust the width for a consistent look */
            padding: 10px; /* Adjust padding for the content */
            /*transform: translate(-50%, -50%); !* Center the content *!*/
            top: 60%; /* Adjust the vertical positioning if necessary */
            /* Consider if scaling is still necessary here, if not, remove the next line */
            transform: translate(-50%, -50%) scale(0.8); /* Optional: Scale down the content */
        }
        .movie-card:hover .movie-content {
            padding: 16px; /* Less padding for very small screens */
            justify-content: center; /* Align content to the top */
        }

            .movie-title {
                font-size: 1.3em; /* Adjust font size for readability on very small screens */
                white-space: normal; /* Allow the text to wrap to a new line on very small screens */
            }/* Adjust the font size for readability on very small screens */


        .movie-section {
            padding: 5%; /* Consistent padding for very small screens */
        }


        .movie-content {
            width: calc(100% - 20px); /* Adjusted width to match the new card size */
        }

        .btn {
            font-size: 14px;
            padding: 6px; /* Reduce padding for smaller screens */
            min-width: 80px;
            min-height: 100px/* Adjust min-width to ensure buttons fit within the container */
            flex: none; /* Override the flex-grow property */
            width: calc(50% - 10px); /* Half the container width minus the gap */
        }

        .btn-container {
            justify-content: center; /* Centers buttons if they don't span full width */
            gap: 5px; /* Reduce the gap for smaller screens */
        }
    }

    @media (hover: hover) {
        .btn:hover {
            /* Hover effects as defined earlier */
            background-color: transparent;
            color: #000;
            border-color: #d2a679;
            box-shadow: 0 6px 20px rgba(0, 128, 0, 0.5);
        }

        .btn:hover::after {
            opacity: 1;
            transform: scale(2) rotate(30deg);
        }

    }


</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var backgrounds = [
            '/image/left1.jpg',
            '/image/left2.jpg',
            '/image/left3.jpg',
        ];
        var current = 0;

        function changeBackground() {
            var section = document.querySelector('.movie-section'); // Select the section
            var imageUrl = `url(${backgrounds[current]})`;
            section.style.setProperty('--bg-image', imageUrl); // Set the CSS variable
            current = (current + 1) % backgrounds.length;
        }

        setInterval(changeBackground, 5000); // Change every 5 seconds
        changeBackground(); // Initial call to set the background
    });


</script>

</body>
</html>

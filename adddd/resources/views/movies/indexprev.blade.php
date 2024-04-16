
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
            <!-- Additional movie information -->
            <p class="movie-description">{{ $movie->description }}</p>
            <p class="movie-duration">Duration: {{ $movie->duration }} minutes</p>
            <p class="movie-genre">Genre: {{ $movie->genre }}</p>
            <!-- Existing buttons -->
            <a href="/movies/{{ $movie->id }}" class="btn">Learn more</a>
            <a href="/movies/{{ $movie->id }}/book" class="btn">Book Your Seat</a>
        </div>
        <div class="movie-image">
            <img src="{{ $movie->image_url }}" alt="{{ $movie->title }}" class="movie-img">
        </div>
    </div>
    @endforeach

</section>

<!---->
<!--@foreach($movies as $index => $movie)-->
<!--<div class="movie-card {{ $index % 2 == 0 ? 'text-left' : 'text-right' }}">-->
<!--    <div class="movie-content">-->
<!--        <h3 class="movie-title">{{ $movie->title }}</h3>-->
<!--        Additional movie information -->-->
<!--        <p class="movie-description">{{ $movie->description }}</p>-->
<!--        <p class="movie-duration">Duration: {{ $movie->duration }} minutes</p>-->
<!--        <p class="movie-genre">Genre: {{ $movie->genre }}</p>-->
<!--        Existing buttons -->-->
<!--        <a href="/movies/{{ $movie->id }}" class="btn">Learn more</a>-->
<!--        <a href="/movies/{{ $movie->id }}/book" class="btn">Book Your Seat</a>-->
<!--    </div>-->
<!--    <div class="movie-image">-->
<!--        <img src="{{ $movie->image_url }}" alt="{{ $movie->title }}" class="movie-img">-->
<!--    </div>-->
<!--</div>-->
<!--@endforeach-->





fdgfdgrd

<style>
    .movie-section {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        padding: 3%; /* Adjust as needed */
        position: relative; /* This is important for the ::before to work properly */
        /* Other styles */
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
        transition: background-image 0.8s ease-in-out, box-shadow 0.3s ease;
        background-image: var(--bg-image, url('/image/left1.jpg')); /* Initial background image, can be changed with JavaScript */
    }

    .movie-card {
        position: relative;
        width: calc(25% - 40px); /* Width reduced for a more compact card size */
        margin-bottom: 3%;
        /* More space between rows of cards */
        border: #18181b;
        border-radius: 10px; /* Rounded corners for the movie card */
        overflow: hidden;
        /*transition: transform 0.3s ease;*/

        /*overflow: hidden; !* This will contain the pseudo-element within the card's border *!*/
        /*position: relative; !* Needed for absolute positioning of the pseudo-element *!*/
        transition: transform 0.3s ease, box-shadow 0.3s ease;

    }
    .movie-description, .movie-duration, .movie-genre {
        display: none; /* Hide new information by default */
    }
    .movie-card:hover {
        transform: scale(1.05);
        border: #18181b;
        box-shadow:
            -10px 10px 15px -5px #ccaa00, /* Shadow on the bottom left */
            10px 10px 15px -5px #ccaa00;
    }


    .movie-card:hover .movie-description,
    .movie-card:hover .movie-duration,
    .movie-card:hover .movie-genre {
        display: block; /* Show additional information on hover */
    }









    .movie-card:hover::after {
        opacity: 1; /* Show the pseudo-element */
        top: 0; /* Position it to cover the whole card */
    }

    /* The rest of the CSS for the shrinking effect on other cards remains the same */
    .movie-card:hover ~ .movie-card {
        transform: scale(0.95);
    }


    /* Adjust .movie-card and other elements inside .movie-section to make sure they are positioned relatively */
    .movie-card, .movie-content {
        position: relative;
        z-index: 1; /* Ensures the content is above the blurred background */
    }



    .movie-content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 2;
        width: calc(100% - 40px); /* Adjust the width slightly less than the movie-card */
        padding: 5px;
        background-color: rgba(255, 255, 255, 0.9);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        border-radius: 10px;
        text-align: center;
        transition: transform 0.3s ease;
        box-sizing: border-box;
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
        /* ...existing styles... */
        transition: font-size 0.3s ease;
        word-wrap: break-word; /* Ensure long words do not overflow */
        overflow: hidden; /* Hide text that overflows the element's box */
        /*text-overflow: ellipsis; !* Add an ellipsis to indicate hidden overflow *!*/
        white-space: nowrap; /* Prevent text from wrapping to a new line */
        max-width: 100%;/* Smooth transition for font size changes */
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

        .movie-title {
            font-size: 1.5em; /* Adjust the font size to fit the smaller viewport */
        }


    }

    @media (max-width: 1200px) {
        .movie-card {
            width: calc(33.333% - 40px); /* Adjust for medium screens */
        }
    }

    @media (max-width: 992px) {
        .movie-card {
            width: calc(50% - 40px); /* Half width for tablet screens */
        }
    }

    @media (max-width: 768px) {
        .movie-card {
            width: 40%; /* Half the size for smaller screens */
            margin-bottom: 3%; /* Consistent space between rows */
        }

        .movie-card:hover {
            transform: scale(1.03);
            box-shadow:
                -8px 8px 10px -4px #ccaa00, /* Smaller shadow on the bottom left */
                8px 8px 10px -4px #ccaa00; /* Smaller shadow on the bottom right */
        }


        .container:hover .movie-card:not(:hover) {
            transform: scale(0.97);
        }




        .movie-content {
            width: 90%; /* Adjust the width to have a little padding on the sides */
            transform: translate(-50%, -50%) scale(0.9);
            padding: 8px;/* Scale down the content a bit */
        }

        .movie-title {
            font-size: 1.2em; /* Reduce font size to prevent overflow */
            white-space: normal; /* Allow the text to wrap if it's too long for one line */
            overflow: hidden; /* Hide text that overflows the element's box */
            text-overflow: ellipsis; /* Add an ellipsis to indicate hidden overflow */
            max-width: 100%; /* Ensure the title does not exceed the width of its container */
            word-wrap: break-word; /* Adjust font size for medium devices */
        }



    }



    @media (max-width: 480px) {

        .movie-card {
            width: calc(50% - 20px); /* Full width for very small screens */
            margin-bottom: 15px;
            /* Adjust space between cards */
            box-shadow:
                -5px 5px 8px -3px #ccaa00, /* Even smaller shadow for very small screens */
                5px 5px 8px -3px #ccaa00;

        }

        .movie-content {
            width: 90%; /* Adjust the width for a consistent look */
            padding: 10px; /* Adjust padding for the content */
            /*transform: translate(-50%, -50%); !* Center the content *!*/
            top: 60%; /* Adjust the vertical positioning if necessary */
            /* Consider if scaling is still necessary here, if not, remove the next line */
            transform: translate(-50%, -50%) scale(0.8); /* Optional: Scale down the content */
        }

        /*.movie-title {*/
        /*    font-size: 1em;*/
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
            <p class="movie-description" style="display: none;">{{ $movie->description }}</p>
            <p class="movie-duration" style="display: none;">{{ $movie->duration }}</p>
            <p class="movie-genre" style="display: none;">{{ $movie->genre }}</p>
            <a href="/movies/{{ $movie->id }}" class="btn">Learn more</a>
            <a href="/movies/{{ $movie->id }}/book" class="btn">Book Your Seat</a>
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
        transition: background-image 0.8s ease-in-out, box-shadow 0.3s ease;
        background-image: var(--bg-image, url('/image/left1.jpg')); /* Initial background image, can be changed with JavaScript */
    }
    .movie-card:hover {
        transform: scale(1.05);
        border: #18181b;
        box-shadow:
            -10px 10px 15px -5px #ccaa00, /* Shadow on the bottom left */
            10px 10px 15px -5px #ccaa00;
    }



    .movie-card {
        position: relative;
        width: calc(25% - 40px); /* Width reduced for a more compact card size */
        margin-bottom: 3%;
        /* More space between rows of cards */
        border: #18181b;
        border-radius: 10px; /* Rounded corners for the movie card */
        overflow: hidden;
        /*transition: transform 0.3s ease;*/
        backface-visibility: hidden;
        /*overflow: hidden; !* This will contain the pseudo-element within the card's border *!*/
        /*position: relative; !* Needed for absolute positioning of the pseudo-element *!*/
        transition: transform 0.3s ease, box-shadow 0.3s ease;

    }


    .movie-card:hover {
        transform: scale(1.05); /* Increase size of the hovered card */
        /* Add a shadow if needed */
    }

    .movie-card:hover::after {
        opacity: 1; /* Show the pseudo-element */
        top: 0; /* Position it to cover the whole card */
    }

    /* The rest of the CSS for the shrinking effect on other cards remains the same */
    .movie-card:hover ~ .movie-card {
        transform: scale(0.95);
    }







    .movie-card:hover .movie-content {
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        transform: none; /* Reset transform on hover */
        overflow-y: auto; /* Enable vertical scrolling if content overflows */
        padding: 20px; /* Adjust padding to give content some spacing */
    }

    .movie-card:hover .movie-description,
    .movie-card:hover .movie-duration,
    .movie-card:hover .movie-genre {
        display: block; /* Show the new information */
    }






    /* Adjust .movie-card and other elements inside .movie-section to make sure they are positioned relatively */
    /*.movie-card, .movie-content {*/
    /*    position: relative;*/
    /*    z-index: 1; !* Ensures the content is above the blurred background *!*/
    /*}*/



    .movie-content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 2;
        width: calc(100% - 40px); /* Adjust the width slightly less than the movie-card */
        padding: 5px;
        background-color: rgba(255, 255, 255, 0.9);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        border-radius: 10px;
        text-align: center;
        transition: transform 0.3s ease;
        box-sizing: border-box;
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
        /* ...existing styles... */
        transition: font-size 0.3s ease;
        word-wrap: break-word; /* Ensure long words do not overflow */
        overflow: hidden; /* Hide text that overflows the element's box */
        /*text-overflow: ellipsis; !* Add an ellipsis to indicate hidden overflow *!*/
        white-space: nowrap; /* Prevent text from wrapping to a new line */
        max-width: 100%;/* Smooth transition for font size changes */
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
        .movie-card:hover .movie-content {
            /* Adjust the padding or any other properties if necessary */
            padding: 10px;
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

        .movie-title {
            font-size: 1.5em; /* Adjust the font size to fit the smaller viewport */
        }


    }

    @media (max-width: 1200px) {
        .movie-card {
            width: calc(33.333% - 40px); /* Adjust for medium screens */
        }
    }

    @media (max-width: 992px) {
        .movie-card {
            width: calc(50% - 40px); /* Half width for tablet screens */
        }
    }

    @media (max-width: 768px) {
        .movie-card {
            width: 40%; /* Half the size for smaller screens */
            margin-bottom: 3%; /* Consistent space between rows */
        }


        .movie-card:hover .movie-content {
            /* Adjust the padding or any other properties if necessary */
            padding: 15px;
        }

        .movie-card:hover {
            transform: scale(1.03);
            box-shadow:
                -8px 8px 10px -4px #ccaa00, /* Smaller shadow on the bottom left */
                8px 8px 10px -4px #ccaa00; /* Smaller shadow on the bottom right */
        }


        .container:hover .movie-card:not(:hover) {
            transform: scale(0.97);
        }




        .movie-content {
            width: 90%; /* Adjust the width to have a little padding on the sides */
            transform: translate(-50%, -50%) scale(0.9);
            padding: 8px;/* Scale down the content a bit */
        }

        .movie-title {
            font-size: 1.2em; /* Reduce font size to prevent overflow */
            white-space: normal; /* Allow the text to wrap if it's too long for one line */
            overflow: hidden; /* Hide text that overflows the element's box */
            text-overflow: ellipsis; /* Add an ellipsis to indicate hidden overflow */
            max-width: 100%; /* Ensure the title does not exceed the width of its container */
            word-wrap: break-word; /* Adjust font size for medium devices */
        }



    }



    @media (max-width: 480px) {

        .movie-card {
            width: calc(50% - 20px); /* Full width for very small screens */
            margin-bottom: 15px;
            /* Adjust space between cards */
            box-shadow:
                -5px 5px 8px -3px #ccaa00, /* Even smaller shadow for very small screens */
                5px 5px 8px -3px #ccaa00;

        }

        .movie-card:hover .movie-content {
            /* Adjust the padding or any other properties if necessary */
            padding: 5px;
        }

        .movie-content {
            width: 90%; /* Adjust the width for a consistent look */
            padding: 10px; /* Adjust padding for the content */
            /*transform: translate(-50%, -50%); !* Center the content *!*/
            top: 60%; /* Adjust the vertical positioning if necessary */
            /* Consider if scaling is still necessary here, if not, remove the next line */
            transform: translate(-50%, -50%) scale(0.8); /* Optional: Scale down the content */
        }

        /*.movie-title {*/
        /*    font-size: 1em;*/
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


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
            <a href="/movies/{{ $movie->id }}" class="btn">Learn more</a>
            <a href="/movies/{{ $movie->id }}/book" class="btn">Book Your Seat</a>
        </div>
        <div class="movie-image">
            <img src="{{ $movie->image_url }}" alt="{{ $movie->title }}" class="movie-img">
        </div>
    </div>
    @endforeach
</section>








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
        background-size: contain; /* Change this to 'contain' */
        background-position: center center; /* Adjusts the position */
        background-repeat: no-repeat; /* Prevents the image from repeating */
        z-index: -1;
        filter: blur(8px);
        transition: background-image 0.8s ease-in-out;
    }



    .movie-card {
        position: relative;
        width: calc(25% - 40px); /* Width reduced for a more compact card size */
        margin-bottom: 3%; /* More space between rows of cards */
        border-radius: 10px; /* Rounded corners for the movie card */
        overflow: hidden;
    }



    .movie-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-size: cover;
        background-position: center;
        z-index: -1; /* Ensures the blur is behind the content */
        filter: blur(8px); /* Adjust the blur amount as needed */
        transition: background-image 0.8s; /* Smooth transition between images */
        .movie-section::before {
            /* Other styles remain unchanged */
            background-image: var(--bg-image, url('/image/left1.jpg')); /* Use a CSS variable */
        }

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
        padding: 10px;
        background-color: rgba(255, 255, 255, 0.9);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        border-radius: 10px;
        text-align: center;
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
            width: 50%; /* Half the size for smaller screens */
            margin-bottom: 3%; /* Consistent space between rows */
        }

        .movie-image {
            padding-top: 200%; /* Adjust for a taller aspect ratio on smaller screens */
        }
    }

    @media (max-width: 480px) {
        .movie-section {
            padding: 5%; /* Consistent padding for very small screens */
        }

        .movie-card {
            width: calc(50% - 20px); /* Further reduced width with less margin for very small screens */
        }

        .movie-content {
            width: calc(100% - 20px); /* Adjusted width to match the new card size */
        }
    }


</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var section = document.querySelector('.movie-section::before'); // Adjust if using directly on the section
        var backgrounds = [
            '/image/left1.jpg',
            '/image/left2.jpg',
            '/image/left3.jpg',
        ];
        var current = 0;

        function changeBackground() {
            var imageUrl = `url(${backgrounds[current]})`;
            document.querySelector('.movie-section').style.backgroundImage = imageUrl;
            current = (current + 1) % backgrounds.length;
        }

        setInterval(changeBackground, 5000); // Change every 5 seconds
        changeBackground(); // Initial call to set the background
    });


</script>

</body>
</html>

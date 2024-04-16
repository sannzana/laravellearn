document.addEventListener('DOMContentLoaded', function() {
let lastScrollPosition = 0;
let initialPositions = {};

window.addEventListener('scroll', function() {
const currentScrollPosition = window.pageYOffset || document.documentElement.scrollTop;
const scrollDirection = currentScrollPosition > lastScrollPosition ? 'down' : 'up';
lastScrollPosition = currentScrollPosition;

// Total height of the document
let documentHeight = document.body.scrollHeight;
let viewHeight = window.innerHeight;
let normalizedScroll = Math.max(1, documentHeight - viewHeight); // Avoid division by zero

// Scaling the offset with document height
let scaleOffset = (currentScrollPosition / normalizedScroll) * 5; // Adjust scale factor as needed

// Animating visible images in the upper and lower galleries
animateGallery('.max20vh:not(.bottomline) img', scrollDirection, initialPositions, 'upper', scaleOffset);
animateGallery('.max20vh.bottomline img', scrollDirection, initialPositions, 'lower', -scaleOffset);

// Animating hidden images
animateHiddenImages('.gallery-item.hidden img', scrollDirection, initialPositions, 'hidden_upper', scaleOffset, 'left');
animateHiddenImages('.gallery-item.hidden img', scrollDirection, initialPositions, 'hidden_lower', -scaleOffset, 'right');
});
});

function animateGallery(selector, scrollDirection, positions, prefix, offset) {
document.querySelectorAll(selector).forEach((img, index) => {
let key = `${prefix}_${index}`;
if (!positions[key]) {
let match = getComputedStyle(img).transform.match(/matrix\((.+)\)/);
positions[key] = match ? parseFloat(match[1].split(', ')[4]) : 0;
}
let newPosition = positions[key] + (scrollDirection === 'down' ? offset : -offset);
img.style.transform = `translate3d(${newPosition}px, 0px, 0px)`;
});
}

function animateHiddenImages(selector, scrollDirection, positions, prefix, offset, side) {
document.querySelectorAll(selector).forEach((img, index) => {
let key = `${prefix}_${index}`;
if (!positions[key]) {
positions[key] = side === 'left' ? -100 : 100; // Starting from -100% (left) or 100% (right)
}document.addEventListener('DOMContentLoaded', function() {
let lastScrollPosition = 0;
let initialPositions = {};

window.addEventListener('scroll', function() {
const currentScrollPosition = window.pageYOffset || document.documentElement.scrollTop;
const scrollDirection = currentScrollPosition > lastScrollPosition ? 'down' : 'up';
lastScrollPosition = currentScrollPosition;

// Total height of the document
let documentHeight = document.body.scrollHeight;
let viewHeight = window.innerHeight;
let normalizedScroll = Math.max(1, documentHeight - viewHeight); // Avoid division by zero

// Scaling the offset with document height
let scaleOffset = (currentScrollPosition / normalizedScroll) * 5; // Adjust scale factor as needed

// Animating visible images in the upper and lower galleries
animateGallery('.max20vh:not(.bottomline) img', scrollDirection, initialPositions, 'upper', scaleOffset);
animateGallery('.max20vh.bottomline img', scrollDirection, initialPositions, 'lower', -scaleOffset);

// Animating hidden images
animateHiddenImages('.gallery-item.hidden img', scrollDirection, initialPositions, 'hidden_upper', scaleOffset, 'left');
animateHiddenImages('.gallery-item.hidden img', scrollDirection, initialPositions, 'hidden_lower', -scaleOffset, 'right');
});
});

function animateGallery(selector, scrollDirection, positions, prefix, offset) {
document.querySelectorAll(selector).forEach((img, index) => {
let key = `${prefix}_${index}`;
if (!positions[key]) {
let match = getComputedStyle(img).transform.match(/matrix\((.+)\)/);
positions[key] = match ? parseFloat(match[1].split(', ')[4]) : 0;
}
let newPosition = positions[key] + (scrollDirection === 'down' ? offset : -offset);
img.style.transform = `translate3d(${newPosition}px, 0px, 0px)`;
});
}

function animateHiddenImages(selector, scrollDirection, positions, prefix, offset, side) {
document.querySelectorAll(selector).forEach((img, index) => {
let key = `${prefix}_${index}`;
if (!positions[key]) {
positions[key] = side === 'left' ? -100 : 100; // Starting from -100% (left) or 100% (right)
}
let newPosition = scrollDirection === 'down' ? positions[key] + offset : positions[key] - offset;
// Ensure the position is within bounds (-100 to 100)
newPosition = Math.min(100, Math.max(-100, newPosition));
positions[key] = newPosition;
img.style.transform = `translate3d(${newPosition}%, 0px, 0px)`;
});
}

let newPosition = scrollDirection === 'down' ? positions[key] + offset : positions[key] - offset;
// Ensure the position is within bounds (-100 to 100)
newPosition = Math.min(100, Math.max(-100, newPosition));
positions[key] = newPosition;
img.style.transform = `translate3d(${newPosition}%, 0px, 0px)`;
});
}








document.addEventListener('DOMContentLoaded', function() {
let lastScrollPosition = 0;
let initialPositions = {};
let isThrottled = false; // Initialize the throttle flag

window.addEventListener('scroll', function() {
if (!isThrottled) {
// Throttle check passed, proceed with scroll handling
const currentScrollPosition = window.pageYOffset || document.documentElement.scrollTop;
const scrollDirection = currentScrollPosition > lastScrollPosition ? 'down' : 'up';
lastScrollPosition = currentScrollPosition;

// Apply the parallax effect
animateGallery('.max20vh:not(.bottomline) img', scrollDirection, initialPositions, 'upper', 20);
animateGallery('.max20vh.bottomline img', scrollDirection, initialPositions, 'lower', -20);
animateHiddenImages('.gallery-item.hidden img', scrollDirection, initialPositions, 'hidden_upper', 10, 'left');
animateHiddenImages('.gallery-item.hidden img', scrollDirection, initialPositions, 'hidden_lower', -10, 'right');

isThrottled = true;

// Throttle the function, only allowing it to run at most once every 100ms
setTimeout(function() {
isThrottled = false;
}, 100);

console.log('Scroll event handled:', scrollDirection, 'at position:', currentScrollPosition);
} else {
// Scroll event throttled
console.log('Scroll event throttled.');
}
});

// Define the animateGallery function
function animateGallery(selector, scrollDirection, positions, prefix, offset) {
document.querySelectorAll(selector).forEach((img, index) => {
let key = `${prefix}_${index}`;
if (!positions[key]) {
let match = getComputedStyle(img).transform.match(/matrix\((.+)\)/);
positions[key] = match ? parseFloat(match[1].split(', ')[5]) : 0; // 5th index for translateY
}
let newPosition = positions[key] + (scrollDirection === 'down' ? offset : -offset);
img.style.transform = `translate3d(0px, ${newPosition}px, 0px)`;
});
}

// Define the animateHiddenImages function
function animateHiddenImages(selector, scrollDirection, positions, prefix, offset, side) {
document.querySelectorAll(selector).forEach((img, index) => {
let key = `${prefix}_${index}`;
if (!positions[key]) {
positions[key] = side === 'left' ? -100 : 100; // Starting from -100% (left) or 100% (right)
}
let newPosition = positions[key] + (scrollDirection === 'down' ? offset : -offset);
newPosition = Math.min(100, Math.max(-100, newPosition));
positions[key] = newPosition;
img.style.transform = `translate3d(${newPosition}%, 0px, 0px)`;
});
}
});




































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
        display: flex; /* Use flexbox for a flexible layout */
        flex-direction: column; /* Stack children vertically */
        justify-content: center; /* Center content vertically */
        align-items: center;
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











    @media (max-width: 1200px) {
        .movie-card {
            width: calc(33.333% - 40px); /* Adjust for medium screens */
        }
    }










    @media (max-width: 992px) {
        .movie-card {
            width: calc(33.333% - 40px); /* Adjust the card width for 3 columns layout */
            margin-bottom: 2%; /* Adjust space between rows */
            padding: 15px; /* Adjust padding inside the card if necessary */
        }

        .movie-content {
            display: flex;
            flex-direction: column;
            align-items: center; /* This centers the .btn-container horizontally */
            justify-content: center;
            padding: 10px; /* Adjust to ensure content fits well */
        }

        .btn-container {
            width: 100%; /* Full width to allow centering within the .movie-content */
            display: flex;
            flex-direction: row; /* Set to row for side-by-side buttons */
            justify-content: center; /* Center buttons horizontally */
            gap: 10px; /* Space between buttons */
        }

        .btn {
            padding: 8px 16px; /* Adjust the padding to fit the content */
            font-size: 14px; /* Adjust font size if needed */
            margin: 2px; /* Adjust margin to control button size and spacing */
            flex: 1; /* Make buttons grow equally */
            min-width: 100px; /* Adjust min-width to fit the card's new width */
            max-width: 160px; /* Set a max-width to prevent buttons from growing too large */
            box-sizing: border-box; /* Include padding and border in the width */
        }

        /* If you want the buttons to be side by side on medium screens */
        .btn-container {
            flex-direction: row;
            justify-content: space-between;
        }

        .btn-container .btn {
            flex-basis: calc(50% - 5px); /* Adjust so buttons take half the container minus the gap */
        }
    }

    /* Styles to override hover effects on medium screens if necessary */
    @media (max-width: 992px) {
        .movie-card:hover {
            /* Adjust the scale and shadow if it feels too much for medium screens */
            transform: scale(1.03);
            box-shadow:
                -5px 5px 10px -3px #ccaa00, /* Softer shadow on the bottom left */
                5px 5px 10px -3px #ccaa00; /* Softer shadow on the bottom right */
        }

        /* If the shine effect is too strong on medium screens, tone it down */
        .movie-card:hover::after {
            opacity: 0.8;
            transform: scale(1.5) rotate(30deg);
        }
    }












    @media (max-width: 768px) {
        .movie-card {
            width: 40%; /* Half the size for smaller screens */
            margin-bottom: 3%; /* Consistent space between rows */
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

        .movie-card:hover {
            transform: scale(1.03);
            box-shadow:
                -8px 8px 10px -4px #ccaa00, /* Smaller shadow on the bottom left */
                8px 8px 10px -4px #ccaa00; /* Smaller shadow on the bottom right */
        }


        .container:hover .movie-card:not(:hover) {
            transform: scale(0.97);
        }


        .movie-card:hover .movie-content {
            padding: 15px; /* Adjust padding as needed for smaller screens */
        }





        .movie-content {
            width: 90%; /* Adjust the width to have a little padding on the sides */
            transform: translate(-50%, -50%) scale(0.9);
            padding: 8px;/* Scale down the content a bit */
        }

        .movie-title
        {
            font-size: smaller; /* Even smaller font size for very small screens */
        }



        .btn {
            font-size: 16px; /* Adjust font size */
            padding: 8px; /* Adjust padding */
            min-width: 80px;
            min-height: 100px ;
            flex: none; /* Override the flex-grow property */
            width: calc(50% - 10px); /* Adjust min-width for smaller buttons if necessary */
        }


        /*.btn {*/
        /*    font-size: 12px;*/
        /*    padding: 6px; !* Reduce padding for smaller screens *!*/
        /*    min-width: 80px;*/
        /*    min-height: 100px!* Adjust min-width to ensure buttons fit within the container *!*/
        /*    flex: none; !* Override the flex-grow property *!*/
        /*    width: calc(50% - 10px); !* Half the container width minus the gap *!*/
        /*}*/



        @media (hover: hover) {
            .btn:hover {
                background-color: transparent; /* Transparent background on hover */
                color: #000; /* Text color on hover */
                border-color: #d2a679; /* Muddy yellow border on hover */
                box-shadow: 0 6px 20px rgba(0, 128, 0, 0.5); /* Radiant green shadow on hover */
            }

            .btn:hover::after {
                opacity: 1;
                transform: scale(2) rotate(30deg);
            }

            /*.btn-container {*/
            /*    justify-content: center; !* Center buttons in their container *!*/
            /*}*/
        }


    }


















    @media (max-width: 480px) {
        /*.movie-card:hover .movie-content {*/
        /*    padding: 10px; !* Adjust padding as needed for very small screens *!*/
        /*}*/
        .movie-card {
            width: calc(50% - 20px); /* Full width for very small screens */
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
            padding: 8px; /* Less padding for very small screens */
            justify-content: start; /* Align content to the top */
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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<!--<div class="container">-->
<!---->
<!--<section>-->
<!--<div class="movie-container">-->
<!--    <div class="left-parallax"></div> -->
<!--    <div class="right-parallax"></div> -->
<!---->
<!---->
<!--    @foreach($movies as $index => $movie)-->
<!--    <div class="movie-card {{ $index % 2 == 0 ? 'content-on-right' : 'content-on-left' }}">-->
<!--        <div class="movie-content">-->
<!--            <h3 class="movie-title">{{ $movie->title }}</h3>-->
<!--          <div class="movie-description">{{ $movie->description }}</div>-->-->
<!--            <a href="/movies/{{ $movie->id }}" class="btn">Learn more</a>-->
<!--            <br>-->
<!--            <a href="/movies/{{ $movie->id }}" class="btn">BookYour Seat</a>-->
<!--        </div>-->
<!---->
<!--        <div class="movie-image">-->
<!--            <img src="{{ $movie->image_url }}" alt="{{ $movie->title }}">-->
<!---->
<!--        </div>-->
<!--    </div>-->
<!--    @endforeach-->
<!--</div>-->
<!---->
<!--</section>-->

<section class="movie-section">
    @foreach($movies as $index => $movie)
    <div class="movie-card {{ $index % 2 == 0 ? 'image-left' : 'image-right' }}">
        <div class="movie-image">
            <img src="{{ $movie->image_url }}" alt="{{ $movie->title }}">
        </div>
        <div class="movie-content">
            <h3 class="movie-title">{{ $movie->title }}</h3>

            <a href="/movies/{{ $movie->id }}" class="btn">Learn more</a>
            <a href="/movies/{{ $movie->id }}/book" class="btn">Book Your Seat</a>
        </div>
    </div>
    @endforeach
</section>







<style>
    .movie-section {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        padding: 20px;
        justify-content: center; /* Center the cards in the section */
    }

    .movie-card {
        width: 45%; /* Make the movie-card smaller */
        margin-top: 20px; /* Add space at the top to allow overlap */
        background: #FFF;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        position: relative; /* Needed for positioning the content */
    }

    .movie-card .movie-image {
        width: 100%;
        padding-top: 56.25%; /* Aspect ratio of 16:9 */
        position: relative;
    }

    .movie-card .movie-image img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 10px; /* Rounded corners for the image */
    }

    .movie-card .movie-content {
        position: absolute;
        bottom: -20px; /* Overlap at the bottom */
        left: -20px; /* Overlap on the left */
        background: rgba(255, 255, 255, 0.95); /* Semi-transparent white */
        padding: 20px;
        border-radius: 10px; /* Rounded corners for the content */
        z-index: 2; /* Ensure the content is above the image */
        width: 50%; /* Make the movie-content larger */
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .movie-section {
            padding: 10px;
        }

        .movie-card {
            width: 100%; /* Full width on small screens */
            margin-top: 10px; /* Adjust space at the top for smaller screens */
        }

        .movie-card .movie-image {
            padding-top: 0;
        }

        .movie-card .movie-image img {
            height: auto;
            max-height: 200px; /* Set a max-height for images */
        }

        .movie-card .movie-content {
            position: absolute;
            bottom: -10px; /* Smaller overlap for small screens */
            left: -10px; /* Smaller overlap for small screens */
            width: 60%; /* Larger content for small screens */
        }
    }









    2nd one




    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <img src="{{ $movie->image_url }}" alt="{{ $movie->title }}">
    </div>
    </div>
    @endforeach
    </section>


    <style>



    .movie-section {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 20px;
        padding: 20px;
    }

    .movie-card {
        display: flex;
        flex-direction: column;
        background: #FFF;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .movie-card .movie-content {
        background: #F4F4F4;
        padding: 20px;
        display: flex;
        flex-direction: column;
        justify-content: space-between; /* Changed to space-between to push buttons to bottom */
        z-index: 2;
        margin-top: -100px; /* Adjust this value to control the overlap */
    }

    .movie-card .movie-image {
        flex-grow: 1;
        position: relative;
    }

    .movie-card .movie-image img {
        width: 100%;
        height: auto;
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
    }

    /* Ensure buttons are at the bottom */
    .movie-card .movie-content .btn {
        margin-top: 10px; /* Add spacing between the buttons if needed */
    }

    @media (max-width: 768px) {
        .movie-section {
            grid-template-columns: 1fr;
        }
    }








    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <img src="{{ $movie->image_url }}" alt="{{ $movie->title }}">
    </div>
    </div>
    @endforeach
    </section>


    <style>
        /* Base styles */
    .movie-section {
        display: flex;
        flex-wrap: wrap;
        gap: 20px; /* Reduced gap for smaller screens */
        padding: 20px;
        justify-content: center;
    }

    .movie-card {
        background: #FFF;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        width: 100%; /* Full width on smaller screens */
        display: flex;
        flex-direction: column-reverse; /* Image on top by default */
        position: relative;
    }

    .movie-card .movie-content {
        padding: 20px;
        background: rgba(244, 244, 244, 0.8); /* Semi-transparent background */
        z-index: 2;
        position: absolute;
        bottom: 0;
        width: 100%; /* Full width on smaller screens */
        height: 40%; /* Adjust height */
        text-align: left; /* Align text to the left */
        display: flex;
        flex-direction: column;
        justify-content: center; /* Center content vertically */
    }

    .movie-card .movie-image {
        width: 100%;
        padding-top: 56.25%; /* Aspect Ratio */
        position: relative;
        background: black;
    }

    .movie-card .movie-image img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 10px;
    }

    /* Responsive styles */
    @media (min-width: 768px) {
        .movie-card {
            width: calc(50% - 10px); /* Adjusting for medium screens */
        }
    }

    @media (min-width: 992px) {
        .movie-section {
            gap: 40px;
            padding: 40px;
        }

        .movie-card {
            width: calc(33.333% - 26.666px); /* Three cards per row */
        }

        .movie-card .movie-content {
            padding: 20px;
            width: 40%; /* Adjust width */
            bottom: 10%; /* Give some space from the bottom */
            border-top-left-radius: 10px; /* Rounded corner for the left side */
        }

        /* Styles for the even child */
        .movie-card:nth-child(odd) {
            flex-direction: row-reverse; /* Image on the right for odd items */
        }

        .movie-card:nth-child(odd) .movie-content {
            left: 0;
            border-top-left-radius: 0;
            border-top-right-radius: 10px; /* Rounded corner for the right side */
        }
    }

    @media (min-width: 1200px) {
        .movie-card {
            width: calc(25% - 30px); /* Four cards per row on larger screens */
        }
    }
















    /*@media (max-width: 768px) { !* for tablets *!*/
    /*    .movie-section {*/
    /*        gap: 40px;*/
    /*        padding: 60px;*/
    /*    }*/

    /*    .movie-card {*/
    /*        width: calc(100% - 40px); !* Full width minus the padding for one card per row *!*/
    /*    }*/

    /*    .movie-card .movie-content,*/
    /*    .movie-card:nth-child(even) .movie-content {*/
    /*        position: relative; !* No absolute positioning for smaller screens *!*/
    /*        width: auto; !* Take full width of the card *!*/
    /*        height: auto; !* Auto height for content *!*/
    /*        padding: 10px;*/
    /*        border-radius: 10px; !* Apply border-radius to all sides *!*/
    /*    }*/

    /*    .movie-card .movie-image {*/
    /*        padding-top: 75%; !* Adjust aspect ratio *!*/
    /*    }*/
    /*}*/

    /*@media (max-width: 480px) { !* for mobile phones *!*/
    /*    .movie-section {*/
    /*        padding: 30px;*/
    /*        gap: 20px;*/
    /*    }*/

    /*    .movie-card {*/
    /*        flex-direction: column; !* Stack image and content on small screens *!*/
    /*    }*/

    /*    .movie-card .movie-content,*/
    /*    .movie-card:nth-child(even) .movie-content {*/
    /*        !* No changes needed here if the tablet styles are suitable *!*/
    /*    }*/

    /*    .movie-card .movie-image {*/
    /*        padding-top: 100%; !* Adjust aspect ratio for smaller screens *!*/
    /*    }*/
    /*}*/


    /* Base styles are defined above */

    /* Responsive adjustments */
    /* Existing styles above */

    /* Responsive adjustments */




    /* Main styles remain unchanged */

    /* Responsive adjustments */
    /* Main styles remain unchanged */

    /* Responsive adjustments */
    /* Tablet */
    /*@media (max-width: 768px) {*/
    /*    .movie-card {*/
    /*        width: calc(100% - 40px); !* Full width for smaller screens *!*/
    /*        height: auto; !* Height can be auto to accommodate the content *!*/
    /*    }*/

    /*    .movie-card .movie-content,*/
    /*    .movie-card:nth-child(even) .movie-content {*/
    /*        position: relative; !* Adjusted to stack on the image *!*/
    /*        width: 100%; !* Full width of the card *!*/
    /*        height: auto; !* Adjust to content height *!*/
    /*        !* ... *!*/
    /*    }*/

    /*    .movie-card .movie-image {*/
    /*        height: auto; !* Adjust to the image *!*/
    /*    }*/

    /*    !* You can adjust the bottom and left/right positioning as needed *!*/
    /*}*/


    /* Mobile Phones */
    /*@media (max-width: 480px) {*/
    /*    .movie-section {*/
    /*        padding: 60px 20px; !* Reduce padding for smaller screens *!*/
    /*    }*/
    /*    .movie-card {*/
    /*        flex-direction: column;*/
    /*    }*/
    /*    .movie-card .movie-content, .movie-card:nth-child(even) .movie-content {*/
    /*        width: 90%; !* Further increase for very small screens *!*/
    /*        bottom: -70px; !* Adjust position to fit content outside the image *!*/
    /*        left: 5%; !* Center the content even more *!*/
    /*        height: auto; !* Let the height adjust to the content *!*/
    /*        border-top-left-radius: 10px; !* Ensure rounded corners are consistent *!*/
    /*        border-top-right-radius: 10px; !* Apply rounding to both sides *!*/
    /*    }*/
    /*}*/





    /*@media (max-width: 768px) {*/
    /*    .movie-section {*/
    /*        gap: 20px; !* Smaller gap *!*/
    /*    }*/

    /*    .movie-card {*/
    /*        width: 100%; !* Full width cards *!*/
    /*        flex-direction: column; !* Stack elements vertically *!*/
    /*    }*/

    /*    .movie-card .movie-content,*/
    /*    .movie-card .movie-image {*/
    /*        position: static; !* Reset positioning to stack naturally *!*/
    /*        width: 100%; !* Full width of parent *!*/
    /*        height: auto; !* Height adjusts to content *!*/
    /*    }*/

    /*    .movie-card .movie-image {*/
    /*        padding-top: 40%; !* Increase the height of the image *!*/
    /*    }*/

    /*    .movie-card .movie-image img {*/
    /*        position: static; !* Reset positioning *!*/
    /*        width: 100%; !* Full width *!*/
    /*        height: auto; !* Height adjusts to image aspect ratio *!*/
    /*        object-fit: cover; !* Cover the area without stretching *!*/
    /*    }*/

    /*    .movie-card:nth-child(even) .movie-content,*/
    /*    .movie-card:nth-child(odd) .movie-content {*/
    /*        !* Remove individual odd/even styles for smaller screens *!*/
    /*        position: static; !* Stack naturally *!*/
    /*        width: 100%; !* Full width *!*/
    /*        padding: 20px; !* Consistent padding *!*/
    /*        border-radius: 10px; !* Rounded corners *!*/
    /*    }*/

    /*    !* No need to adjust even and odd differently for images because we want them to be the same *!*/
    /*}*/

    /*}*/










    /*.movie-section {*/
    /*    display: flex;*/
    /*    flex-wrap: wrap;*/
    /*    gap: 80px;*/
    /*    padding: 120px;*/
    /*    justify-content: center; !* Centers the cards *!*/
    /*}*/

    /*.movie-card {*/
    /*    background: #FFF;*/
    /*    border-radius: 10px;*/
    /*    overflow: hidden;*/
    /*    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);*/
    /*    width: calc(50% - 40px); !* Space for 2 cards per row with gap *!*/
    /*    display: flex;*/
    /*    flex-direction: column; !* Default direction for odd items *!*/
    /*    padding: 10px;*/
    /*    position: relative; !* Position content over image *!*/
    /*}*/

    /*.movie-card .movie-content {*/
    /*    padding: 20px;*/
    /*    background: #F4F4F4;*/
    /*    z-index: 2;*/
    /*    position: absolute;*/
    /*    bottom: 0; !* Align to the bottom *!*/
    /*    right: 0; !* Aligns the content to the right by default *!*/
    /*    width: 40%;*/
    /*    height: 60%;*/
    /*    border-top-left-radius: 10px; !* Rounded corner for the right side by default *!*/
    /*}*/

    /*.movie-card .movie-image {*/
    /*    width: 100%;*/
    /*    padding-top: 56.25%; !* Aspect Ratio *!*/
    /*    position: relative;*/
    /*    background: black; !* Placeholder for images *!*/
    /*    border-radius: 10px;*/

    /*}*/

    /*.movie-card .movie-image img {*/
    /*    position: absolute;*/
    /*    top: 0;*/
    /*    left: 0; !* Adjusted for left alignment *!*/
    /*    width: 100%;*/
    /*    height: 100%;*/
    /*    padding-bottom: 10%;*/
    /*    padding-right: 10%;*/
    /*    object-fit: cover;*/
    /*    border-radius: 10px;ns the image to the right by default *!*/
    /*}*/

    /*!* Styles for the even child *!*/
    /*.movie-card:nth-child(even) {*/
    /*    flex-direction: row; !* Aligns items side by side for even items *!*/
    /*}*/

    /*.movie-card:nth-child(even) .movie-content {*/
    /*    padding: 20px;*/
    /*    background: #F4F4F4;*/
    /*    z-index: 2;*/
    /*    position: absolute;*/
    /*    bottom: 0; !* Align to the bottom *!*/
    /*    left: 0; !* Aligns the content to the right by default *!*/
    /*    width: 40%;*/
    /*    height: 60%;*/
    /*    border-top-right-radius: 10px; No rounded corner on the left for the content box *!*/
    /*}*/

    /*.movie-card:nth-child(even) .movie-image img {*/
    /*    position: absolute;*/
    /*    top: 0;*/
    /*    left: 0; !* Adjusted for left alignment *!*/
    /*    width: 100%;*/
    /*    height: 100%;*/
    /*    padding-bottom: 10%;*/
    /*    padding-left: 10%;*/
    /*    padding-right: 0;*/
    /*    object-fit: cover;*/
    /*    border-radius: 10px;ns the image to the left by default *!* Reset the alignment for even items *!*/
    /*}*/









    /*.movie-section {*/
    /*    display: grid;*/
    /*    grid-template-columns: repeat(2, minmax(0, 1fr));*/
    /*    gap: 20px;*/
    /*    padding: 20px;*/
    /*}*/

    /*.movie-card {*/
    /*    display: grid;*/
    /*    grid-template-columns: 1fr 1fr;*/
    /*    align-items: center;*/
    /*    background: #FFF;*/
    /*    border-radius: 10px;*/
    /*    overflow: hidden;*/
    /*    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);*/
    /*    position: relative; !* Make sure the card is positioned for z-index to work *!*/
    /*}*/

    /*.movie-card .movie-image {*/
    /*    position: relative;*/
    /*    width: 100%;*/
    /*    padding-top: 56.25%; !* Aspect ratio of 16:9 *!*/
    /*}*/

    /*.movie-card .movie-image img {*/
    /*    position: absolute;*/
    /*    top: 0;*/
    /*    left: 0;*/
    /*    width: 100%;*/
    /*    height: 100%;*/
    /*    object-fit: cover;*/
    /*}*/

    /*.movie-card .movie-content {*/
    /*    padding: 20px;*/
    /*    margin-top: -20px; !* Slight overlap *!*/
    /*    z-index: 10; !* Ensure content is above the card *!*/
    /*    position: relative; !* Necessary for z-index to work *!*/
    /*}*/

    /*!* Image on the left *!*/
    /*.movie-card.image-left .movie-content {*/
    /*    background: #F4F4F4;*/
    /*}*/

    /*!* Image on the right *!*/
    /*.movie-card.image-right .movie-image {*/
    /*    order: 2;*/
    /*}*/

    /*.movie-card.image-right .movie-content {*/
    /*    background: #F4F4F4;*/
    /*    order: 1;*/
    /*}*/

    /*@media (max-width: 768px) {*/
    /*    .movie-section {*/
    /*        grid-template-columns: 1fr;*/
    /*    }*/

    /*    .movie-card {*/
    /*        grid-template-columns: 1fr;*/
    /*    }*/

    /*    .movie-card .movie-image,*/
    /*    .movie-card .movie-content {*/
    /*        width: 100%;*/
    /*        order: 0;*/
    /*    }*/

    /*    .movie-card .movie-image img {*/
    /*        height: auto;*/
    /*        max-height: 200px;*/
    /*    }*/

    /*    .movie-card .movie-content {*/
    /*        max-width: 100%;*/
    /*        margin-top: -10px; !* Adjust overlap for smaller screens *!*/
    /*    }*/
    /*}*/




    /* .movie-container {*/
    /*     display: flex;*/
    /*     flex-wrap: wrap; !* Allows multiple items to wrap onto the next line *!*/
    /*     justify-content: space-around; !* Distributes space around items *!*/
    /*     max-width: 1200px;*/
    /*     margin: 0 auto;*/

    /* }*/

    /* .movie-card {*/
    /*     display: flex;*/
    /*     flex-direction: row;*/
    /*     align-items: flex-start;*/
    /*     width: calc(40% - 35px); !* For two items per row *!*/
    /*     margin: 20px;*/
    /*     padding: 0 20px;*/
    /*     border-radius: 8px;*/
    /*     overflow: hidden;*/
    /*     box-shadow: 0 4px 8px rgba(0,0,0,0.1);*/
    /*     transition: transform 0.3s ease, box-shadow 0.3s ease;*/
    /*     !* Rest of your existing .movie-card styles *!*/
    /* }*/

    /* !* Button Styling *!*/
    /* .movie-card .movie-content .btn {*/
    /*     padding: 12px 24px; !* Slightly larger padding for a more prominent button *!*/
    /*     background-color: #17a2b8; !* A soft blue for the button background *!*/
    /*     color: #ffffff; !* White color for the text *!*/
    /*     font-size: 1rem; !* Responsive font size *!*/
    /*     border: none; !* No border *!*/
    /*     border-radius: 20px; !* Rounded corners with a larger radius for a pill shape *!*/
    /*     cursor: pointer; !* Cursor changes to pointer to indicate button *!*/
    /*     text-transform: uppercase; !* Uppercase text for a more button-like appearance *!*/
    /*     font-weight: 600; !* Slightly bolder font *!*/
    /*     letter-spacing: 1px; !* Spacing between letters for style *!*/
    /*     transition: transform 0.3s ease, background-color 0.3s ease; !* Smooth background and transform transition for hover effect *!*/
    /*     margin-top: auto; !* Pushes the button to the bottom *!*/
    /*     width: auto; !* Default width according to the content inside *!*/
    /*     box-shadow: 0 4px 6px rgba(0,0,0,0.2); !* Subtle shadow for depth *!*/
    /*     display: block; !* Block display to fill the width of the container *!*/
    /*     text-align: center; !* Center the text *!*/
    /* }*/

    /* !* Button Hover Effect *!*/
    /*.movie-content .btn:hover {*/
    /*     background-color: #138496; !* Darker shade on hover *!*/
    /*     transform: translateY(-2px); !* Slightly raise the button on hover *!*/
    /*     box-shadow: 0 6px 12px rgba(0,0,0,0.25); !* Larger shadow on hover for a "lifting" effect *!*/
    /* }*/


    /* .movie-card {*/
    /*     !* Adjusted styles for a less vibrant look *!*/
    /*     border: 2px solid #987856; !* Muted border color *!*/
    /*     box-shadow: 0 8px 10px -5px rgba(0, 0, 0, 0.2); !* More subtle shadow for depth *!*/
    /*     transition: transform 0.3s ease, box-shadow 0.3s ease;*/
    /*     background-color: #e0d8c3; !* Muddy, muted background color *!*/
    /*     background-image: repeating-linear-gradient(*/
    /*         45deg,*/
    /*         #e0d8c3,*/
    /*         #e0d8c3 1px,*/
    /*         #f0ebe5 1px,*/
    /*         #f0ebe5 2px*/
    /*     );*/

    /*     !* Layout adjustments *!*/
    /*     width: 90%;*/
    /*     max-width: 350px;*/
    /*     margin: 20px auto;*/
    /*     padding: 20px;*/
    /*     background-size: 1000px 1000px;*/

    /*     !* Layout adjustments *!*/
    /*     !*width: 80%;*!*/
    /*     !*max-width: 350px;*!*/
    /*     !*margin: 20px auto;*!*/
    /*     !*padding: 20px;*!*/
    /* }*/

    /* !* Media query for larger screens *!*/
    /* @media (min-width: 768px) {*/
    /*     .movie-card {*/
    /*         max-width: 600px;*/
    /*         padding: 30px;*/
    /*     }*/
    /* }*/

    /* !* Media query for smaller screens *!*/
    /* @media (max-width: 480px) {*/
    /*     .movie-card {*/
    /*         width: 95%;*/
    /*         padding: 15px;*/
    /*     }*/
    /* }*/




    /* .movie-card:hover {*/
    /*     transform: scale(1.03); !* Slightly grow the box *!*/
    /*     box-shadow: 0 8px 15px -3px yellow; !* Enhanced yellow shadow *!*/
    /* }*/


    /* !* Responsive Adjustments *!*/
    /* @media screen and (max-width: 768px) {*/
    /*     .movie-card {*/
    /*         flex-direction: column;*/
    /*         width: 100%;*/
    /*     }*/

    /*   .movie-content .btn {*/

    /*         padding: 10px 20px; !* Adjust padding for smaller screens *!*/
    /*         font-size: 0.9rem; !* Adjust font size for smaller screens *!*/
    /*         !* Ensures the button doesn't stretch too much on smaller screens *!*/
    /*         max-width: 250px; !* Maximum width of the button on smaller screens *!*/
    /*         width: 100%; !* Full width to maintain responsiveness *!*/
    /*         margin: 16px auto; !* Center the button with automatic margins and add some space *!*/
    /*     }*/
    /* }*/



    /* .movie-content {*/
    /*     background: #fff;*/
    /*     padding: 2rem;*/
    /*     margin: 1rem;*/
    /*     z-index: 2;*/
    /*     border-radius: 8px;*/
    /*     box-shadow: 0 4px 8px rgba(0,0,0,0.1);*/
    /*     position: relative;*/
    /*     display: flex; !* Enables the use of flexbox layout *!*/
    /*     flex-direction: column; !* Stacks children elements (text and button) vertically *!*/
    /*     align-items: center; !* Centers children elements horizontally *!*/
    /*     !* ... other styles remain unchanged ... *!*/
    /* }*/

    /* !* Button Styling *!*/
    /* .btn {*/
    /*     display: inline-block;*/
    /*     padding: 5px 5px;*/
    /*     margin-top: 10px; !* Add space between the description text and the button *!*/
    /*     background-color: #007bff; !* Adjust the color to fit your design *!*/
    /*     color: white;*/
    /*     text-align: center;*/
    /*     text-decoration: none;*/
    /*     font-weight: bold;*/
    /*     border-radius: 4px; !* Rounded corners *!*/
    /*     transition: background-color 0.3s;*/
    /*     cursor: pointer; !* Change cursor to pointer on hover *!*/
    /*     border: none; !* Remove border *!*/
    /* }*/

    /* !* Button hover effect *!*/
    /* .btn:hover {*/
    /*     background-color: #0056b3;*/
    /* }*/


    /* !**!*/



    /* !* Optional: hover effect for the button *!*/
    /* .movie-content .btn-learn-more:hover {*/
    /*     background-color: #0056b3;*/
    /*     text-decoration: none;*/
    /*     color: #ffffff;*/
    /* }*/



    /* !*.movie-container {*!*/
    /* !*    display: flex;*!*/
    /* !*    flex-direction: column;*!*/
    /* !*    max-width: 1200px;*!*/
    /* !*    margin: 0 auto;*!*/
    /* !*}*!*/

    /* .movie-container {*/
    /*     position: relative;*/
    /*     display: flex;*/
    /*     flex-wrap: wrap;*/
    /*     justify-content: center; !* Center the items for better spacing on various screens *!*/
    /*     max-width: 1200px;*/
    /*     margin: 0 auto;*/
    /*     overflow: hidden;*/
    /* }*/

    /* !* Left and right parallax divisions *!*/
    /* .left-parallax, .right-parallax {*/
    /*     position: absolute;*/
    /*     top: 0;*/
    /*     height: 100%;*/
    /*     background-attachment: fixed;*/
    /*     background-position: center;*/
    /*     background-repeat: no-repeat;*/
    /*     background-size: cover;*/
    /*     z-index: -1;*/
    /* }*/

    /* .left-parallax {*/
    /*     left: 0;*/
    /*     width: 10%; !* Percentage width to be responsive *!*/
    /* }*/

    /* .right-parallax {*/
    /*     right: 0;*/
    /*     width: 10%;*/
    /* }*/
    /* !* Adjustments for .movie-card, .movie-content, and .movie-image if needed *!*/
    /* !* ... *!*/

    /* !* Media queries for responsiveness *!*/
    /* !* ... *!*/


    /* .movie-card {*/
    /*     display: flex;*/
    /*     flex-direction: row;*/
    /*     align-items: flex-start;*/
    /*     margin-bottom: 2rem;*/
    /*     border-radius: 8px;*/
    /*     overflow: hidden;*/
    /*     box-shadow: 0 4px 8px rgba(0,0,0,0.1);*/
    /* }*/

    /* .movie-content {*/
    /*     background: #fff;*/
    /*     padding: 2rem;*/
    /*     margin: 1rem;*/
    /*     z-index: 2;*/
    /*     border-radius: 8px;*/
    /*     box-shadow: 0 4px 8px rgba(0,0,0,0.1);*/
    /*     position: relative;*/
    /*     flex: 1 1 400px;*/
    /*     align-self: center; !* Centers vertically in case the image is larger *!*/
    /* }*/

    /* .movie-card:nth-child(odd) .movie-content {*/
    /*     margin-right: -100px;*/
    /* }*/

    /* .movie-card:nth-child(even) .movie-content {*/
    /*     margin-left: -100px;*/
    /*     order: 2;*/
    /* }*/

    /* .movie-image {*/
    /*     flex: 1 1 400px; !* Flex basis to control initial size of image container *!*/
    /*     display: flex;*/
    /*     justify-content: center;*/
    /*     align-items: center;*/
    /*     position: relative;*/
    /*     !* Sets a placeholder for the image before it loads *!*/
    /*     min-height: 1px;*/
    /*     background: no-repeat center center;*/
    /*     background-size: cover;*/
    /* }*/

    /* .movie-image:before {*/
    /*     content: "";*/
    /*     display: block;*/
    /*     padding-top: 56.25%; !* Aspect ratio 16:9 *!*/
    /*     !* Adjust the percentage for a different aspect ratio *!*/
    /* }*/

    /* .movie-image img {*/
    /*     position: absolute;*/
    /*     top: 0;*/
    /*     left: 0;*/
    /*     width: 100%;*/
    /*     height: 100%;*/
    /*     object-fit: cover;*/
    /*     border-radius: 0 8px 8px 0;*/
    /* }*/

    /* @media screen and (max-width: 768px) {*/
    /*     .movie-card {*/
    /*         flex-direction: column;*/
    /*     }*/

    /*     .movie-content, .movie-image {*/
    /*         !* Ensure both content and image take full width *!*/
    /*         flex-basis: 100%;*/
    /*         margin: 0;*/
    /*         order: unset;*/
    /*     }*/

    /*     !* Override negative margins for even and odd child elements *!*/
    /*     .movie-card:nth-child(odd) .movie-content,*/
    /*     .movie-card:nth-child(even) .movie-content {*/
    /*         margin: 0;*/
    /*     }*/

    /*     .movie-content {*/
    /*         !* This ensures content does not overlap with the image anymore *!*/
    /*         position: relative; !* Change position to relative *!*/
    /*         align-self: auto; !* Reset align-self *!*/
    /*     }*/

    /*     .movie-image {*/
    /*         height: auto; !* Adjust the height automatically *!*/
    /*         position: relative; !* Change position to relative *!*/
    /*     }*/

    /*     .movie-image img {*/
    /*         !* Remove absolute positioning from the image *!*/
    /*         position: relative;*/
    /*         border-radius: 8px; !* Maintain the border-radius for the image *!*/
    /*     }*/


    /*     .btn {*/
    /*         padding: 8px 16px; !* Adjust padding for smaller screens if necessary *!*/
    /*         margin-top: 10px; !* Reduce space above the button on smaller screens *!*/
    /*         width: 100%; !* Optional: Make the button full-width on smaller screens *!*/
    /*         box-sizing: border-box; !* Include padding and border in the width *!*/
    /*     }*/
    /* }*/




</style>



</body>
</html>

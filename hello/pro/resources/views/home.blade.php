@extends('layout')

@section('title', 'HOME')

@section('content')



<section id="mission" class="full-section _100vh nopad">



    <div class="flexv h100">
        <div data-w-id="4c1d23d0-da24-682a-478f-5854eff80c83" class="max20vh  ">





            @foreach($upperGalleryImages as $image)

            <img src="{{ asset('image/upper/' . $image) }}" loading="lazy" sizes="(max-width: 479px) 30vw, 25vw"
                 class="max25" style="will-change: transform; transform: translate3d(-170%, 0px, 0px) scale3d(1, 1, 1)
                 rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
                 alt="Gallery Image">

            @endforeach
        </div>
        <div class="filmreelsectioncontent">

            <div class="centeredcontent">

            </div>
            <div class="texture paper on-dark">

            </div>
        </div>
        <div data-w-id="01e3cd60-2e06-862c-5746-f9dffc2ec7d8" class="max20vh gallery-strip bottomline">


            @foreach($lowerGalleryImages as $image)

            <img src="{{ asset('image/lower/' . $image) }}" loading="lazy"
                 sizes="(max-width: 479px) 30vw, 25vw"  class="max25"
                 style="will-change: transform; transform: translate3d(10%, 0px, 0px)
                     scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
                 alt="Gallery Image">

            @endforeach

        </div>

    </div>
</section>


yghhjgghghgh

@endsection

@section('styles')
<style>
    .gallery-strip,.galartstrip {
        /* existing styles */
        position: relative; /* This ensures that the z-index is applied correctly. */
        z-index: 1; /* Raise the z-index to ensure the shadow is above other elements. */
        box-shadow: 0 -8px 15px rgba( 0, 0, 0.6), /* Shadow above */
        0 -8px 15px rgba(, 0, 0, 0.6); /* Shadow below */
       /* Add some space above the strip for the top shadow to be visible. */
        margin-bottom: 10px; /* Add some space below the strip for the bottom shadow to be visible. */
    }
    .galartstrip
    {
        /* existing styles */
        position: relative; /* This ensures that the z-index is applied correctly. */
        z-index: 1; /* Raise the z-index to ensure the shadow is above other elements. */
        box-shadow: 0 -8px 15px rgba(, 0, 0, 0.6), /* Shadow above */
        0 -8px 15px rgba(, 0, 0, 0.6); /* Shadow below */
        /* Add some space above the strip for the top shadow to be visible. */
         /* Add some space below the strip for the bottom shadow to be visible. */
    }






    element.style {
    }
    @media screen and (max-width: 991px)
    .full-section._100vh.nopad {
        height: auto;
    }
    .full-section._100vh.nopad, .full-section.nopad {
        padding: 0;
    }
    .full-section._100vh {
        height: 100vh;
        min-height: auto;
        justify-content: center;
        align-items: center;
        display: flex;
    }
    .full-section {
        min-height: 100vh;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        padding: 64px;
        display: flex;
        position: relative;
    }
    article, aside, details, figcaption, figure, footer, header, hgroup, main, menu, nav, section, summary {
        display: block;
    }
    * {
        box-sizing: border-box;
    }
    user agent stylesheet
    section {
        display: block;
        unicode-bidi: isolate;
    }
    @media screen and (max-width: 991px)
    body {
        font-size: 16px;
    }
    body {
        background-color: var(--black-2);
        color: #fff;
        font-family: europa, sans-serif;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.7;
    }
    body {
        min-height: 100%;
        color: #333;
        background-color: #fff;
        margin: 0;
        font-family: Arial, sans-serif;
        font-size: 14px;
        line-height: 20px;
    }
    :root {
        --black-2: #00151e;
        --white: white;
        --dark-bg: #202020;
        --light-bg: #c7cfd0;
        --dark-accent: #2b2b2b;
        --dark-goldenrod: #9d8743;
        --midnight-blue: #1c2c33;
        --cardoutline: #d6d7df;
        --maroon-2: #580719;
        --saddle-brown: #644b00;
        --brown: #961e38;
        --brand-2: #ebbc30;
        --black: black;
        --alert: #eb4949;
        --lime-green: #00bb54;
        --brand: #002b77;
        --light-accent: #9be5ef;
        --shadow-a24: rgba(0, 0, 0, .24);
        --shadow-a12: rgba(0, 0, 0, .12);
        --black-3: #1d1d1d;
        --maroon: #6c0000;
        --dark-goldenrod-2: #8d6a00;
        --dark-slate-grey: #42474c;
        --whitebg: #fafafa;
        --dark-grey: #a0a8ab;
        --black-4: #0e1419;
        --ivory: #f4f2e4;
        --midnight-blue-2: #1c2c33;
    }
    html {
        -ms-text-size-adjust: 100%;
        -webkit-text-size-adjust: 100%;
        font-family: sans-serif;
    }



    filmreelsectioncontent {
        z-index: 1;
        border-top: 8px solid var(--dark-goldenrod);
        border-bottom: 8px solid var(--dark-goldenrod);
        flex-direction: row;
        flex: 1;
        justify-content: center;
        align-self: stretch;
        align-items: center;
        display: flex;
        position: relative;
        box-shadow: inset 0 28px 50px rgba(0,0,0,.9), 0 0 50px #000;
    }
    .centeredcontent {
        z-index: 1;
        text-align: center;
        flex-direction: column;
        align-items: center;
        display: flex;
        position: relative;
    }

    /*.heading-2, .heading-3 {*/
    /*    font-size: 5rem;*/
    /*}*/
    .full-section._100vh {
        height: 100vh;
        min-height: auto;
        justify-content: center;
        align-items: center;
        display: flex;
    }

    .flexv {
        flex-direction: column;
        justify-content: space-between;
        display: flex;
    }




    /*.filmreelsectioncontent {*/
    /*    !* This will help ensure that the content scales down on smaller screens *!*/
    /*    text-align: center; !* Center the content for small screens *!*/
    /*}*/

    .heading-3 {
        font-size: 2.5rem; /* Adjust size as needed */
        margin: 0.5em 0; /* Give some space around the heading */
    }

    .subtitle1 {
        font-size: 1.5rem; /* Adjust size as needed */
        margin-bottom: 1em; /* Space after the subtitle */
    }

    .block-quote {
        font-size: 1rem; /* Adjust size as needed */
        margin-bottom: 1em; /* Space after the blockquote */
        padding: 0 1em; /* Padding for smaller screens */
        overflow-wrap: break-word; /* To prevent long words from breaking the layout */
    }

    .divider {
        margin: 1em auto; /* Center the divider and give space */
    }

    /* Responsive Styles */
    @media screen and (max-width: 991px) {
        .heading-3 {
            font-size: 2rem; /* Smaller font size on tablets */
        }

        .subtitle1 {
            font-size: 1.25rem;
        }

        .block-quote {
            font-size: 0.9rem;
        }
    }

    @media screen and (max-width: 767px) {
        .heading-3 {
            font-size: 1.5rem; /* Even smaller font size on mobile */
        }

        .subtitle1 {
            font-size: 1rem;
        }

        .block-quote {
            font-size: 0.8rem;
        }
    }

    @media screen and (max-width: 479px) {
        .heading-3,
        .subtitle1,
        .block-quote {
            padding: 0 10%; /* Add padding on the smallest screens to avoid text hitting the edges */
        }
    }






</style>
@endsection





@section('scripts')
<script>




    document.addEventListener('DOMContentLoaded', function() {
        let lastScrollPosition = 0;
        let initialPositions = {};

        window.addEventListener('scroll', function() {
            const currentScrollPosition = window.pageYOffset || document.documentElement.scrollTop;
            const scrollDirection = currentScrollPosition > lastScrollPosition ? 'down' : 'up';
            lastScrollPosition = currentScrollPosition;

            // Animating visible images in the upper and lower galleries
            animateGallery('.max20vh:not(.bottomline) img', scrollDirection, initialPositions, 'upper', 10);
            animateGallery('.max20vh.bottomline img', scrollDirection, initialPositions, 'lower', -10);

            // Animating hidden images
            animateHiddenImages('.gallery-item.hidden img', scrollDirection, initialPositions, 'hidden_upper', 10, 'left');
            animateHiddenImages('.gallery-item.hidden img', scrollDirection, initialPositions, 'hidden_lower', -10, 'right');
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
            // Depending on the direction, either move towards the center or away from it
            let newPosition = scrollDirection === 'down' ? positions[key] + offset : positions[key] - offset;
            // Ensure the position is within bounds (-100 to 100)
            newPosition = Math.min(100, Math.max(-100, newPosition));
            positions[key] = newPosition;
            img.style.transform = `translate3d(${newPosition}%, 0px, 0px)`;
        });
    }
</script>
@endsection




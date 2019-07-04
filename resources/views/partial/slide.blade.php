<style>
    .slick-slider-1 .slick-slide > div > div {
        float: left!important;
    }
    .slick-slider-1 .slick-slide > div > a {
        float: left!important;
    }
    .slick-slider-1 .slick-slide .slide-image {
        min-height: 450px;
        position: relative;
        background-size: cover;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
    }
    .slick-slider-1 .slick-slide .slide-image .slide-content {
        color: #ffffff;
        text-align: center;
    }


    <!-- Slide Show -->
    * {box-sizing: border-box;}
    body {font-family: Verdana, sans-serif;}
    .mySlides {display: none;}
    img {vertical-align: middle;}

    /* Slideshow container */
    .slideshow-container {
    max-width: 1000px;
    position: relative;
    margin: auto;
    }

    /* Caption text */
    .text {
    color: #f2f2f2;
    font-size: 18px;
    padding: 8px 12px;
    position: absolute;
    bottom: 8px;
    top: 50%;
      left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    }

    /* Number text (1/3 etc) */
    .numbertext {
    color: #f2f2f2;
    font-size: 12px;
    padding: 8px 12px;
    position: absolute;
    top: 0;
    }

    /* The dots/bullets/indicators */
    .dot {
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
    }

    .active {
    background-color: #717171;
    }

    /* Fading animation */
    .fade {
    -webkit-animation-name: fade;
    -webkit-animation-duration: 5s;
    animation-name: fade;
    animation-duration: 5s;
    }

    @-webkit-keyframes fade {
    from {opacity: .4}
    to {opacity: 1}
    }

    @keyframes fade {
    from {opacity: .4}
    to {opacity: 1}
    }

    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 300px) {
    .text {font-size: 11px}
    }

</style>

<!-- Slide Show -->
<div class="container-fluid">
    <div class="banner-home"></div>
    <div class="slideshow-container">
        <div class="mySlides fade">
            <div class="numbertext">1 / 5</div>
                <img src="http://www.goodaginginplace.com/storage/app/media/Home/1.png" style="width: 1000px;height: 300px">
            <div class="text"><h1>"Good Aging in Place"</h1></div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 5</div>
                <img src="http://www.goodaginginplace.com/storage/app/media/Home/2.jpg" style="width: 1000px;height: 300px">
            <div class="text"><h1>"สูงวัย สุขใจ ในบ้าน"</h1></div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 5</div>
                <img src="http://www.goodaginginplace.com/storage/app/media/Home/3.jpg" style="width: 1000px;height: 300px">
            <div class="text"><h1>"Good Aging in Place"</h1></div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">4 / 5</div>
                <img src="http://www.goodaginginplace.com/storage/app/media/Home/4.jpg" style="width: 1000px;height: 300px">
            <div class="text"><h1>"สูงวัย สุขใจ ในบ้าน"</h1></div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">5 / 5</div>
                <img src="http://www.goodaginginplace.com/storage/app/media/Home/5.jpg" style="width: 1000px;height: 300px">
            <div class="text"><h1>"Good Aging in Place"</h1></div>
        </div>

    </div>
    <br>

    <div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>
</div>
    <script>
        var slideIndex = 0;
        showSlides();

        function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        setTimeout(showSlides, 3500); // Change image every 3.5 seconds
        }
    </script>

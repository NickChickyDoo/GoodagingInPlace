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
    <div class="slideshow-container">
        <div class="mySlides fade">
            <img src="http://www.goodaginginplace.com/storage/app/media/Home/1.png" style="width: 1000px;height: 300px">
            <div class="text"><h1>"Good Aging in Place"</h1></div>
        </div>

        <div class="mySlides fade">
            <img src="http://www.goodaginginplace.com/storage/app/media/Home/2.jpg" style="width: 1000px;height: 300px">
            <div class="text"><h1>"สูงวัย สุขใจ ในบ้าน"</h1></div>
        </div>

        <div class="mySlides fade">
            <img src="http://www.goodaginginplace.com/storage/app/media/Home/3.jpg" style="width: 1000px;height: 300px">
            <div class="text"><h1>"Good Aging in Place"</h1></div>
        </div>

        <div class="mySlides fade">
            <img src="http://www.goodaginginplace.com/storage/app/media/Home/4.jpg" style="width: 1000px;height: 300px">
            <div class="text"><h1>"สูงวัย สุขใจ ในบ้าน"</h1></div>
        </div>

        <div class="mySlides fade">
            <img src="http://www.goodaginginplace.com/storage/app/media/Home/5.jpg" style="width: 1000px;height: 300px">
            <div class="text"><h1>"Good Aging in Place"</h1></div>
        </div>
    </div>
</div>
    <br>


</div>
    <script>
        var slideIndex = 0;
        showSlides();

        function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}

        slides[slideIndex-1].style.display = "block";
        setTimeout(showSlides, 3500); // Change image every 3.5 seconds
        }
    </script>

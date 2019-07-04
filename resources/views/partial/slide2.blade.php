<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-content w3-section" style="max-width:500px">
  <p>The w3-animate-fading class animates an element in and out (takes about 10 seconds).</p>
    <center>
        <img class="mySlides w3-animate-fading" src="http://www.goodaginginplace.com/storage/app/media/Home/1.png" style="width: 1000px;height: 300px">
        <img class="mySlides w3-animate-fading" src="http://www.goodaginginplace.com/storage/app/media/Home/2.jpg" style="width: 1000px;height: 300px">
        <img class="mySlides w3-animate-fading" src="http://www.goodaginginplace.com/storage/app/media/Home/3.jpg" style="width: 1000px;height: 300px">
        <img class="mySlides w3-animate-fading" src="http://www.goodaginginplace.com/storage/app/media/Home/4.jpg" style="width: 1000px;height: 300px">
        <img class="mySlides w3-animate-fading" src="http://www.goodaginginplace.com/storage/app/media/Home/5.jpg" style="width: 1000px;height: 300px">
    </center>
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}
  x[myIndex-1].style.display = "block";
  setTimeout(carousel, 9000);
}
</script>

</body>
</html>

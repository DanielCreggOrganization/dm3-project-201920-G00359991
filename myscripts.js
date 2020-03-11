function myFunction(){
    document.getElementById("demo").style.color = "blue";
}
// Activate Carousel
$("#demo").carousel();

// Enable Carousel Indicators
$(".carousel-item").click(function(){
  $("#demo").carousel(1);
});

// Enable Carousel Controls
$(".left").click(function(){
  $("#demo").carousel("prev");
});
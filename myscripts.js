function myFunction(){
    document.getElementById("demo").style.color = "blue";
}
// Activate Carousel
$("#mycarousel").carousel();

// Enable Carousel Indicators
$(".carousel-item").click(function(){
  $("#mycarousel").carousel(1);
});

// Enable Carousel Controls
$(".left").click(function(){
  $("#mycarousel").carousel("prev");
});
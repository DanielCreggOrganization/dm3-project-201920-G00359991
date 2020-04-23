<?php

session_start();

require 'database.php';

if( isset($_SESSION['user_id']) ){

	$records = $conn->prepare('SELECT id,email,password FROM users WHERE id = :id');
	$records->bindParam(':id', $_SESSION['user_id']);
	$records->execute();
	$results = $records->fetch(PDO::FETCH_ASSOC);

	$user = NULL;

	if( count($results) > 0){
		$user = $results;
	}

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome to your Web App</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>


        <link rel="stylesheet" href="styles.css">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
		
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="/mysql/js/jquery.shop.js"></script>
        <script type="text/javascript" src="myscripts.js"></script>

        <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
    width: 70%;
    margin: auto;
  }
  </style>


</head>
<body style="background-color:grey">

	<!-- <div class="header">
		<a href="/">Your App Name</a>
	</div> -->

	<?php if( !empty($user) ): ?>

		<br />Welcome <?= $user['email']; ?> 
		<br /><br />You are successfully logged in!
        <br /><br />
		<a href="logout.php">Logout?</a>

    
    <nav class="navbar navbar-expand-lg navbar-light bg-danger static-top">
    <div class="container">
      <a class="navbar-brand" href="index.php"><img class="img-responsive2" src="/mysql/img/mylogo.png"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" HREF = "about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" HREF = "gamesonsale.php">Games on Sale</a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" HREF = "contact.php">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

            <p id=demo>A store for old-school gamers!</p>

            <div class="container">
  
  <div id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li class="item1 active"></li>
      <li class="item2"></li>
      <li class="item3"></li>
      <li class="item4"></li>
      <li class="item5"></li>
      <li class="item6"></li>
      <li class="item7"></li>
      <li class="item8"></li>
      <li class="item9"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <a href="https://en.wikipedia.org/wiki/Tomb_Raider"><img src="/mysql/img/tomb_raider.jpg" alt="tomb raider" width="460" height="345"></a>
        <div class="carousel-caption">
        </div>
      </div>

      <div class="item">
        <a href="https://en.wikipedia.org/wiki/Tomb_Raider_II"><img src="/mysql/img/tomb_raider2.png" alt="tomb raider 2" width="460" height="345"></a>
        <div class="carousel-caption">
        </div>
      </div>

      <div class="item">
        <a href="https://en.wikipedia.org/wiki/Crash_Bandicoot"><img src="/mysql/img/crash.png" alt="crash" width="460" height="345"></a>
        <div class="carousel-caption">
        </div>
      </div>

      <div class="item">
        <a href="https://en.wikipedia.org/wiki/Crash_Bandicoot_2:_Cortex_Strikes_Back"><img src="/mysql/img/crash2.jpg" alt="crash 2" width="460" height="345"></a>
        <div class="carousel-caption">
        </div>
      </div>

      <div class="item">
        <a href="https://en.wikipedia.org/wiki/Crash_Bandicoot:_Warped"><img src="/mysql/img/crash3.jpg" alt="crash 3" width="460" height="345"></a>
        <div class="carousel-caption">
        </div>
      </div>
    
      <div class="item">
        <a href="https://en.wikipedia.org/wiki/Spyro"><img src="/mysql/img/spyro.jpg" alt="spyro" width="460" height="345"></a>
        <div class="carousel-caption">
        </div>
      </div>

      <div class="item">
        <a href="https://en.wikipedia.org/wiki/Resident_Evil"><img src="/mysql/img/res1.png" alt="res 1" width="460" height="345"></a>
        <div class="carousel-caption">
        </div>
      </div>

      <div class="item">
        <a href="https://en.wikipedia.org/wiki/Resident_Evil_2"><img src="/mysql/img/res2.png" alt="res 2" width="460" height="345"></a>
        <div class="carousel-caption">
        </div>
      </div>

      <div class="item">
        <a href="https://en.wikipedia.org/wiki/Resident_Evil_3:_Nemesis"><img src="/mysql/img/res3.jpg" alt="res 3" width="460" height="345"></a>
        <div class="carousel-caption">
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<script>
$(document).ready(function(){
  // Activate Carousel
  $("#myCarousel").carousel();
    
  // Enable Carousel Indicators
  $(".item1").click(function(){
    $("#myCarousel").carousel(0);
  });
  $(".item2").click(function(){
    $("#myCarousel").carousel(1);
  });
  $(".item3").click(function(){
    $("#myCarousel").carousel(2);
  });
  $(".item4").click(function(){
    $("#myCarousel").carousel(3);
  });
  $(".item5").click(function(){
    $("#myCarousel").carousel(4);
  });
  $(".item6").click(function(){
    $("#myCarousel").carousel(5);
  });
  $(".item7").click(function(){
    $("#myCarousel").carousel(6);
  });
  $(".item8").click(function(){
    $("#myCarousel").carousel(7);
  });
  $(".item9").click(function(){
    $("#myCarousel").carousel(8);
  });
 
    
  // Enable Carousel Controls
  $(".left").click(function(){
    $("#myCarousel").carousel("prev");
  });
  $(".right").click(function(){
    $("#myCarousel").carousel("next");
  });
});
</script>
            
            
            
            <!-- Footer -->
<footer class="page-footer font-small red pt-4">

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">

        

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">
    <p>© 2020 Copyright: RetroGames</p>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
             


	<?php else: ?>

		<h1>Please Login or Register</h1>
		<a href="login.php">Login</a> or
		<a href="register.php">Register</a>

	<?php endif; ?>

</body>
</html>
<html>
    <head>
        <link rel="stylesheet" href="styles.css">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

		<link rel="stylesheet" href="css/style1.css" media="screen" type="text/css" />
			<link rel="stylesheet" type+"text/css" href="homepage.css">
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.shop.js"></script>
    </head>
    <body style="background-color:grey">

    <nav class="navbar navbar-expand-lg navbar-light bg-danger static-top">
    <div class="container">
      <a class="navbar-brand" href="index.php"></a><img class="img-responsive2" src="/mysql/img/mylogo.png"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" HREF = "about.php">About</A>
          </li>
          <li class="nav-item">
            <a class="nav-link" HREF = "gamesonsale.php">Games on Sale</A>
          </li>
		  <li class="nav-item active">
            <a class="nav-link" HREF = "contact.php">Contact</A>
			
          </li>
        </ul>
      </div>
    </div>
  </nav>

<div class="container">
  <form method="post" name="myemailform" action="mail.php">

Enter Name:	<input type="text" name="name" placeholder="Full name">

Enter Email Address:	<input type="text" name="email" placeholder="Your e-mail">

Enter Subject: <input type="text" name="subject" placeholder="Subject">

Enter Message:	<textarea name="message" placeholder="Message"></textarea>

<input type="submit" name="submit">
</form>
</div>
</body>
</html>


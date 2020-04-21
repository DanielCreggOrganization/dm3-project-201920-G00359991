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
    <body style:background-color:grey>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
      <a class="navbar-brand" href="index.html"><img class="img-responsive2" src="/mysql/img/mylogo.png"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.html">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" HREF = "about.html">About</A>
          </li>
          <li class="nav-item active">
            <a class="nav-link" HREF = "gamesonsale.html">Games on Sale</A>
          </li>
          <li class="nav-item">
            <a class="nav-link" HREF = "checkout.html">Checkout</A>
          </li>
		  <li class="nav-item">
            <a class="nav-link" HREF = "contact.html">Contact</A>
			
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div id="content">
				<div id="products">
					<ul>
						<li>
							<div class="product-image">
								<img src="/mysql/img/tomb_raider.jpg" style="width:150px; height:150px;" alt="" />
							</div>
							<div class="product-description" data-name="Tomb Raider" data-price="4.99">
								<h3 class="product-name" style="color: black;">Tomb Raider</h3>
								<p class="product-price" style="background-color: grey">&euro; 4.99</p>
								<form class="add-to-cart" action="cart.html" method="get">
									<div>
										<label for="qty-1" style="color: grey">Quantity</label>
										<input type="text" name="qty-1" id="qty-1" class="qty" value="1" />
									</div>
									<p><input type="submit" value="Add to cart" class="btn" style="color:black;" /></p>
								</form>
							</div>
						</li>
						<li>
							<div class="product-image">
								<img src="/mysql/img/crash.jpeg" style="width:150px; height:150px;" alt="" />
							</div>
							<div class="product-description" data-name="Crash Bandicoot" data-price="5.99">
								<h3 class="product-name" style="color: black;" >Crash Bandicoot</h3>
								<p class="product-price" style="background-color: grey">&euro; 5.99</p>
								<form class="add-to-cart" action="cart.html" method="get">
									<div>
										<label for="qty-2" style="color: grey">Quantity</label>
										<input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
									</div>
									<p><input type="submit" value="Add to cart" class="btn" style="color:black;" /></p>
								</form>
							</div>
						</li>

						<li>
							<div class="product-image">
								<img src="/mysql/img/spyro.jpg" style="width:150px; height:150px;" alt="" />
							</div>
							<div class="product-description" data-name="Spyro" data-price="5.99">
								<h3 class="product-name" style="color: black;">Spyro</h3>
								<p class="product-price" style="background-color: grey">&euro; 5.99</p>
								<form class="add-to-cart" action="cart.html" method="get">
									<div>
										<label for="qty-3" style="color: grey">Quantity</label>
										<input type="text" style="color: black" name="qty-3" id="qty-3" class="qty" value="1" />
									</div>
									<p><input type="submit" value="Add to cart" class="btn" style="color:black;"/></p>
								</form>
							</div>
						</li>

  <!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>		
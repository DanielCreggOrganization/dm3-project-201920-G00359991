<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

		<link rel="stylesheet" href="style2.css" media="screen" type="text/css" />
			<link rel="stylesheet" type+"text/css" href="homepage.css">
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
		<script type="text/javascript" src="/mysql/js/jquery.shop.js"></script>
    </head>
    <body style="background-color:grey" id="checkout-page">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
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
            <a class="nav-link" HREF = "checkout.php">Checkout</A>
          </li>
		  <li class="nav-item">
            <a class="nav-link" HREF = "contact.php">Contact</A>
			
          </li>
        </ul>
      </div>
    </div>
  </nav>


<div id="site">
	<header id="masthead">
	
	</header>
	<div id="content">
		<h1>Checkout</h1>
			<table id="checkout-cart" class="shopping-cart">
			  <thead>
				<tr>
					<th scope="col">Item</th>
					<th scope="col">Qty</th>
					<th scope="col">Price</th>
				</tr>
			  </thead>
			  <tbody>
			  
			  </tbody>
			</table>
		 <div id="pricing">
			
			<p id="shipping">
				<strong>Shipping</strong>: <span id="sshipping"></span>
			</p>
			
			<p id="sub-total">
				<strong>Total</strong>: <span id="stotal"></span>
			</p>
		 </div>
		 
		 <form action="order.php" method="get" id="checkout-order-form">
		 	<h2>Your Details</h2>
		 	
		 	<fieldset id="fieldset-billing">
		 		<legend>Billing</legend>
		 		<div>
		 			<label for="name">Name</label>
		 			<input type="text" name="name" id="name" data-type="string" data-message="This field cannot be empty" />
		 		</div>
		 		<div>
		 			<label for="email">Email</label>
		 			<input type="text" name="email" id="email" data-type="expression" data-message="Not a valid email address" />
		 		</div>
		 		<div>
		 			<label for="city">City</label>
		 			<input type="text" name="city" id="city" data-type="string" data-message="This field cannot be empty" />
		 		</div>
		 		<div>
		 			<label for="address">Address</label>
		 			<input type="text" name="address" id="address" data-type="string" data-message="This field cannot be empty" />
		 		</div>
		 		<div>
		 			<label for="zip">ZIP Code</label>
		 			<input type="text" name="zip" id="zip" data-type="string" data-message="This field cannot be empty" />
		 		</div>
		 		<div>
		 			<label for="country">Country</label>
		 			<select name="country" id="country" data-type="string" data-message="This field cannot be empty">
		 				<option value="">Select</option>
		 				<option value="US">USA</option>
		 				<option value="IT">Italy</option>
		 			</select>
		 		</div>
		 	</fieldset>
		 	
		 	<div id="shipping-same">Same as Billing <input type="checkbox" id="same-as-billing" value=""/></div>
		 	
		 	<fieldset id="fieldset-shipping">
		 		
		 		<legend>Shipping</legend>
		 		
		 		<div>
		 			<label for="sname">Name</label>
		 			<input type="text" name="sname" id="sname" data-type="string" data-message="This field cannot be empty" />
		 		</div>
		 		<div>
		 			<label for="semail">Email</label>
		 			<input type="text" name="semail" id="semail" data-type="expression" data-message="Not a valid email address" />
		 		</div>
		 		<div>
		 			<label for="scity">City</label>
		 			<input type="text" name="scity" id="scity" data-type="string" data-message="This field cannot be empty" />
		 		</div>
		 		<div>
		 			<label for="saddress">Address</label>
		 			<input type="text" name="saddress" id="saddress" data-type="string" data-message="This field cannot be empty" />
		 		</div>
		 		<div>
		 			<label for="szip">ZIP Code</label>
		 			<input type="text" name="szip" id="szip" data-type="string" data-message="This field cannot be empty" />
		 		</div>
		 		<div>
		 			<label for="scountry">Country</label>
		 			<select name="scountry" id="scountry" data-type="string" data-message="This field cannot be empty">
		 				<option value="">Select</option>
		 				<option value="US">USA</option>
		 				<option value="IT">Italy</option>
		 			</select>
		 		</div>
		 	</fieldset>
		 	
		 	<p><input type="submit" id="submit-order" value="Submit" class="btn" /></p>
		 
		 </form>
	</div>
	
	

</div>

<footer id="site-info">
		Copyright &copy;RetroGames
	</footer>

</body>
</html>	

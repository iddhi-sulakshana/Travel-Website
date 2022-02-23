<!DOCTYPE html>
<html>
<head>
	<title>View Vehicle</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/main.css" type="text/css">
	<link rel="stylesheet" href="css/vehicleView.css" type="text/css">
	<link rel="icon" type="image/x-icon" href="/img/main/favicon.ico">
</head>
<body>
	<header>
		<a href="index.php"><img src="img/main/logo.png" class="main-logo"></a>
		<nav>
			<ul class="nav_link">
				<li><a href="home.php">Home</a></li>
				<li><a href="hotel-search.php">Hotels</a></li>
				<li><a href="vehicle_search.php">Vehicles</a></li>
				<li><a href="restaurant_search.php">Restaurants</a></li>
				<li><a href="packages.php">Packages</a></li>
				<li><a href="notices.php">Notices</a></li>
				<li><a href="attraction.php">Attraction</a></li>
				<li><a href="login.php" class="login"><button class="btn-animation">Login</button></a></li>
			</ul>
		</nav>
		<div class="burger">
			<div class="line1"></div>
			<div class="line2"></div>
			<div class="line3"></div>
		</div>
	</header>
	<hr>
	<section class="grid-container">
		<div class="grid-images">
			<img id="main-image" src="img/Vehicle/car.jpg">
			
			<img src="img/Vehicle/bus.jpg" class="sub-image">
			<img src="img/Vehicle/car.jpg"  class="sub-image">
			<img src="img/Vehicle/car1.jpg"  class="sub-image">
			<img src="img/Vehicle/3wheel.jpg"  class="sub-image">
		</div>
		<!-- grid details -->
		<div>
			<div class="grid-details">
			<h1>Rent a Car</h1>
			<p>Location	: Anuradhapura <i class="fa fa-map-marker" style="color: red" aria-hidden="true"></i> </p>
			<p>Seats		: 5 &#128186;</p>
			<p class="button price">Rs. 1200.00 / day</p>
			<form action="#" name="bookValues" method="GET">
				<label for="destination">Destination : </label>
				<select name="destination" required="">
					<option value="">Select Destination</option>
					<option value="Ampara">Ampara</option>
					<option value="Anuradhapura">Anuradhapura</option>
					<option value="Badulla">Badulla</option>
					<option value="Batticaloa">Batticaloa</option>
					<option value="Colombo">Colombo</option>
					<option value="Galle">Galle</option>
					<option value="Gampaha">Gampaha</option>
					<option value="Hambantota">Hambantota</option>
					<option value="Jaffna">Jaffna</option>
					<option value="Kalutara">Kalutara</option>
					<option value="Kandy">Kandy</option>
					<option value="Kegalle">Kegalle</option>
					<option value="Kilinochchi">Kilinochchi</option>
					<option value="Kurunegala">Kurunegala</option>
					<option value="Mannar">Mannar</option>
					<option value="Matale">Matale</option>
					<option value="Matara">Matara</option>
					<option value="Moneragala">Moneragala</option>
					<option value="Mullaitivu">Mullaitivu</option>
					<option value="Nuwara Eliya">Nuwara Eliya</option>
					<option value="Polonnaruwa">Polonnaruwa</option>
					<option value="Puttalam">Puttalam</option>
					<option value="Ratnapura">Ratnapura</option>
					<option value="Trincomalee">Trincomalee</option>
					<option value="Vavuniya">Vavuniya</option>
				</select>
				<div class="grid-form">

					<label style="grid-area: a;" for="check-in">Check In Date : </label>
					<input style="grid-area: c;" type="date" min="2022-02-14" max="2022-08-14" name="check-in" id="datein" required>
					
					<label style="grid-area: b;" for="check-out">Check Out Date : </label>
					<input style="grid-area: d;" type="date" min="2022-02-14" max="2022-08-14" name="check-out" id="dateout" required>
				</div>
				<div class="buttons">
					<input type="button" value="Check Availability" class="button">
					<input type="submit" value="Add to Cart" class="button">
				</div>
			</form>
		</div>
		</div>
		<div class="description">
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit sequi exercitationem provident deleniti distinctio, expedita dolores molestias aut quod? Quo vitae autem accusamus quis hic labore quaerat in quibusdam, molestiae iste temporibus, sapiente nam illo itaque eum fuga voluptatibus inventore, dolorem quas fugit? Ut id vel tempore dolorum? Molestiae neque incidunt perspiciatis inventore reprehenderit enim debitis quae modi architecto consectetur explicabo dolorem nemo nobis, cum eveniet at ipsam ab ea ut numquam distinctio sit atque. Eaque earum esse minima doloremque perspiciatis ratione a distinctio temporibus delectus, consequatur, deleniti enim vel accusantium perferendis debitis! Dolorem accusamus ipsa, alias sequi placeat id?</p>
		</div>
		<div class="review-overview">
			<h3>Review Overview</h3>
			<div class="rating-details">
				<p><b>4.3</b></p>
				<p>/5</p>
				<p><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-full"></i></p>
				<p>100 ratings</p>
			</div>
			<div class="seperate-rating">
				<div class="rate-wrapper">
					<p>5 <i class="fa fa-star"></i></p>
					<div class="rating">
						<div class="rating-value" style="width: 55%;"></div>
					</div>
					<p>55</p>
				</div>
				<div class="rate-wrapper">
					<p>4 <i class="fa fa-star"></i></p>
					<div class="rating">
						<div class="rating-value" style="width: 20%;"></div>
					</div>
					<p>20</p>
				</div>
				<div class="rate-wrapper">
					<p>3 <i class="fa fa-star"></i></p>
					<div class="rating">
						<div class="rating-value" style="width: 15%;"></div>
					</div>
					<p>15</p>
				</div>
				<div class="rate-wrapper">
					<p>2 <i class="fa fa-star"></i></p>
					<div class="rating">
						<div class="rating-value" style="width: 10%;"></div>
					</div>
					<p>10</p>
				</div>
				<div class="rate-wrapper">
					<p>1 <i class="fa fa-star"></i></p>
					<div class="rating">
						<div class="rating-value" style="width: 0%;"></div>
					</div>
					<p>0</p>
				</div>
			</div>
		</div>
		
		<div class="grid-review">
			<div class="review">
				<img src="img/main/user.png" alt="">
				<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe illo reprehenderit minima ullam, beatae harum natus ex sed voluptas quo nobis aliquid exercitationem voluptatem? Dignissimos.</p>
				<p>Name Names</p>
				<p>4.5 <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-full"></i></p>
			</div>
			<div class="review">
				<img src="img/main/user.png" alt="">
				<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe illo reprehenderit minima ullam, beatae harum natus ex sed voluptas quo nobis aliquid exercitationem voluptatem? Dignissimos.</p>
				<p>Name Names</p>
				<p>4.5 <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-full"></i></p>
			</div>
			<div class="review">
				<img src="img/main/user.png" alt="">
				<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe illo reprehenderit minima ullam, beatae harum natus ex sed voluptas quo nobis aliquid exercitationem voluptatem? Dignissimos.</p>
				<p>Name Names</p>
				<p>4.5 <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-full"></i></p>
			</div>
			<div class="review">
				<img src="img/main/user.png" alt="">
				<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe illo reprehenderit minima ullam, beatae harum natus ex sed voluptas quo nobis aliquid exercitationem voluptatem? Dignissimos.</p>
				<p>Name Names</p>
				<p>4.5 <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-full"></i></p>
			</div>
			<div class="review">
				<img src="img/main/user.png" alt="">
				<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe illo reprehenderit minima ullam, beatae harum natus ex sed voluptas quo nobis aliquid exercitationem voluptatem? Dignissimos.</p>
				<p>Name Names</p>
				<p>4.5 <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-full"></i></p>
			</div>
			<div class="review">
				<img src="img/main/user.png" alt="">
				<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe illo reprehenderit minima ullam, beatae harum natus ex sed voluptas quo nobis aliquid exercitationem voluptatem? Dignissimos.</p>
				<p>Name Names</p>
				<p>4.5 <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-full"></i></p>
			</div>
			<div class="review">
				<img src="img/main/user.png" alt="">
				<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe illo reprehenderit minima ullam, beatae harum natus ex sed voluptas quo nobis aliquid exercitationem voluptatem? Dignissimos.</p>
				<p>Name Names</p>
				<p>4.5 <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-full"></i></p>
			</div>
			<div class="review">
				<img src="img/main/user.png" alt="">
				<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe illo reprehenderit minima ullam, beatae harum natus ex sed voluptas quo nobis aliquid exercitationem voluptatem? Dignissimos.</p>
				<p>Name Names</p>
				<p>4.5 <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-full"></i></p>
			</div>
			<div class="review">
				<img src="img/main/user.png" alt="">
				<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe illo reprehenderit minima ullam, beatae harum natus ex sed voluptas quo nobis aliquid exercitationem voluptatem? Dignissimos.</p>
				<p>Name Names</p>
				<p>4.5 <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-full"></i></p>
			</div>
			<div class="review">
				<img src="img/main/user.png" alt="">
				<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe illo reprehenderit minima ullam, beatae harum natus ex sed voluptas quo nobis aliquid exercitationem voluptatem? Dignissimos.</p>
				<p>Name Names</p>
				<p>4.5 <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-full"></i></p>
			</div>
		</div>
	</section>
	
	<footer>
		<div class="footer-left">
			<h3 class="footer-headings">Links</h3>
			<a href="home.php">Home</a>
			<a href="home.php">Hotels</a>
			<a href="vehicle_search.php">Vehicles</a>
			<a href="restaurant.php">Restaurants</a>
			<a href="packages.php">Packages</a>
			<a href="notice.php">Notices</a>
			<a href="packages.php">Packages</a>
			<a href="attraction.php">Attraction</a>
			<a href="guides.php">Guides</a>
			<a href="home.php"><strong>Sign-in / Sign-up</strong></a>
		</div>
		<div class="footer-middle">
			<h3 class="footer-headings">Contact Us</h3>
			<ul>
				<li><a href="https://www.facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="https://www.youtube.com"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
				<li><a href="https://www.twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<li><a href="https://www.instagram.com"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
			</ul>
		</div>
		<div class="footer-right">
			<h3 class="footer-headings">About Us</h3>
			<p>PLAN’n GO, Sri Lanka’s first all in one experience traveling website. From booking transportation to reserving your favorite restaurants and hotels in Sri Lanka. Travelers across Sri Lanka can use PLAN’n GO site to discover where to stay, what to do, where to eat and how to get there. PLAN’n GO also allows for travelers to review their stays and share their traveling experience. PLAN’n GO makes planning easy no matter the trip type.</p>
		</div>
	</footer>
	<div class="copyright">
		<p>Copyright &copy 2022 PLAN'n GO All rights reserved</p>
	</div>
	<script src="js/main.js"></script>
	<script src="js/vehicleView.js"></script>
</body>
</html>
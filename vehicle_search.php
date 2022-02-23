<!DOCTYPE html>
<html>
<head>
	<title>Search For Vehicle</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" hreflang="" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/main.css" type="text/css">
	<link rel="stylesheet" href="css/vehicleSearch.css" type="text/css">
	<link rel="icon" type="image/x-icon" href="/img/main/favicon.ico">
</head>
<body>
	<header>
		<a href="index.php"><img src="img/main/logo.png" class="main-logo"></a>
		<nav>
			<ul class="nav_link">
				<li><a href="home.php">Home</a></li>
				<li><a href="hotel-search.php">Hotels</a></li>
				<li><a>Vehicles</a></li>
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
	<section class="advanced-search">
		<h3>Rent Vehicle</h3>
		<form name="advanced-search-form" method="GET" action="vehicle_search.php">
			<div class="form-content">
				<div class="wrapper wrapper0">
					<label>Pick-up Location</label>
					<input type="text" name="pick-up-location" placeholder="District" required="">
				</div>
				<div class="wrapper wrapper1">
					<label>Drop-off Location</label>
					<input type="text" name="drop-off-location" placeholder="District" required="">
				</div>
				<div class="wrapper wrapper2">
					<label>Vehicle Type</label>
					<div id="selector">
						<input type="text" id="vehicle-type" name="vehicle-type" value="Car" readonly="">
					</div>
					<div id="selection" class="selection">
						<div class="select-item active">Car</div>
						<div class="select-item">Van</div>
						<div class="select-item">Bicycle</div>
						<div class="select-item">3-Wheel</div>
					</div>
				</div>
				<div class="wrapper wrapper3">
					<button type="Submit" value="submit" class="btn-animation icon"><i class="fa fa-search" aria-hidden="true"></i></button>
					<button type="Submit" value="submit" class="btn-animation text">Search</button>
				</div>
			</div>
		</form>
	</section>
	<section class="grid-container">
			<button class="btn-animation" id="filter-toggle">Filters</button>
			<div class="filter-container">
				<div class="search-filter">
					<form name="search-filter-form" action="vehicle_search.php" method="GET">
						<label for="vehicle-seats">Seats</label>
						<div class="filter-common">
							<div>
								<input type="radio" name="vehicle-seats" value="2"> 2
							</div>
							<div>
								<input type="radio" name="vehicle-seats" value="3"> 3
							</div>
							<div>
								<input type="radio" name="vehicle-seats" value="4"> 4
							</div>
							<div>
								<input type="radio" name="vehicle-seats" value="5+"> 5+
							</div>
						</div>
						<hr> 
						<label for="vehicle-rating">Rating</label>
						<div class="filter-common rating">
							<div>
								<input type="checkbox" onchange="changeCheck(this)" class="" name="vehicle-rating" value="5"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>
							</div>
							<div>
								<input type="checkbox" onchange="changeCheck(this)" class="" name="vehicle-rating" value="4"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>
							</div>
							<div>
								<input type="checkbox" onchange="changeCheck(this)" class="" name="vehicle-rating" value="3"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>
							</div>
							<div>
								<input type="checkbox" onchange="changeCheck(this)" class="" name="vehicle-rating" value="2"><span class="fa fa-star"></span><span class="fa fa-star"></span>
							</div>
							<div>
								<input type="checkbox" onchange="changeCheck(this)" class="" name="vehicle-rating" value="1"><span class="fa fa-star"></span>
							</div>
						</div>
						<hr>
						<div class="filter-common price">
							<label for="min-price">Min Price(Rs.)</label>
							<input name="min-price" type="text" placeholder="Min Price">
							<label for="max-price">Max Price(Rs.)</label>
							<input name="max-price" type="text" placeholder="Max Price">
						</div>
						<hr>
						<button class="btn-animation" type="submit" name="search-filter-submit" value="submit">Search</button>
					</form>
				</div>
			</div>
			<div class="main-content">
				<div class="view-by">
					<button class="btn-animation active" id="grid-view" onclick="changeListGrid(this)"><i class="fa fa-th"></i> Grid View</button>
					<button class="btn-animation" id="list-view" onclick="changeListGrid(this)"><i class="fa fa-list-ul"></i> List View</button>
				</div>

				<hr>

				<div class="searched-content grid-view" id="listingContent">
					<div class="searched-item">
						<a href="vehicle_view.php">
						<img src="img/Vehicle/car1.jpg">
						<h3>Rent a Car</h3>
						<p>asdj weirn wenijnwe kjnfjdsnf inwen ksndfjn wesdnf kjdnsfkjk sndf kjni wntfrwn egj ngjwj nwn fwnin fwegn iwrj bnig nwregn ijwjng fijwen</p>
						<h1 class="product-price">$ 4500.<h2>00</h2></h1>
						<div>
							<p class="details">&#128186;5</p>
							<p class="details"><i class="fa fa-map-marker" aria-hidden="true"></i> Anuradhapura</p>
							<p class="details"><i class="fa fa-star checked"></i> 4.5</p>
						</div>
						</a>
					</div>
					<div class="searched-item">
						<a href="vehicle_view.php">
						<img src="img/Vehicle/car.jpg" class="product-image">
						<h3 class="product-title">Rent a car</h3>
						<p class="product-description">asdj weirn wenijnwe kjnfjdsnf inwen ksndfjn wesdnf kjdnsfkjk sndf kjni wntfrwn egj ngjwj nwn fwnin fwegn iwrj bnig nwregn ijwjng fijwen</p>
						<h1 class="product-price">$ 1500.<h2>00</h2></h1>
						<div>
							<p class="details">&#128186;5</p>
							<p class="details"><i class="fa fa-map-marker" aria-hidden="true"></i> Anuradhapura</p>
							<p class="details"><i class="fa fa-star checked"></i> 4.5</p>
						</div>
						</a>
					</div>
					<div class="searched-item">
						<a href="vehicle_view.php">
						<img src="img/Vehicle/3wheel.jpg" class="product-image">
						<h3 class="product-title">Rent a 3-Wheel</h3>
						<p class="product-description">asdj weirn wenijnwe kjnfjdsnf inwen ksndfjn wesdnf kjdnsfkjk sndf kjni wntfrwn egj ngjwj nwn fwnin fwegn iwrj bnig nwregn ijwjng fijwen</p>
						<h1 class="product-price">$ 1500.<h2>00</h2></h1>
						<div>
							<p class="details">&#128186;5</p>
							<p class="details"><i class="fa fa-map-marker" aria-hidden="true"></i> Anuradhapura</p>
							<p class="details"><i class="fa fa-star checked"></i> 4.5</p>
						</div>
						</a>
					</div>
					<div class="searched-item">
						<a href="vehicle_view.php">
						<img src="img/Vehicle/car.jpg" class="product-image">
						<h3 class="product-title">Rent a Car</h3>
						<p class="product-description">asdj weirn wenijnwe kjnfjdsnf inwen ksndfjn wesdnf kjdnsfkjk sndf kjni wntfrwn egj ngjwj nwn fwnin fwegn iwrj bnig nwregn ijwjng fijwen</p>
						<h1 class="product-price">$ 1500.<h2>00</h2></h1>
						<div>
							<p class="details">&#128186;4</p>
							<p class="details"><i class="fa fa-map-marker" aria-hidden="true"></i> Anuradhapura</p>
							<p class="details"><i class="fa fa-star checked"></i> 4.5</p>
						</div>
						</a>
					</div>
					<div class="searched-item">
						<a href="vehicle_view.php">
						<img src="img/Vehicle/bus.jpg" class="product-image">
						<h3 class="product-title">Rent a Bus</h3>
						<p class="product-description">asdj weirn wenijnwe kjnfjdsnf inwen ksndfjn wesdnf kjdnsfkjk sndf kjni wntfrwn egj ngjwj nwn fwnin fwegn iwrj bnig nwregn ijwjng fijwen</p>
						<h1 class="product-price">$ 1500.<h2>00</h2></h1>
						<div>
							<p class="details">&#128186;5</p>
							<p class="details"><i class="fa fa-map-marker" aria-hidden="true"></i> Anuradhapura</p>
							<p class="details"><i class="fa fa-star checked"></i> 4.5</p>
						</div>
						</a>
					</div>

					<div class="searched-item">
						<a href="vehicle_view.php">
						<img src="img/Vehicle/car.jpg" class="product-image">
						<h3 class="product-title">Rent a car</h3>
						<p class="product-description">asdj weirn wenijnwe kjnfjdsnf inwen ksndfjn wesdnf kjdnsfkjk sndf kjni wntfrwn egj ngjwj nwn fwnin fwegn iwrj bnig nwregn ijwjng fijwen</p>
						<h1 class="product-price">$ 1500.<h2>00</h2></h1>
						<div>
							<p class="details">&#128186;5</p>
							<p class="details"><i class="fa fa-map-marker" aria-hidden="true"></i> Anuradhapura</p>
							<p class="details"><i class="fa fa-star checked"></i> 4.5</p>
						</div>
						</a>
					</div>
				</div>
				<div class="page-nav" id="page-navigation">
					<button class="btn-animation pge-btn active">1</button>
					<button class="btn-animation pge-btn">2</button>
					<button class="btn-animation pge-btn">3</button>
					<button class="btn-animation pge-btn">4</button>
					<button class="btn-animation pge-btn">5</button>
				</div>
			</div>
	</section>
	

	<footer>
		<div class="footer-left">
			<h3 class="footer-headings">Links</h3>
			<a href="home.php">Home</a>
			<a href="home.php">Hotels</a>
			<a>Vehicles</a>
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
	<script src="js/vehicleSearch.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
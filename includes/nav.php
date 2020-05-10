<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<img src="https://i0.wp.com/www.cars4charity.nl/wp-content/uploads/2016/11/Mcdonalds-logo-png-free.png?fit=1000%2C1000&ssl=1"
			 style="height:24px; width: 29px;">
		<a class="navbar-brand" href="home.php">Soo Food Finder </a>

		<button class="navbar-toggler active" type="button" data-toggle="collapse" data-target="#navbarNav"
				aria-controls="navbarNav"
				aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<div class="col-md-9">
				<ul class="navbar-nav">
					<li class="nav-item ">
						<a class="nav-link  <?php echo ($page == "home" ? "active" : "")?> " href="home.php">Home<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item ">
						<a class="nav-link  <?php echo ($page == "locations" ? "active" : "")?> " href="locations.php">Locations<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link  <?php echo ($page == "preserveFood" ? "active" : "")?> " href="preserveFood.php">Preserving Food</a>
					</li>
					<li class="nav-item">
						<a class="nav-link  <?php echo ($page == "couponing" ? "active" : "")?> " href="couponing.php">Couponing sites</a>
					</li>
					<li class="nav-item">
						<a class="nav-link  <?php echo ($page == "vendors" ? "active" : "")?> " href="vendors.php">Vendors</a>
					</li>
					<li class="nav-item">
						<a class="nav-link  <?php echo ($page == "foodType" ? "active" : "")?> " href="foodType.php">Types of Food Sources</a>
					</li>
					<li class="nav-item">
						<a class="nav-link  <?php echo ($page == "community" ? "active" : "")?> " href="community.php">Communities</a>
					</li>
				</ul>
			</div>
			<div class="col-md-3">
				<div class="float-md-right">
					<img src="http://icons.iconarchive.com/icons/graphicloads/colorful-long-shadow/256/User-icon.png"
						 style="height: 30px; width:30px;">
					<a style="color:#fff" href="index.php">Log out</a>
				</div>
			</div>
		</div>
	</nav>


	 
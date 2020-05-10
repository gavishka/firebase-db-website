<?php $page = "home"; ?>

<html>

<head>
	<title>Food Finder Admin</title>
	
	

	<!--main css-->
	<link rel="stylesheet" type="text/css" href="assets/css/mainCS.css">

	<!-- boostrap css cdn-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!-- end boostrap js csn -->

	<!-- fontawesome -->
	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
</head>

<body>

	<!--main nav -->
		<?php include("includes/nav.php"); ?>
	<!--main nav -->

	<nav aria-label="breadcrumb" role="navigation">
	  <ol class="breadcrumb">
	  	<div class="col-11">
		<ol class="breadcrumb">
	    	<li class="breadcrumb-item" aria-current="page">Main Topics</li>
		</ol>
		</div>
		<div class="col-1">
		 <ol class="breadcrumb">
			<li class="breadcrumb-item  "><a href="home.php">Home</a></li>
		  </ol>
		</div>
	  </ol>
	</nav>
	<!-- navigation bar end -->

		<!-- start -->
 
<div class="col-md-12 back-img-home">
	<div class="row justify-content-center" style="margin-top: 90px;">
	 	<div class="col-sm-3">
	 	  	<a href="locations.php" style="text-decoration:none; color: inherit;">
		    <div class="card  box_shadow">
		      <div class="card-body">
		      	<div class="row">
		      		<h4 class="card-title"></i>Locations</h4>
			      	<div class="pull-right"><i class="fas fa-map-marker"></i></div>
		     	</div>
		      	<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
		        </div>
		    </div>
			</a>
		</div>
		 <div class="col-sm-3">
	 	  	<a href="preserveFood.php" style="text-decoration:none; color: inherit;">
		    <div class="card  box_shadow">
		      <div class="card-body">
		       <h4 class="card-title">Preserving Food</h4>
		        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
		        
		      </div>
		    </div>
			</a>
		</div>
		 <div class="col-sm-3">
	 	  	<a href="couponing.php" style="text-decoration:none; color: inherit;">
		    <div class="card  box_shadow">
		      <div class="card-body">
		       <h4 class="card-title">Couponing sites</h4>
		        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
		        
		      </div>
		    </div>
			</a>
		</div>
	</div>


</div>

<div class="col-md-12">
	<div class="row justify-content-center" style="margin-top: 30px;">
	 	<div class="col-sm-3">
	 	  	<a href="vendors.php" style="text-decoration:none; color: inherit;">
		    <div class="card  box_shadow">
		      <div class="card-body">
		       <h4 class="card-title">Vendors</h4>
		        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
		        
		      </div>
		    </div>
			</a>
		</div>
		 <div class="col-sm-3">
	 	  	<a href="foodType.php" style="text-decoration:none; color: inherit;">
		    <div class="card box_shadow ">
		      <div class="card-body">
		       <h4 class="card-title">Types of Food Sources</h4>
		        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
		        
		      </div>
		    </div>
			</a>
		</div>
		 <div class="col-sm-3">
	 	  	<a href="community.php" style="text-decoration:none; color: inherit;">
		    <div class="card  box_shadow">
		      <div class="card-body">
		       <h4 class="card-title">Communities</h4>
		        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
		        
		      </div>
		    </div>
			</a>
		</div>
	</div>
</div>
 




	


	<script src="https://www.gstatic.com/firebasejs/4.8.0/firebase.js"></script>
	<!-- main js -->
	 <script src="assets/js/main.js"></script>  
	
	

	<!-- boostrap js cdn -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	 
	
	
</body>

</html>

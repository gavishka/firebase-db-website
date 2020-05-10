
<?php $page = "community"; ?>

<html>

<head>
	<title>Food Finder Admin</title>
	
	

	<!--main css-->
	<link rel="stylesheet" type="text/css" href="assets/css/mainCS.css">

	<!-- boostrap css cdn-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!-- end boostrap js csn -->
</head>

<body>


	<!--main nav -->
		<?php include("includes/nav.php"); ?>
	<!--main nav -->

<nav aria-label="breadcrumb" role="navigation">
  <ol class="breadcrumb">
  	<div class="col-10">
	<ol class="breadcrumb">
    	<li class="breadcrumb-item" aria-current="page">Communities</li>
	</ol>
	</div>
	<div class="col-2">
	 <ol class="breadcrumb">
		<li class="breadcrumb-item  "><a href="home.php">Home</a></li>
		<li class="breadcrumb-item  "><a href="community.php">Communities</a></li>
	  </ol>
	</div>
  </ol>
</nav>
		<!-- navigation bar end -->

		<!-- start -->
<div class="col-md-12">
	<div class="row justify-content-center" style="margin-top: 90px;">
	 	<div class="col-sm-4">
	 	  	<a href="infants.php" style="text-decoration:none; color: inherit;">
		    <div class="card  box_shadow">
		      <div class="card-body">
		       <h4 class="card-title">Infants/Children</h4>
		        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
		        
		      </div>
		    </div>
			</a>
		</div>
		 <div class="col-sm-4">
	 	  	<a href="seniors.php" style="text-decoration:none; color: inherit;">
		    <div class="card  box_shadow">
		      <div class="card-body">
		       <h4 class="card-title">Seniors</h4>
		        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
		        
		      </div>
		    </div>
			</a>
		</div>
		 
	</div>


</div>

<div class="col-md-12">
	<div class="row justify-content-center" style="margin-top: 30px;">
	 	<div class="col-sm-4">
	 	  	<a href="prenatals.php" style="text-decoration:none; color: inherit;">
		    <div class="card  box_shadow">
		      <div class="card-body">
		       <h4 class="card-title">Prenatals</h4>
		        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
		        
		      </div>
		    </div>
			</a>
		</div>
		 <div class="col-sm-4">
	 	  	<a href="anish.php" style="text-decoration:none; color: inherit;">
		    <div class="card box_shadow ">
		      <div class="card-body">
		       <h4 class="card-title">Anishinaabee</h4>
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

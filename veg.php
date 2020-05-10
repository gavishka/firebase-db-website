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
  	<div class="col-6">
	<ol class="breadcrumb">
    	<li class="breadcrumb-item" aria-current="page">Vegetarian/Vegan Food Sources</li>
	</ol>
	</div>
	<div class="col-6">
	 <ol class="breadcrumb">
		<li class="breadcrumb-item  "><a href="home.php">Home</a></li>
		<li class="breadcrumb-item  "><a href="foodType.php">Different food type sources</a></li>
		<li class="breadcrumb-item  "><a href="veg.php">Vegetarian/Vegan Food Sources</a></li>
	  </ol>
	</div>
  </ol>
</nav>
	<!-- nav end -->

<div class="col-md-12">
<div class="row justify-content-center" style="margin-top:20px;">
	<div class="col-md-3">
		<div class="float-none">	
			<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
			  <li class="nav-item">
			    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">View Data</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Add New</a>
			  </li>
			  
			</ul>
			</div>
		 </div>
</div>
 
	<div class="row justify-content-center" style="margin-top: 9px;">
		<div class="col-12"  style="width:100%; height:70%; overflow-x: auto; overflow-y: auto; ">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <table class="table" id="table" style="font-size:13px;">
                            <tr>
                                <th>Location</th>
                                <th>Address</th>
                                <th>Email</th>
                                <th>Hours</th>
                                <th>Phone Number</th>
								<th>Website</th>
								<th>FaceBook</th>
                                <th>Service Description</th>
                                <!-- <th>Key</th> -->
                                <th>Update</th>
                                <th>Delete</th>
                            </tr>
                            <tbody id="table_body"> </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="row justify-content-center">
                            <div class="col-7">
                                <form role="form" id="testForm" class="form" style="font-size: 14px;">
                                    <p id="headertag" style="color:white">veg</p>
                                    <h3 style="margin-bottom: 25px; text-align: left;">Vegetarian/Vegan Food sources Details</h3>
                                    <div class="form-group row">
                                        <label for="locName" class="col-sm-2 col-form-label">Location Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="locationName" class="form-control" id="locName" required autofocus> </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="addr" class="col-sm-2 col-form-label">Address</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="address" class="form-control" id="addr"> </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="em" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="em" placeholder="you@example.com"> </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="hrs" class="col-sm-2 col-form-label">Hours</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="hrs"> </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="phn" class="col-sm-2 col-form-label">Phone</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="phn"> </div>
                                    </div>
									<div class="form-group row">
                                        <label for="web" class="col-sm-2 col-form-label">Website</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="web"> </div>
                                    </div>
									<div class="form-group row">
                                        <label for="face" class="col-sm-2 col-form-label">FaceBook</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="face"> </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="des" class="col-sm-2 col-form-label">Service Description</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="des"> </div>
                                    </div>
                                    <div class="form-group row float-md-right">
                                        <div class="col-sm-2">
                                            <button type="submit" class="btn btn-primary pull-right">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
	</div>
</div>



			 
		 
 




	<script src="https://www.gstatic.com/firebasejs/4.8.0/firebase.js"></script>
	<!-- main js -->
	<script src="assets/js/mainjs.js"></script>



	<!-- boostrap js cdn -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
     
	 
</body>

</html>
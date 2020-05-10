<html>

<head>
	<title>Food Finder Admin</title>

	<!--main css-->
	<link rel="stylesheet" type="text/css" href="assets/css/mainCS.css">

	<!-- boostrap css cdn-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!-- end boostrap js csn -->
</head>


<script src="https://www.gstatic.com/firebasejs/4.8.0/firebase.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyB7PQXTRsOr71d9OcRMEf5aBii7bTSS-V8",
    authDomain: "foodac-14d3d.firebaseapp.com",
    databaseURL: "https://foodac-14d3d.firebaseio.com",
    projectId: "foodac-14d3d",
    storageBucket: "foodac-14d3d.appspot.com",
    messagingSenderId: "753687877536"
  };
  firebase.initializeApp(config);
</script>

<script src="https://cdn.firebase.com/libs/firebaseui/2.4.1/firebaseui.js"></script>
    <link type="text/css" rel="stylesheet" href="https://cdn.firebase.com/libs/firebaseui/2.4.1/firebaseui.css" />
    <script type="text/javascript">
      // FirebaseUI config.
      var uiConfig = {
        signInSuccessUrl: 'home.php',
        signInOptions: [
          // Leave the lines as is for the providers you want to offer your users.
          firebase.auth.GoogleAuthProvider.PROVIDER_ID,
          firebase.auth.EmailAuthProvider.PROVIDER_ID
        ],
        // Terms of service url.
        tosUrl: '<your-tos-url>'
      };

      // Initialize the FirebaseUI Widget using Firebase.
      var ui = new firebaseui.auth.AuthUI(firebase.auth());
      // The start method will wait until the DOM is loaded.
      ui.start('#firebaseui-auth-container', uiConfig);
    </script>




 
<body style="overflow-y:hidden;">
  <div class="back-img">
    <div class="back-overlay">
      <div class=" row" style="margin: 0px">
        <div class="container">
          <div class="auth">
            <div class="auth-contennt" id="firebaseui-auth-container"></div> 
          </div>
         </div>
      </div>
    </div>
  </div>

		
	

	

	<!-- boostrap js cdn -->
	   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   
	<!-- end boostrap js cdn -->
</body>

</html>

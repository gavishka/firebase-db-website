function check(form)/*function to check userid & password*/
 {
  /*the following code checkes whether the entered userid and password are matching*/

	if(form.email.value == "sfernando@algomau.ca" && form.password.value == "abc")
   {
   
     window.open('homeNew.html')/*opens the target page while Id & password matches*/
   }
  else
  {

	alert("Error Password or Username 123")/*displays error message*/
   }
}

function showPassword() {
   
    var password_attr = $('#password').attr('type');
			if(password_attr != 'text') {
       
       $('.checkbox').addClass('show');
       $('#password').attr('type', 'text');
       
   } else {
       
       $('.checkbox').removeClass('show');
      $('#password').attr('type', 'password');
        
    }
    
}

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
  
//Submitting data
document.getElementById('testForm').addEventListener('submit',submitForm);

function submitForm(e){
	e.preventDefault();
	
	var locNameVal=getInputVal('locName');
	var addrVal=getInputVal('addr');
	var emVal=getInputVal('em');
	var hrsVal=getInputVal('hrs');
	var phnVal=getInputVal('phn');
	var webVal=getInputVal('web');
	var faceVal=getInputVal('face');
	var desVal=getInputVal('des');
	
	console.log(locNameVal,addrVal,emVal,hrsVal,phnVal,webVal,faceVal,desVal);
	
	savedata(locNameVal,addrVal,emVal,hrsVal,phnVal,webVal,faceVal,desVal);
}

function getInputVal(id){
	
	return document.getElementById(id).value;
}

  

function savedata(locNameVal,addrVal,emVal,hrsVal,phnVal,webVal,faceVal,desVal){
	
	var whichRef=document.getElementById("headertag").innerHTML;
	// alert(whichRef);
	
	var dataRef=firebase.database().ref('topics').child(whichRef);
	  
	var newLocdata=dataRef.push();
  
	var r = confirm("Do you want to save this record?");
    if (r == true){
      newLocdata.set({
      name:locNameVal,
      address:addrVal,
      email:emVal,
	  hours:hrsVal,
      phone:phnVal,
	  website:webVal,
	  facebook:faceVal,
      description:desVal
  });
      window.location.reload();
    }
}


//Updating data function
function updateData(nameValu, addrValu, emailValu, hrsValu, phoneValu, webValu, faceValu, desValu, pushId) {
            // A post entry.
            var dataToUpdate = {
				  name:nameValu,
				  address:addrValu,
				  email:emailValu,
				  hours:hrsValu,
				  phone:phoneValu,
				  website:webValu,
				  facebook:faceValu,
				  description:desValu
            };
			
			var whichRef=document.getElementById("headertag").innerHTML;
            var Row_Ref=firebase.database().ref('topics').child(whichRef).child(pushId);

            Row_Ref.once('value', function (snapshot) {

                    Row_Ref.update(dataToUpdate);
                
            });
			window.location.reload();
}

// var key;

// function deleteDATA(key){
	// alert('yu entered');
	// var userRef = firebase.database().ref().child("users").child(key);
            // userRef.once('value', function (snapshot) {

                // if (snapshot.val() == null) {
                    // /* does not exist */
                    // alert('does not exist');
                // } else {
                    // userRef.remove();
                // }

            // });
		// window.location.reload();
	
// }



// retrieving data to the table
// var rootRef = firebase.database().ref().child('users');

// rootRef.on("child_added", snap => {

  // var email = snap.child("emailval").val();
  // var password = snap.child("passwrd").val();
  // var message = snap.child("msgval").val();

  // $("#table_body").append("<tr><td>"+email+"</td><td>"+password+"</td><td>"+message+"</td><td><button>Remove</button></td></tr>");


// });

// Displaying data
var whichRef=document.getElementById("headertag").innerHTML;
var ref = firebase.database().ref('topics').child(whichRef);

            ref.on("value", function (snapshot) {
                snapshot.forEach(function (childSnapshot) {
                   
                    //var key = childSnapshot.key;
                    
                    var childData = childSnapshot.val();
					
					
                    var tr = '<tr data-id="'+childSnapshot.key+'">' +
                                '<td>' + childData.name + '</td>' +
                                '<td>' + childData.address + '</td>' +
                                '<td>' + childData.email + '</td>' +
								'<td>' + childData.hours + '</td>' +
								'<td>' + childData.phone + '</td>' +
								'<td>' + childData.website + '</td>' +
								'<td>' + childData.facebook + '</td>' +
								'<td>' + childData.description + '</td>' +
								// '<td>' + childSnapshot.key + '</td>' +
								'<td> <button data-event="update">Edit</button> </td>'+
								'<td> <button data-event="delete">Remove</button> </td>'+
                            '</tr> ';
                    $('#table_body').append(tr);
                    console.log(snapshot.val());
					
                });
				
				//to Delete
				$('[data-event="delete"]').click(function(e){
					e.preventDefault();
					
					var pushId = $(this).closest('tr').attr('data-id');
					var r = confirm("Do you want to delete this record?");
					if (r == true){
					ref.child(pushId).remove();
					
					window.location.reload();
					}
				});
				
				//to Update
				$('[data-event="update"]').click(function(e){
					e.preventDefault();
					
					var pushId = $(this).closest('tr').attr('data-id');
					
					var par = $(this).parent().parent();
					
					var tdlocName = par.children("td:nth-child(1)"); 
					var tdAddr = par.children("td:nth-child(2)"); 
					var tdEmail = par.children("td:nth-child(3)"); 
					var tdHrs = par.children("td:nth-child(4)"); 
					var tdPhone = par.children("td:nth-child(5)");
					var tdWeb = par.children("td:nth-child(6)");
					var tdFace = par.children("td:nth-child(7)");
					var tdDes = par.children("td:nth-child(8)"); 
					var tdeditBtn = par.children("td:nth-child(9)"); 
					
					// <textarea name="textarea"rows="10" cols="50">Write something here</textarea>
					
					tdlocName.html("<textarea name='textarea' rows='4' cols='20'>"+tdlocName.html()+"</textarea>"); 
					tdAddr.html("<textarea name='textarea' rows='4' cols='20'>"+tdAddr.html()+"</textarea>"); 
					// tdAddr.html("<input type='text' id='txtAddr' value='"+tdAddr.html()+"'/>"); 
					tdEmail.html("<textarea name='textarea' rows='4' cols='20'>"+tdEmail.html()+"</textarea>"); 
					tdHrs.html("<textarea name='textarea' rows='4' cols='50'>"+tdHrs.html()+"</textarea>"); 
					// tdHrs.html("<input type='text' id='txtHrs' value='"+tdHrs.html()+"'/>"); 
					tdPhone.html("<textarea name='textarea' rows='4' cols='20'>"+tdPhone.html()+"</textarea>"); 
					tdWeb.html("<textarea name='textarea' rows='4' cols='20'>"+tdWeb.html()+"</textarea>");
					tdFace.html("<textarea name='textarea' rows='4' cols='20'>"+tdFace.html()+"</textarea>");
					tdDes.html("<textarea name='textarea' rows='8' cols='50'>"+tdDes.html()+"</textarea>"); 
					// tdDes.html("<input type='text' id='txtDec' value='"+tdDes.html()+"'/>"); 
					tdeditBtn.html("<button data-event='save'> Save </button>");
					
					
						$('[data-event="save"]').click(function(e){
						e.preventDefault();
						
							// var pushId = $(this).closest('tr').attr('data-id');
							
							// var par = $(this).parent().parent();
							
							var tdlocName = par.children("td:nth-child(1)"); 
							var tdAddr = par.children("td:nth-child(2)"); 
							var tdEmail = par.children("td:nth-child(3)"); 
							var tdHrs = par.children("td:nth-child(4)"); 
							var tdPhone = par.children("td:nth-child(5)"); 
							var tdWeb = par.children("td:nth-child(6)");
							var tdFace = par.children("td:nth-child(7)");
							var tdDes = par.children("td:nth-child(8)"); 
							var tdsaveBtn = par.children("td:nth-child(9)"); 
							
							var nameValu = tdlocName.find("textarea").val();   
							var addrValu = tdAddr.find("textarea").val();     
							var emailValu = tdEmail.find("textarea").val();   
							var hrsValu = tdHrs.find("textarea").val(); 
							var phoneValu = tdPhone.find("textarea").val(); 
							var webValu = tdWeb.find("textarea").val();
							var faceValu = tdFace.find("textarea").val();
							var desValu = tdDes.find("textarea").val(); 
							tdsaveBtn.html("<button data-event='edit'> Edit </button>");


							 var b = confirm("Do you want to update this record?");
							 if (b == true){
								 
								updateData(nameValu,addrValu,emailValu,hrsValu,phoneValu,webValu,faceValu,desValu,pushId);
								// window.location.reload();
							 }
						});
				});
				
				
            }, function (error) {
                console.log("Error: " + error.code);
            });

// var table = document.getElementById('table');
                
                // for(var i = 1; i < table.rows.length; i++)
                // {
                    // table.rows[i].onclick = function()
                    // {
                         
                         // document.getElementById("em").value = this.cells[0].innerHTML;
                         // document.getElementById("pass").value = this.cells[1].innerHTML;
                         // document.getElementById("message").value = this.cells[2].innerHTML;
                    // };
                // }



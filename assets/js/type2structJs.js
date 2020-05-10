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
	
	var NameVal=getInputVal('siteName');
	var linkVal=getInputVal('link');
	var faceVal=getInputVal('face');
	console.log(NameVal,linkVal,faceVal);
	
	savedata(NameVal,linkVal,faceVal);
}

function getInputVal(id){
	
	return document.getElementById(id).value;
}

  

function savedata(NameVal,linkVal,faceVal){
	
	var whichRef=document.getElementById("headertag").innerHTML;
	// alert(whichRef);
	
	var dataRef=firebase.database().ref('topics').child(whichRef);
	  
	var newLocdata=dataRef.push();
  
	var r = confirm("Do you want to save this record?");
    if (r == true){
      newLocdata.set({
      name:NameVal,
      website:linkVal,
	  facebook:faceVal
  });
      window.location.reload();
    }
}


//Updating data function
function updateData(NameVal,linkVal,faceVal,pushId) {
            // A post entry.
            var dataToUpdate = {
				  name:NameVal,
				website:linkVal,
				facebook:faceVal
            };
			
			var whichRef=document.getElementById("headertag").innerHTML;
            var Row_Ref=firebase.database().ref('topics').child(whichRef).child(pushId);

            Row_Ref.once('value', function (snapshot) {

                    Row_Ref.update(dataToUpdate);
                
            });
			window.location.reload();
}


// Displaying data
var whichRef=document.getElementById("headertag").innerHTML;
var ref = firebase.database().ref('topics').child(whichRef);

            ref.on("value", function (snapshot) {
                snapshot.forEach(function (childSnapshot) {
                   
                    //var key = childSnapshot.key;
                    
                    var childData = childSnapshot.val();
					
					
                    var tr = '<tr data-id="'+childSnapshot.key+'">' +
                                '<td>' + childData.name + '</td>' +
                                '<td style="text-align: justify;">' + childData.website + '</td>' +
								'<td style="text-align: justify;">' + childData.facebook + '</td>' +
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
					
					var tdName = par.children("td:nth-child(1)"); 
					var tdlinkk = par.children("td:nth-child(2)");
					var tdface = par.children("td:nth-child(3)");					
					var tdeditBtn = par.children("td:nth-child(4)"); 
					
					// <textarea name="textarea"rows="10" cols="50">Write something here</textarea>
					
					tdName.html("<textarea name='textarea' rows='4' cols='20'>"+tdName.html()+"</textarea>"); 
					tdlinkk.html("<textarea name='textarea' rows='4' cols='20'>"+tdlinkk.html()+"</textarea>"); 
					tdface.html("<textarea name='textarea' rows='4' cols='20'>"+tdface.html()+"</textarea>"); 
					
					tdeditBtn.html("<button data-event='save'> Save </button>");
					
					
						$('[data-event="save"]').click(function(e){
						e.preventDefault();
						
							// var pushId = $(this).closest('tr').attr('data-id');
							
							// var par = $(this).parent().parent();
							
							var tdName = par.children("td:nth-child(1)"); 
							var tdlinkk = par.children("td:nth-child(2)"); 
							var tdface = par.children("td:nth-child(3)");	
							var tdsaveBtn = par.children("td:nth-child(4)");
							
							var nameValu = tdName.find("textarea").val();   
							var linkValu = tdlinkk.find("textarea").val();
							var faceValu = tdface.find("textarea").val();							
							tdsaveBtn.html("<button data-event='edit'> Edit </button>");


							 var b = confirm("Do you want to update this record?");
							 if (b == true){
								 
								updateData(nameValu,linkValu,faceValu,pushId);
								// window.location.reload();
							 }
						});
				});
				
				
            }, function (error) {
                console.log("Error: " + error.code);
            });





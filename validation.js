function VALIDATE()								 
         { 
	       var uname = document.forms["RegForm"]["name"];			 
       	   var no = document.forms["RegForm"]["number"]; 
	       var uemail = document.forms["RegForm"]["email"]; 
	       var upswd = document.forms["RegForm"]["pswd"]; 
	       var add = document.forms["RegForm"]["address"]; 
		   
	      if (uname.value == "")								 
      	 { 
		   window.alert("Please enter your name."); 
		   name.focus(); 
		   return false; 
	     } 
          
		  if (no.value == "")						 
	     { 
		   window.alert("Please enter your telephone number."); 
		   phone.focus(); 
		  return false; 
	     } 
		  
         
	      
	      if (uemail.value == "")								 
	     {  
		  window.alert("Please enter a valid e-mail address."); 
		  email.focus(); 
		  return false; 
	     } 

	     if (uemail.value.indexOf("@", 0) < 0)				 
	     { 
		  window.alert("Please enter a valid e-mail address."); 
		  email.focus(); 
		  return false; 
	     } 

	     if (uemail.value.indexOf(".", 0) < 0)				 
	     { 
	       window.alert("Please enter a valid e-mail address."); 
		   email.focus(); 
		   return false; 
	     } 

	     

	      if (upswd.value == "")					 
	     { 
		   window.alert("Please enter your password"); 
		   password.focus(); 
		   return false; 
	     } 
		 
		 
		  if (add.value == "")							 
	     { 
		  window.alert("Please enter your address."); 
		  name.focus(); 
		  return false; 
    	 }  
         
	     return true; 
      }
       
      
      </script> 
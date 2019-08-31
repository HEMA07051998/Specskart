function formValidation()  
{    
var uname = document.registration.name; 
var mob = document.registration.number; 
var uemail = document.registration.email; 
var passid = document.registration.pswd;    
var umsex = document.registration.sex;
var uadd = document.registration.address;  
var ucountry = document.registration.country; 
   




  
if(allLetter(uname))  
{  
if(allnumber(mob,10))  
{  
if(ValidateEmail(uemail))  
{ 
if(passid_validation(passid,7,12))  
{
if(validsex(umsex))  
{   
if(alphanumeric(uadd))
{
if(countryselect(ucountry))  
{
}  
}   
}  
}   
}  
}  
}  
 
return false;  
}  

function allLetter(uname)  
{   
var letters = /^[A-Za-z]+$/;  
if(uname.value.match(letters))  
{  
return true;  
}  
else  
{  
alert('Username must have alphabet characters only');  
uname.focus();  
return false;  
}  
}  

function allnumber(mob,mx)  
{  
var mob_len = mob.value.length;  
if (mob_len == 0 || mob_len < mx )  
{  
alert("Mobile number should not be empty / length should not be less than "+mx);  
mob.focus();  
return false;  
}  
return true;  
} 

function ValidateEmail(uemail)  
{  
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
if(uemail.value.match(mailformat))  
{    
return true;  
}  
else  
{  
alert("You have entered an invalid email address!");  
uemail.focus();  
return false;  
}  
} 

function passid_validation(passid,mx,my)  
{  
var passid_len = passid.value.length;  
if (passid_len == 0 ||passid_len >= my || passid_len < mx)  
{  
alert("Password should not be empty / length be between "+mx+" to "+my);  
passid.focus();  
return false;  
}  
return true;  
}  


function validsex(umsex)  
{    
  if(umsex==0)  
{  
alert('Select Male/Female');  
umsex.focus();  
return false;  
}  
else  
{    
return true;
}  
}

function alphanumeric(uadd)  
{   
var letters = /^[0-9a-zA-Z]+$/i;  
if(uadd.value.match(letters))  
{  
return true;  
}  
else  
{  
alert('User address must have alphanumeric characters only');  
uadd.focus();  
return false;  
}  
} 


function countryselect(ucountry)  
{  
if(ucountry==0)  
{  
alert('Select your country from the list');  
ucountry.focus();  
return false;  
}  
else  
{ 
alert('Form Successfully Submitted');
window.location.reload() 
return true;  
}  
}  





 



 

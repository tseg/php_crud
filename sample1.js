<script type="text/javascript">
var mess="";
function validate()
{   
	validateuserid();
    validateusername();
	validatecountry();
	validatezipcode();
	validateemail();
	validatesex();
	validatelangauge(); 
	validatedescription();
    if(mess.length==0)
		return true;
	else
	{
		alert(mess);
		mess="";
		return false;
	}
}

  
function validatedescription()
{
var desc=regform.desc.value;
var len=desc.length;
  if(len==0){
       mess= mess + "This is a required field \n";
   }
}

function validatelangauge()
{
//var langauges = [regform.en,regform.nonen];  //OR
var langauges = new Array(regform.en,regform.nonen);
var i;
var ischecked=0;
for(i=0;i<langauges.length;i++)
{
      if(langauges[i].checked){
           ischecked=1;
             break;
        }    
}
 //alert("Langauge is not chekecked!!!");
 //return false;
	if(ischecked==0)
		mess=mess + "Langauge is not chekecked!!! \n";
}

function validatesex()
{ 
var sex=document.regform.sex;
var i;
var ischecked=0;
for(i=0;i<sex.length;i++)
    {
   if(sex[i].checked){
		ischecked=1;
		break;
    }  
}
	if(ischecked==0)
		mess = mess+"Oh! PLease select your sex \n";   
}

function validateemail()
{
var email = document.regform.email.value;
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	if(email.match(mailformat)){
      // return true;   
	}else{
		mess = mess + "Mail is not in correct format";
	}
}

function validatezipcode(){
var zipcode=document.regform.zip.value;
var pattern=/^[0-9]+$/;
	if(zipcode.search(pattern)==-1){
		mess = mess + "Zip code must contain only numberic characters \n";
	}
}

function validatecountry()
{
var country=document.regform.country.value;
	if(country=="Default")
	{
		mess = mess + "Please select Your country \n";
	}
}

function validateusername()
{
var uname=document.regform.username.value;
//var uname=document.getElementById("username").value;
//var uname=regform.username.value;
 var pattern=/^[a-zA-Z0-9]+$/;
      //if(uname.match(pattern))
    if(uname.search(pattern) ==-1)
	{
		mess = mess + "User name should conatin only alphanumeric characters \n";
	}
}

function validateuserid()
{
var uid=document.regform.userid.value;
//var uid=document.getElementById("userid").value;
var len=uid.length;
   if(len==0 || len < 5 || len > 12)
             {
		mess = mess + "User id must between 5 and 12 \n";
		document.regform.userid.focus();
	}
}




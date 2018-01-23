/*
<!DOCTYPE html>
<html>
<body>

<form id="frm1" action="/action_page.php">
  First name: <input type="text" name="fname" value="Donald"><br>
  Last name: <input type="text" name="lname" value="Duck"><br><br>
  <input type="submit" value="Submit">
</form> 

<p>Click "Try it" to display the value of each element in the form.</p>

<button onclick="myFunction()">Try it</button>

<p id="demo"></p>
</body>
</html>
*/

function myFunction() {
    var x = document.getElementById("frm1");
    var text = "";
    var i;
    for (i = 0; i < x.length ;i++) {
        text += x.elements[i].value + "<br>";
    }
    document.getElementById("demo").innerHTML = text;
}

/*
Calculating the sum numbers from test box and prompt 

<!DOCTYPE html>
<html>
<head>

</head>
<body onload="sum()">

<p>
  Click the button to calculate x.
  <button onclick="myFunction()">Calculate</button>
</p>
<p>
  Enter first number:
  <input type="text" id="txt1" name="text1" value="1">
  Enter second number:
  <input type="text" id="txt2" name="text2" value="2">
</p>
<p id="demo"></p>

</body>
</html>
*/

function sum(){
	var n = 0;
	var n2 = 0;
	
	
	n = prompt("Please enter numbe 1:","");
	n2 = prompt("Please enter number 2:","");
	
	if (n != "" && n != null && n2 != "" && n2 != null) {
		var sum = parseInt(n) + parseInt(n2);
        alert("The sum of the nuber is :" + sum);
    }
}

function myFunction() {
  var y = parseInt(document.getElementById("txt1").value);
  var z = parseInt(document.getElementById("txt2").value);
  var x = y + z;
  document.getElementById("demo").innerHTML = x;
}



/*
<!DOCTYPE html>
<html>
<body>

<h1>JavaScript Can Validate Input</h1>

<p>Please input a number between 1 and 10:</p>

<input id="numb">

<button type="button" onclick="myFunction()">Submit</button>

<p id="demo"></p>
</body>
</html> 
*/

function myFunction() {
    var x, text;

    // Get the value of the input field with id="numb"
    x = document.getElementById("numb").value;

    // If x is Not a Number or less than one or greater than 10
    if (isNaN(x) || x < 1 || x > 10) {
        text = "Input not valid";
    } else {
        text = "Input OK";
    }
    document.getElementById("demo").innerHTML = text;
}


/*
The onmouseover and onmouseout Events

<!DOCTYPE html>
<html>
<body>

<div onmouseover="mOver(this)" onmouseout="mOut(this)" 
style="background-color:#D94A38;width:120px;height:20px;padding:40px;">
Mouse Over Me</div>
</body>
</html> 
*/

function mOver(obj) {
    obj.innerHTML = "Thank You"
}

function mOut(obj) {
    obj.innerHTML = "Mouse Over Me"
}

/*
<!DOCTYPE html>
<html>
<body>

<div onmousedown="mDown(this)" onmouseup="mUp(this)"
style="background-color:#D94A38;width:90px;height:20px;padding:40px;">
Click Me</div>

</body>
</html> 
*/

function mDown(obj) {
    obj.style.backgroundColor = "#1ec5e5";
    obj.innerHTML = "Release Me";
}

function mUp(obj) {
    obj.style.backgroundColor="#D94A38";
    obj.innerHTML="Thank You";
}

/*
<!DOCTYPE html>
<html>
<body>

<p>This example uses the addEventListener() method to attach a click event to a button.</p>

<button id="myBtn">Try it</button>

<p id="demo"></p>

</body>
</html> 
*/

document.getElementById("myBtn").addEventListener("click", displayDate);

function displayDate() {
    document.getElementById("demo").innerHTML = Date();
}

/*
JavaScript Cookies

<!DOCTYPE html>
<html>
<head>

</head>
<body onload="checkCookie()">
</body>
</html>
*/

function setCookie(cname,cvalue,exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function checkCookie() {
    var user=getCookie("username");
    if (user != "") {
        alert("Welcome again " + user);
    } else {
       user = prompt("Please enter your name:","");
       if (user != "" && user != null) {
           setCookie("username", user, 30);
       }
    }
}













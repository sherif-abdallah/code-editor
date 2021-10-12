<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>Code Now</title>
	<link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQYfItXzNSZG8mXr68MywNvSwjDkfjj10bWYQ&usqp=CAU" type="image/gif" sizes="16x16">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">

<style>
    	#codes{
    		width: 91%; height: 70%; border: White 2px solid; padding: 2em; margin: 1px; background: #272727; color: white; font-size: 26px;
        resize: none;
    		outline: none;
    		height: 90px;
    	}
    	.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #272727;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;

}


.fa {
  padding: 20px;

  width: 20px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
}

.fa:hover {
    opacity: 0.7;
    background: white;
    color: #272727;
}

.fa-facebook {
  background: #272727;
  color: white;
}

.fa-twitter {
  background: #272727;
  color: white;
}



.fa-linkedin {
  background: #272727;
  color: white;
}

.fa-youtube {
  background: white;
  color: black;
}

.fa-instagram {
  background: white;
  color: black;
}
#tittle{
	color: white;
	border: solid #272727 0.1px;
	width: fit-content;
	padding: 0.2em;
	cursor: pointer;
}
#tittle:hover{ color: #272727;
border: solid white 0.1px; }
body{font-family: Arial, Helvetica, sans-serif;}

::selection {
  color: red;
  background: yellow;
}


/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  outline: none;
}

/* Set a style for all buttons */
button {
  background-color: #272727;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}


.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
body {
 margin: 0;
}

.header {
  background-color: #272727;
  padding: 30px;
  text-align: center;
}

#navbar {
  overflow: hidden;
  background-color: #333;

}

#navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

#navbar a:hover {
  background-color: #ddd;
  color: black;
}

#navbar a.active {
  background-color: #04AA6D;
  color: white;
}


.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}
#h1adminpannel{
	color: #272727;
}
#h1adminpannel:hover{
	color: black;
}
</style>


</head>

<body bgcolor="black">



<div id="id01" class="modal">
  
  <form class="modal-content animate" name="f1" action = "/admin_pannel/authentication.php" onsubmit = "return validation()" method = "POST">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>

    </div>
<center><h1 id="h1adminpannel">Code Now</h1></center>
    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input  placeholder="Enter Username" type = "text" id ="user" name  = "user"  required>

      <label for="psw"><b>Password</b></label>
      <input type = "password" id ="pass" name  = "pass" placeholder="Enter Password" required>
        
      <button type="submit">Login</button>
    </div>




    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<br>
<br>


<center><h1 id='tittle'>Code Now</h1></center>

<form action="/code_now/run.php" method="post" >

<center>
<textarea type="text" name="name" id="codes" style="width: 65%;" title="HTML Code goes here..." placeholder="HTML Code goes here..." spellcheck="false"></textarea> 
</center>

<br><br>
<center><button title="Run the code" type="submit" class="button" style="vertical-align:middle"><span>Run </span></button></center>

<br>
<br>
<center>
<a href="https://www.facebook.com/profile.php?id=100068549361726" title="facebook" class="fa fa-facebook"></a>
<a href="#" title="twitter" class="fa fa-twitter"></a>
<a href="#" title="linkedin" class="fa fa-linkedin"></a>
<br><br> <hr>
</center>
<br>
<center title='sherif.rf.gd © Sherif Abdullah Mahmoud 2021'><a style="text-decoration: none;" href="http://sherif.rf.gd/"><p style="color:white;"> 2021 © sherif.rf.gd</p></a></center>
</form>
<script type="text/javascript">
console.log("Sherif Abdullah Mahmoud © 2021 sherif.rf.gd")
console.log("Created By Sherif Abdullah Mahmoud")
</script>
</body>
</html>
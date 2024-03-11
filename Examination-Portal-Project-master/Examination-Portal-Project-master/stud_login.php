<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<h1>, initial-scale=1.0">
    <title>LogIN</title>
    <style>
        body{
            background-color:#D3D3D3;
        }
        form {
            margin: 100px;
            width : 550px;
            margin-left: 380px;
            padding: 10px;
            background-color: #FAF0E6;
  border: 3px solid #f1f1f1;
}

/* Full-width inputs */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

/* Add a hover effect for buttons */
button:hover {
  opacity: 0.8;
}

/* Extra style for the cancel button (red) */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the avatar image inside this container */


/* Add padding to containers */
.container {
  padding: 16px;
}

/* The "Forgot password" text */
span.psw {
  float: right;
  padding-top: 16px;
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
    </style>

<script>
    function validateForm() {  var a = document.form["form"]["pwd"].value; if(a == null || a == ""){document.getElementById("message").innerHTML = "** Password must be filled out";return false;}
      }
</script>


</head>
<body>
 <!--<form action="account.php?q=1">
  <button type="submit">Hello</button>
  </form>-->
<form action="sign.php?q=account.php" name="form" method="POST">
  
  <div class="container">

    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Student Name" name="name" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="uname" required>

    <label for="password"><b>Password</b></label>
    <input id="pwd" type="password" placeholder="Enter Password" name="psw" required>
    <br><span id = "message" style="color:red"> </span> <br>
    <button type="submit">Login</button>
    
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>

<!--
<div class="bg1">
<div class="row">

<div class="col-md-7"></div>
<div class="col-md-4 panel">
   
  <form class="form-horizontal" name="form" action="account.php" method="POST">
<fieldset>


<div class="form-group">
  <label class="col-md-12 control-label title1" for="email"></label>
  <div class="col-md-12">
    <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-12 control-label" for="password"></label>
  <div class="col-md-12">
    <input id="password" name="password" placeholder="Enter your password" class="form-control input-md" type="password">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-12 control-label" for=""></label>
  <div class="col-md-12"> 
    <form action="stud_login.php">
    <input  type="submit" class="sub" value="Log In" class="btn btn-primary "/>
    </form>
    </div>
</div> 
</fieldset>
</form>

</div>
</div></div>
</div>
-->


</body>
</html>
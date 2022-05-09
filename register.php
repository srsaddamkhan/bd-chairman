<!DOCTYPE html>
<html>
  <head>
	  <meta charset="utf-8">
	  <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="css/register.css">

  </head>
   
  <body>
    <!--------------- Form --------------->
    <div class="R-cbox">
      <form class="" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
      	 
        <div class="container">
           
          <input id="input1" type="text" name="text" placeholder="Name:" value="">
          <input id="input2" type="text" name="text" placeholder="First Name" value="">
          <input id="input3" type="text" name="text" placeholder="Last Name" value="">
          <input id="input4" type="text" name="text" placeholder="Address:" value="">
          <input id="input5" type="number" name="number" placeholder="Phone number" value="">
          <input id="input6" type="email" name="email" placeholder="Email" value="">
          <input id="input7" type="password" name="password" placeholder="Password Min:6 character" value="">
          <input id="input8" type="password" name="passwor]" placeholder="Confirm Password" value="">
      	  
      	 	<button type="submit" id="btn" name="log"><a href="#">Register Now</a></button>
          <span>Allready have an account?</span>
          <span><a id="atag" href="login.php">Login</a></span>
        </div>
      
      </form>    
    </div>  
    <!------------- End Form ------------->
  
  </body>
</html>
<!DOCTYPE html>
<html>
  <head>
	  <meta charset="utf-8">
	  <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">

    <?php 

      include 'backend/connection.php';

        $error='';
          
          if(isset($_POST['login']))
            {
          		$username = trim($_POST['email']);
          		$password = trim($_POST['password']);

              if (!empty($username) && !empty($password)) {
                  $sql="SELECT * FROM `bd_chairman_admin` WHERE `email`='$username' AND `password`='$password'";
                  $res=mysqli_query($con,$sql);
                  $data=mysqli_fetch_assoc($res);
                  echo $data['email'];
                  if (strcasecmp($username, $data['email'])==0 && strcasecmp($password, $data['password'])==0) 
                  {
                    $_SESSION['email']=$data['email'];
                    $_SESSION['id']=$data['id'];
                    header('Location: backend/admin.php');
                  }
                  else
                   {
                    $error="INVALID USER ID OR PASSWORD 1";
                   }
                 }
              $error="INVALID USER ID OR PASSWORD 2";
          	}
  ?>

  </head>
   
  <body>
    <!------------- Login -------------->
    <div class="login-cbox">
      <form class="" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
      	 
        <div class="container">
          <label for="">BD Chairman</label><br>
          <span style="color: blue"><?php echo($error) ?></span>
      	 	<input type="text" name="email" placeholder="Email" value="">
      	 	<input type="password" name="password" placeholder="Password" value="">
      	 	<a href="#">Forgot Password ?</a>
      	 	<button type="submit" class="btn" name="login">Login</button>
        </div>

      </form>    
    </div>  
    <!----------- End Login ------------>

  </body>
</html>
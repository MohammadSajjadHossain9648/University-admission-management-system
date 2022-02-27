<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
        <title> ADMIN LOGIN</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

        <style>
            
            .container{
                position: relative;
            }
            .card{
                position: absolute;
                top: 150px;
                height: 370px;
                width: 400px;
                background-color: dimgrey;
            }
            .input-group-prepend span{
                width: 40px;
                background-color:yellowgreen;
                color: black;
            }
   
            h3,.remember,.links{
                color: white;
            }
            .remember input
            {
                width: 20px;
                height: 20px;
                margin-left: 15px;
                margin-right: 5px;
            }
            .login{
                color: black;
                background-color:yellowgreen;
                width: 100px;
            }
            .login:hover{
                background-color: white;
            }
        </style>
</head>
<body>
        <div class="container">
	       <div class="d-flex justify-content-center">
		      <div class="card">
			     <div class="card-header" style="text-align: center;">
				    <h3>Sign In</h3>
			     </div>
			     <div class="card-body">
				    <form action="" method="post">
					   <div class="input-group form-group">
                           <div class="input-group-prepend">
                               <span class="input-group-text"><i class="fas fa-user"></i></span>
                           </div>
                           <input type="text" class="form-control" placeholder="admin_id" name="admin_id" maxlength="10">
                        </div>
					   <div class="input-group form-group">
                           <div class="input-group-prepend">
                               <span class="input-group-text"><i class="fas fa-key"></i></span>
                           </div>
						  <input type="password" class="form-control" placeholder="password" name="password">
					   </div>
					   <div class="row align-items-center remember">
						  <input type="checkbox">Remember Me
					   </div>
					   <div class="form-group">
                           <input type="submit" name="submit" value="Login" class="btn float-right login">
					   </div>
				    </form>
			 </div>
			 <div class="card-footer">
                 <div class="d-flex justify-content-center">
					<a href="#">Forgot your password?</a>
				</div>
				<div class="d-flex justify-content-center links">
					Don't have an account?<a href="http://localhost/admissionmanagement/admin/registration.php">Sign Up</a>
				</div>
			</div>
		</div>
	  </div>
    </div>
</body>
</html>

    
    
<?php

if(isset($_POST["submit"]))
{
  $link=mysqli_connect("localhost","root","");
  mysqli_select_db($link,"ouams");
  $res=mysqli_query($link,"select * from admin_registration where admin_id = '$_POST[admin_id]' && password = '$_POST[password]' && status='yes'");
  $count=0;
  $count=mysqli_num_rows($res);
  
  if($count == 0)
  {
    ?>
     <p><b>invalid user_id or password. </b></p>
<?php
  }

  else
  {
    $_SESSION["adminid"]=$_POST["admin_id"];
    ?>
 
    <script type="text/javascript">
        window.location="adminpageindex.html";
    </script>
<?php
  }

}
?>
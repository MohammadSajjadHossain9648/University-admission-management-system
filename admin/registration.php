<!DOCTYPE html>
<html>
    <head>
        <title> ADMIN REGISTRATION</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        
        <style>
            body
            {
                background-color:deepskyblue;
            }
            container
            {
                position: relative;
            }
            form
            {
                position: absolute;
                top: 80px;
                left: 500px;
            }
            h3
            {
                text-align: center;
                margin-bottom: 20px;
            }
	    input
            {
                text-align: center;
                text-transform: uppercase;
            }
        </style>
    </head>
    <body>
        <div class="container">
             <form action="http://localhost/admissionmanagement/admin/registration.php" method="post">
                 <h3>Admin Registration</h3>
                 <div class="form-group">
                    <label for="id">Admin Id</label><br>
                    <input type="text" name="admin_id" id="id" size="50" maxlength="10">
                </div>
                <div class="form-group">
                    <label for="fname">Admin Firstname</label><br>
                    <input type="text" name="admin_firstname" id="fname" size="50">
                </div>
                 <div class="form-group">
                    <label for="lname">Admin Lastname</label><br>
                    <input type="text" name="admin_lastname" id="lname" size="50">
                </div>
                <div class="form-group">
                    <label for="password">Admin Password</label><br>
                    <input type="password" name="password" id="password" size="50">
                </div>
                <div class="form-group">
                    <label for="address">Admin Address</label><br>
                    <input type="text" name="address" id="address" size="50">
                </div>
                <div class="form-group">
                    <label for="phone">Admin Contract no</label><br>
                    <input type="text" name="phoneno" id="phone" size="50" maxlength="11">
                </div>
                <input type="submit" class="float-right" name="submit" value="Submit">
            </form>
        </div>
        
        <?php
        if(isset($_POST["submit"]))
          {
            $link=mysqli_connect("localhost","root","");
            mysqli_select_db($link,"ouams");
            mysqli_query($link,"insert into admin_registration values('$_POST[admin_id]','$_POST[admin_firstname]','$_POST[admin_lastname]','$_POST[password]','$_POST[address]','$_POST[phoneno]','no')");
       	 }
        ?>
    </body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <title> STUDENT REGISTRATION</title>
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
                left: 350px;
            }
            h3
            {
                text-align: center;
                margin-bottom: 20px;
            }
            td,input
            {
                text-align: center;
                text-transform: uppercase;
            }
            input[type=submit]
            {
                text-transform: none;
            }
        </style>
    </head>
    <body>
        <div class="container">
             <form action="http://localhost/admissionmanagement/student/UNIregistration.php" method="post">
                 <h3>Student Registration</h3>
                 <div class="form-group">
                    <label for="roll"></label>Roll No<br>
                    <input type="text" name="hsc_roll" id="roll" size="100" maxlength="6">
                </div>
                 <div class="form-group">
                    <label for="uni">University Name</label><br>
                    <input type="text" name="university_name" id="uni" size="100" maxlength="30">
                </div>
                 <div class="form-group">
                    <label for="unit">Unit</label><br>
                    <input type="text" name="unit" id="unit" size="50" maxlength="3">
                </div>
                <div class="form-group">
                    <label for="code">Confirmation code</label><br>
                    <input type="text" name="code" id="code" size="100" maxlength="20">
                </div>
                 <div class="form-group">
                    <label for="gmail">Gmail</label><br>
                    <input type="email" name="gmail" id="gmail" size="100" maxlength="20">
                </div>
                <input type="submit" class="float-right" name="submit" value="Submit">
            </form>
        </div>
        
        <?php
        if(isset($_POST["submit"]))
        {
            $link=mysqli_connect("localhost","root","");
            mysqli_select_db($link,"ouams");
            mysqli_query($link,"insert into university_registration values('$_POST[hsc_roll]','$_POST[university_name]','$_POST[unit]','$_POST[code]','$_POST[gmail]','no')");
        }
        ?>
    </body>
</html>
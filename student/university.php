<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>APPLY</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            body
            {
                background-color: aqua;
            }
            div
            {
                text-align: center;
                border: 2px black solid;
                padding: 2px;
                margin: 10px;
                background-color: chartreuse;
            }
            header
            {
                width:100%;
                height: 50px;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <header>
            <h1>ELIGIBLE TO APPLY</h1>
        </header>
        <section>
        <div id="du1" style="display:none">
            <h3><a href="http://localhost/admissionmanagement/student/uniregistration.php">DHAKA UNIVERSITY KA UNIT</a></h3>
        </div>
        <div id="du2" style="display:none">
            <h3><a href="http://localhost/admissionmanagement/student/uniregistration.php">DHAKA UNIVERSITY KHA UNIT</a></h3>
        </div>
        <div id="du3" style="display:none">
            <h3><a href="http://localhost/admissionmanagement/student/uniregistration.php">DHAKA UNIVERSITY GA UNIT</a></h3>
        </div>
        <div id="du4" style="display:none">
            <h3><a href="http://localhost/admissionmanagement/student/uniregistration.php">DHAKA UNIVERSITY GHA UNIT</a></h3>
        </div>
        <div id="du5" style="display:none">
            <h3><a href="http://localhost/admissionmanagement/student/uniregistration.php">DHAKA UNIVERSITY CHA UNIT</a></h3>
        </div>
        <div id="buet1" style="display:none">
            <h3><a href="http://localhost/admissionmanagement/student/uniregistration.php">BUET UNIVERSITY KA UNIT</a></h3>
        </div>
        <div id="buet2" style="display:none">
            <h3><a href="http://localhost/admissionmanagement/student/uniregistration.php">BUET UNIVERSITY KHA UNIT</a></h3>
        </div>
        <div id="cu1" style="display:none">
            <h3><a href="http://localhost/admissionmanagement/student/uniregistration.php">CHITTAGONG UNIVERSITY A UNIT</a></h3>
        </div>
        <div id="cu2" style="display:none">
            <h3><a href="http://localhost/admissionmanagement/student/uniregistration.php">CHITTAGONG UNIVERSITY B UNIT</a></h3>
        </div>
        <div id="cu3" style="display:none">
            <h3><a href="http://localhost/admissionmanagement/student/uniregistration.php">CHITTAGONG UNIVERSITY C UNIT</a></h3>
        </div>
        <div id="cu4" style="display:none">
            <h3><a href="http://localhost/admissionmanagement/student/uniregistration.php">CHITTAGONG UNIVERSITY D UNIT</a></h3>
        </div>
        <div id="cou1" style="display:none">
            <h3><a href="http://localhost/admissionmanagement/student/uniregistration.php">COMILLA UNIVERSITY A UNIT</a></h3>
        </div>
        <div id="cou2" style="display:none">
            <h3><a href="http://localhost/admissionmanagement/student/uniregistration.php">COMILLA UNIVERSITY B UNIT</a></h3>
        </div>
        <div id="cou3" style="display:none">
            <h3><a href="http://localhost/admissionmanagement/student/uniregistration.php">COMILLA UNIVERSITY C UNIT</a></h3>
        </div>
        </section>
        <?php
            $link = mysqli_connect("localhost","root","");
	    	mysqli_select_db($link,"ouams");
		    $res=mysqli_query($link,"select * from student_registration where hsc_roll='$_SESSION[hscroll]'");
		
		  while($row=mysqli_fetch_array($res))
		  {
            $group=$row["group"];    
            $session=$row["session"];
            $ssccgpa=$row["ssccgpa"];echo "</td><br>";
            $code1=$row["code1"];$name1=$row["name1"];$grade=$row["grade1"];
            $code2=$row["code2"];$name2=$row["name2"];$grade2=$row["grade2"];
              $code3=$row["code3"];$name3=$row["name3"];$grade3=$row["grade3"];
              $code4=$row["code4"];$name4=$row["name4"];$grade4=$row["grade4"];
              $code5=$row["code5"];$name5=$row["name5"];$grade5=$row["grade5"];
              $code6=$row["code6"];$name6=$row["name6"];$grade6=$row["grade6"];
              $code7=$row["code7"];$name7=$row["name7"];$grade7=$row["grade7"];
              $optional=$row["optional"];
              $cgpa=$row["cgpa"];
              $cgpa2=$row["cgpa2"];
              $total=$row["total"];
              $average=$row["average"];
		}
        for($x=1; $x<=14; $x++)
        {
            if($x==1 && $total >= 8.00 && $group == "SCIENCE")
            {
                ?>
                <script type="text/javascript">
                    document.getElementById("du1").style.display='block';
                </script>
            <?php
            }
            else if($x==2 && $total >= 7.00 && $group == "HUMANITIES")
            {
                ?>
                <script type="text/javascript">
                    document.getElementById("du2").style.display='block';
                </script>
            <?php
            }
            else if($x==3 && $total >= 7.50 && $group == "BUSINESS STUDIES")
            {
                ?>
                <script type="text/javascript">
                    document.getElementById("du3").style.display='block';
                </script>
            <?php
            }
            else if($x==4 && $total >= 7.00 && ($ssccgpa>=3.00 && $cgpa>=3.00))
            {
                ?>
                <script type="text/javascript">
                    document.getElementById("du4").style.display='block';
                </script>
            <?php
            }
            else if($x==5 && $total >= 6.50 && ($ssccgpa>=3.00 && $cgpa>=3.00))
            {
                ?>
                <script type="text/javascript">
                    document.getElementById("du5").style.display='block';
                </script>
            <?php
            }
            else if($x==6 && $group == "SCIENCE" && ($ssccgpa>=4.00 && $cgpa>=4.00) && (group4=="A+" && group5=="A+" && group7=="A+" &&( group1=="A"||group1=="A+" )&& (group2=="A"||group2=="A+")))
            {
                ?>
                <script type="text/javascript">
                    document.getElementById("buet1").style.display='block';
                </script>
            <?php
            }
            else if($x==7 && $group == "SCIENCE" && ($ssccgpa>=4.00 && $cgpa>=4.00) && (group4=="A+" && group5=="A+" && group7=="A+" &&( group1=="A"||group1=="A+" )&& (group2=="A"||group2=="A+")))
            {
                ?>
                <script type="text/javascript">
                    document.getElementById("buet2").style.display='block';
                </script>
            <?php
            }
            else if($x==8 && $group == "SCIENCE" && $average>=3.50 && $total>=7.50)
            {
                ?>
                <script type="text/javascript">
                    document.getElementById("cu1").style.display='block';
                </script>
            <?php
            }
            else if($x==9 && (($group == "SCIENCE" && $average>=3.25 && $total>=7.00)||($group == "BUSINESS STUDIES" && $average>=2.75 && $total>=6.50)||($group == "HUMANITIES" && $average>=3.25 && $total>=7.00)))
            {
                ?>
                <script type="text/javascript">
                    document.getElementById("cu2").style.display='block';
                </script>
            <?php
            }
            else if($x==10 && $group == "BUSINESS STUDIES" && $average>=3.50 && $total>=7.50)
            {
                ?>
                <script type="text/javascript">
                    document.getElementById("cu3").style.display='block';
                </script>
            <?php
            }
            else if($x==11 && $average>=3.25 && $total>=7.00)
            {
                ?>
                <script type="text/javascript">
                    document.getElementById("cu1").style.display='block';
                </script>
            <?php
            }
            else if($x==12 && $group == "SCIENCE" && ($ssccgpa>=3.00 && $cgpa>=3.00) && $total>=6.50)
            {
                ?>
                <script type="text/javascript">
                    document.getElementById("cou1").style.display='block';
                </script>
            <?php
            }
            else if($x==13 && (($group == "SCIENCE" && $total>=6.00)||($group == "BUSINESS STUDIES" && $total>=7.00)||($group == "HUMANITIES" && $total>=6.00)))
            {
                ?>
                <script type="text/javascript">
                    document.getElementById("cou2").style.display='block';
                </script>
            <?php
            }
            else if($x==14 && (($group == "SCIENCE" && $total>=6.00)||($group == "BUSINESS STUDIES" && $total>=6.00)||($group == "HUMANITIES" && $total>=6.00)))
            {
                ?>
                <script type="text/javascript">
                    document.getElementById("cou3").style.display='block';
                </script>
            <?php
            }
        }
        
     ?>
    </body>
</html>
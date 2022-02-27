<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>personal information</title>
        <style>
            body
            {
                background-color: deepskyblue;
                height: 200px;
            }
        </style>  
    </head>

    <body>
  
        <h1><center><b>PERSONAL PROFILE</b></center></h1><br>

	<?php
           	$link = mysqli_connect("localhost","root","");
	    	mysqli_select_db($link,"ouams");
		$res=mysqli_query($link,"select * from student_registration where hsc_roll='$_SESSION[hscroll]'");
		
        echo "<table>";

		while($row=mysqli_fetch_array($res))
		{
		    echo "<tr>";
		    echo "<td>";echo "student name: ".$row["student_name"];echo "</td><br>";
		   echo "</tr>";
			echo "<tr>";
            echo "<td>";echo "father name:". $row["father_name"];echo "</td><br>";
		    echo "</tr>";
			echo "<tr>";
            echo "<td>";echo "mother name:".$row["mother_name"];echo "</td><br>";
		    echo "</tr>";
			echo "<tr>";
            echo "<td>";echo "hsc roll:".$row["hsc_roll"];echo "</td><br>";
		    echo "</tr>";
			echo "<tr>";
            echo "<td>";echo "registration no:".$row["reg_no"];echo "</td><br>";
		    echo "</tr>";
			echo "<tr>";
            echo "<td>";echo "group:".$row["group"];echo "</td><br>";
	        echo "</tr>";
			echo "<tr>";   
            echo "<td>";echo "session:". $row["session"];echo "</td><br>";
            echo "</tr>";
			echo "<tr>";       
            echo "<td>";echo "institution name:". $row["institution_name"];echo "</td><br>";
			echo "</tr>";
			echo "<tr>";
            echo "<td>";echo "hsc board:". $row["hsc_board"];echo "</td><br>";
            echo "</tr>";
			echo "<tr>";    
            echo "<td>";echo "ssc board:". $row["ssc_board"];echo "</td><br>";
            echo "</tr>";
			echo "<tr>";
            echo "<td>";echo "passing year:". $row["passing_year"];echo "</td><br>";
            echo "</tr>";
			echo "<tr>";
            echo "<td>";echo "ssc roll:". $row["ssc_roll"];echo "</td><br>";
            echo "</tr>";
			echo "<tr>";
            echo "<td>";echo "ssc cgpa:". $row["ssccgpa"];echo "</td><br>";
            echo "</tr>";
			echo "<tr>";    
            echo "<td>";echo "sub. code: ". $row["code1"]." name: ". $row["name1"]." grade: ". $row["grade1"];echo "</td><br>";
            echo "</tr>";
			echo "<tr>"; 
            echo "<td>";echo "sub. code: ". $row["code2"]." name: ". $row["name2"]." grade: ". $row["grade2"];echo "</td><br>";
            echo "</tr>";
			echo "<tr>"; 
            echo "<td>";echo "sub. code: ". $row["code3"]." name: ". $row["name3"]." grade: ". $row["grade3"];echo "</td><br>";
            echo "</tr>";
			echo "<tr>"; 
            echo "<td>";echo "sub. code: ". $row["code4"]." name: ". $row["name4"]." grade: ". $row["grade4"];echo "</td><br>";
            echo "</tr>";
			echo "<tr>"; 
            echo "<td>";echo "sub. code: ". $row["code5"]." name: ". $row["name5"]." grade: ". $row["grade5"];echo "</td><br>";
            echo "</tr>";
			echo "<tr>"; 
            echo "<td>";echo "sub. code: ". $row["code6"]." name: ". $row["name6"]." grade: ". $row["grade6"];echo "</td><br>";
            echo "</tr>";
			echo "<tr>"; 
            echo "<td>";echo "sub. code: ". $row["code7"]." name: ". $row["name7"]." grade: ". $row["grade7"];echo "</td><br>";
            echo "</tr>";
			echo "<tr>"; 
            echo "<td>";echo "optional code:". $row["optional"];echo "</td><br>";
            echo "</tr>";
			echo "<tr>"; 
            echo "<td>";echo "cgpa with 4th subject:". $row["cgpa"];echo "</td><br>";
            echo "</tr>";
			echo "<tr>"; 
            echo "<td>";echo "cgpa without 4th subject:". $row["cgpa2"];echo "</td><br>";
            echo "</tr>";
			echo "<tr>"; 
            echo "<td>";echo "average:". $row["average"];echo "</td><br>";
            echo "</tr>";
		}
		
		echo "</table>";
        ?>

    </body>

</html>

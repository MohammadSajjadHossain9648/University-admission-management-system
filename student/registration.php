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
             <form action="http://localhost/admissionmanagement/student/registration.php" method="post">
                 <h3>Student Registration</h3>
                <div class="form-group">
                    <label for="name">Student Name</label><br>
                    <input type="text" name="student_name" id="name" size="100">
                </div>
                 <div class="form-group">
                    <label for="fname">Father Name</label><br>
                    <input type="text" name="father_name" id="fname" size="100">
                </div>
                 <div class="form-group">
                    <label for="mname">Mother Name</label><br>
                    <input type="text" name="mother_name" id="mname" size="100">
                </div>
                 <div class="form-group">
                    <label for="roll"></label>Roll No<br>
                    <input type="text" name="hsc_roll" id="roll" size="100" maxlength="6">
                </div>
                 <div class="form-group">
                    <label for="reg">Registration No</label><br>
                    <input type="text" name="reg_no" id="reg" size="100" maxlength="10">
                </div>
                 <div class="form-group">
                    <label for="gr">Group</label><br>
                    <select name="group" id="gr">
                     <option>SCIENCE</option>
                     <option>BUSINESS STUDIES</option>
                     <option>HUMANITIES</option>
                     </select>
                </div>
                 <div class="form-group">
                    <label for="ses">Session</label><br>
                    <input type="text" name="session" id="ses" size="50" maxlength="9">
                </div>
                <div class="form-group">
                    <label for="institution">Institution Name</label><br>
                    <input type="text" name="institution_name" id="institution" size="100">
                </div>
                 <div class="form-group">
                    <label for="board">Name of Board</label><br>
                    <input type="text" name="hsc_board" id="board" size="100" maxlength="20">
                </div>
                <p><b>Information of SSC:</b></p>
                <div class="form-group">
                    <label for="sscboard">Name of Board</label><br>
                    <input type="text" name="ssc_board" id="sscboard" size="100" maxlength="20">
                </div>
                 <div class="form-group">
                    <label for="passing">Passing Year</label><br>
                    <input type="text" name="passing_year" id="passing" size="100" maxlength="4">
                </div>
                 <div class="form-group">
                    <label for="sscroll">Roll No</label><br>
                    <input type="text" name="ssc_roll" id="sscroll" size="100" maxlength="10">
                </div>
                <div class="form-group">
                    <label for="cgpa3">CGPA:</label>
                    <input type="text" name="ssccgpa" id="cgpa3" size="4" maxlength="4">
                </div>
                <p><b>Information of Student Grade:</b></p>
                <table class="table table-bordered">
                    <tr>
                        <th>Sub. Code</th>
                        <th>Name</th>
                        <th>Grade</th>
                    </tr>
                    <tr>
                        <td>
                            <select name="code1">
                                <option>101</option>
                            </select>
                        </td>
                        <td>
                            <select name="name1">
                                <option>BANGLA</option>
                            </select>
                        </td>
                        <td>
                            <select name="grade1">
                                <option>A+</option>
                                <option>A</option>
                                <option>A-</option>
                                <option>B+</option>
                                <option>B</option>
                                <option>B-</option>
                                <option>C+</option>
                                <option>C</option>
                                <option>D</option>
                                <option>F</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <select name="code2">
                                <option>107</option>
                            </select>
                        </td>
                        <td>
                            <select name="name2">
                                <option>ENGLISH</option>
                            </select>
                        </td>
                        <td>
                            <select name="grade2">
                                <option>A+</option>
                                <option>A</option>
                                <option>A-</option>
                                <option>B+</option>
                                <option>B</option>
                                <option>B-</option>
                                <option>C+</option>
                                <option>C</option>
                                <option>D</option>
                                <option>F</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <select name="code3">
                                <option>275</option>
                            </select>
                        </td>
                        <td>
                            <select name="name3">
                                <option>INFORMATION & COMMUNNICATION TECHNOLOGY</option>
                            </select>
                        <td>
                            <select name="grade3">
                                <option>A+</option>
                                <option>A</option>
                                <option>A-</option>
                                <option>B+</option>
                                <option>B</option>
                                <option>B-</option>
                                <option>C+</option>
                                <option>C</option>
                                <option>D</option>
                                <option>F</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <select name="code4">
                            <option>174</option>
                            <option>239</option>
                            <option>109</option>
                            </select>
                        </td>
                        <td>
                            <select name="name4">
                            <option>PHYSICS</option>
                            <option>PRINCIPLE OF BUS.</option>
                            <option>ECONOMICS</option>
                            </select>
                        </td>
                        <td>
                            <select name="grade4">
                                <option>A+</option>
                                <option>A</option>
                                <option>A-</option>
                                <option>B+</option>
                                <option>B</option>
                                <option>B-</option>
                                <option>C+</option>
                                <option>C</option>
                                <option>D</option>
                                <option>F</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <select name="code5">
                            <option>176</option>
                            <option>188</option>
                            <option>269</option>
                            </select>
                        </td>
                        <td>
                            <select name="name5">
                            <option>CHEMISTRY</option>
                            <option>ECONOMICS & COMM.</option>
                            <option>CIVICS & GOOD GOVERNANCE</option>
                            </select>
                        </td>
                        <td>
                            <select name="grade5">
                                <option>A+</option>
                                <option>A</option>
                                <option>A-</option>
                                <option>B+</option>
                                <option>B</option>
                                <option>B-</option>
                                <option>C+</option>
                                <option>C</option>
                                <option>D</option>
                                <option>F</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <select name="code6">
                            <option>178</option>
                            <option>253</option>
                            <option>267</option>
                            </select>
                        </td>
                        <td>
                            <select name="name6">
                            <option>BIOLOGY</option>
                            <option>ACCOUNTING</option>
                            <option>ISLAMIC HISTORY</option>
                            </select>
                        </td>
                        <td>
                            <select name="grade6">
                                <option>A+</option>
                                <option>A</option>
                                <option>A-</option>
                                <option>B+</option>
                                <option>B</option>
                                <option>B-</option>
                                <option>C+</option>
                                <option>C</option>
                                <option>D</option>
                                <option>F</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <select name="code7">
                            <option>265</option>
                            <option>239</option>
                            <option>271</option>
                            </select>
                        </td>
                        <td>
                            <select name="name7">
                            <option>HIGHER MATH</option>
                            <option>AGRICULTURE STUDIES</option>
                            <option>SOCIAL WORK</option>
                            </select>
                        </td>
                        <td>
                            <select name="grade7">
                                <option>A+</option>
                                <option>A</option>
                                <option>A-</option>
                                <option>B+</option>
                                <option>B</option>
                                <option>B-</option>
                                <option>C+</option>
                                <option>C</option>
                                <option>D</option>
                                <option>F</option>
                            </select>
                        </td>
                    </tr>
                </table>
                <div class="form-group">
                    <label for="op">Optional(code)</label><br>
                    <input type="text" name="optional" id="op" size="50" maxlength="3">
                </div> 
                <div class="form-group">
                    <label for="cgpa1">CGPA with 4<sup>th</sup> subject:</label>
                    <input type="text" name="cgpa" id="cgpa1" size="4" maxlength="4">
                </div>
                 <div class="form-group">
                    <label for="cgpa02">CGPA without 4<sup>th</sup> subject:</label>
                    <input type="text" name="cgpa2" id="cgpa02" size="4" maxlength="4">
                </div>
                <p><b>Login Password:</b></p>
                <div class="form-group">
                    <label for="password">Student Password</label><br>
                    <input type="password" name="password" id="password" size="50">
                </div>
                <input type="submit" class="float-right" name="submit" value="Submit">
            </form>
        </div>
        
        <?php
        if(isset($_POST["submit"]))
        {
            $link=mysqli_connect("localhost","root","");
            mysqli_select_db($link,"ouams");
            mysqli_query($link,"insert into student_registration values('$_POST[student_name]','$_POST[father_name]','$_POST[mother_name]','$_POST[hsc_roll]','$_POST[reg_no]','$_POST[group]','$_POST[session]','$_POST[institution_name]','$_POST[hsc_board]','$_POST[ssc_board]','$_POST[passing_year]','$_POST[ssc_roll]','$_POST[ssccgpa]','$_POST[code1]','$_POST[name1]','$_POST[grade1]','$_POST[code2]','$_POST[name2]','$_POST[grade2]','$_POST[code3]','$_POST[name3]','$_POST[grade3]','$_POST[code4]','$_POST[name4]','$_POST[grade4]','$_POST[code5]','$_POST[name5]','$_POST[grade5]','$_POST[code6]','$_POST[name6]','$_POST[grade6]','$_POST[code7]','$_POST[name7]','$_POST[grade7]','$_POST[optional]','$_POST[cgpa]','$_POST[cgpa2]','$_POST[password]','','',no')");
        }
        ?>
    </body>
</html>
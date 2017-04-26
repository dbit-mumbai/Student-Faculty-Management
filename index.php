<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" href="styles.css">


<title>DBIT, Kurla</title>
</head>

<style>
.center {
    background-color: #FFC94D;
    margin: auto;
    width: 60%;
    color:  #b30000;
    padding: 10px;
    font-family: courier;
}



</style>

<script src="validate.js"></script> 

<body>
<script type="text/javascript">

</script>



<h1>Student Faculty Project Management System</h1>
<ul>
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="fac.php">Faculty Page</a></li>
  <li><a href="proj.php">Student Page</a></li>

</ul>
 <legend>Enter Your Details:</legend>
<fieldset>

<form method="POST" name = "projdetform"><div class="center">
  Department Name: <select name="dept">
  <option value="comp">Computer Engineering</option>
  <option value="extc">Electronic and Telecommunication</option>
  <option value="it">Information Technology</option>
  <option value="mech">Mechanical Engineering</option>
</select>
  <br>

  Faculty Name: <select name="faculty">
  <option value="Revathy Sundararajan">Revathy Sundararajan</option>
  <option value="Tayyabali Sayyad">Tayyabali Sayyad</option>
  <option value="Janhavi Baikerikar">Janhavi Baikerikar</option>
  <option value="Nilesh Ghavate">Nilesh Ghavate</option>
  <option value="XYZ">XYZ</option>
  <option value="abc">abc</option>
  <option value="pqr">pqr</option>
  <option value="jkl">jkl</option>
</select>
  <br>  

  Project: <input type="text" name="P_name" placeholder="Enter Project Name">
  <br>
  
 Project Details:<br>
<textarea id="data" name="message" cols="40" rows="5">
</textarea><br>

Date Assigned: 
  <input type="date" name="a_date">
  <br>
	
Date Of Submission:
  <input type="date" name="sub_date">
  <br>
No of Students: (between 1 and 4):
  <input type="number" name="noofstud" min="1" max="4" > <br>
  <br>

 <table>
  <tr>
    <th>Sr No.</th>
    <th>Name</th>
    <th>Roll No</th>
    <th>Class</th>
  </tr>
  <tr>
    <td>1</td>
    <td><input type="text" name="Stud_name1" placeholder="Enter Your Name"></td>
    <td><input type="number" name="Roll_no1" placeholder="Enter Your Roll No"></td>
    <td><input type="text" name="Class_name1" placeholder="Enter Your Class"></td>
  </tr>
  <tr>
	<td>2</td>
    <td><input type="text" name="Stud_name2" placeholder="Enter Your Name"></td>
    <td><input type="number" name="Roll_no2" placeholder="Enter Your Roll No"></td>
    <td><input type="text" name="Class_name2" placeholder="Enter Your Class"></td>
  </tr>
  <tr>
	<td>3</td>
    <td><input type="text" name="Stud_name3" placeholder="Enter Your Name"></td>
    <td><input type="number" name="Roll_no3" placeholder="Enter Your Roll No"></td>
    <td><input type="text" name="Class_name3" placeholder="Enter Your Class"></td>
  </tr>
  <tr>
	<td>4</td>
    <td><input type="text" name="Stud_name4" placeholder="Enter Your Name"></td>
    <td><input type="number" name="Roll_no4" placeholder="Enter Your Roll No"></td>
    <td><input type="text" name="Class_name4" placeholder="Enter Your Class"></td>
  </tr>
 
</table>

 <input type="submit" name="submit" value="Submit" onclick="myFunction()">
</form> 
<hr>

<br>
</fieldset>
</body>

<footer>
  <p>Designed by: Rayvonne Gonsalves</p>
</footer>

</html>

<?php
if(isset($_POST['submit']))
{
$dp=$_POST["dept"];
$fc=$_POST["faculty"];
$pn=$_POST["P_name"];

$msg=$_POST["message"];



$adate=$_POST["a_date"];
$sdate=$_POST["sub_date"];
$nstud=$_POST["noofstud"];

$sn1=$_POST["Stud_name1"];
$rn1=$_POST["Roll_no1"];
$cn1=$_POST["Class_name1"];

$sn2=$_POST["Stud_name2"];
$rn2=$_POST["Roll_no2"];
$cn2=$_POST["Class_name2"];

$sn3=$_POST["Stud_name3"];
$rn3=$_POST["Roll_no3"];
$cn3=$_POST["Class_name3"];

$sn4=$_POST["Stud_name4"];
$rn4=$_POST["Roll_no4"];
$cn4=$_POST["Class_name4"];



include "connect.php";

$sql = "INSERT INTO proj_det VALUES('$dp','$fc','$pn','$msg','$adate','$sdate','$nstud','$sn1','$rn1','$cn1','$sn2','$rn2','$cn2', '$sn3','$rn3','$cn3', '$sn4','$rn4','$cn4')";
      
$result = mysqli_query($con,$sql);
echo "<h2><font color=green>Member successfully added</font></h2>";
}
?>	

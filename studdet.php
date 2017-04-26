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

<?php

echo "<html>\n"; 
echo "<head>\n"; 
echo "\n"; 
echo "  <link rel=\"stylesheet\" href=\"styles.css\">\n"; 
echo "\n"; 
echo "\n"; 
echo "<title>DBIT, Kurla</title>\n"; 
echo "</head>\n"; 
echo "\n"; 
echo "<style>\n"; 
echo ".center {\n"; 
echo "    background-color: #FFC94D;\n"; 
echo "    margin: auto;\n"; 
echo "    width: 60%;\n"; 
echo "    color:  #b30000;\n"; 
echo "    padding: 10px;\n"; 
echo "    font-family: courier;\n"; 
echo "}\n"; 
echo "\n"; 
echo "\n"; 
echo "\n"; 
echo "</style>\n"; 
echo "\n"; 
echo "\n"; 

echo "<table border=1>";
include "connect.php";
$sql = "select * from proj_det";

$result = $con->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
	$i=0;
	echo "<tr><th>Department Name</th><th>Faculty Name</th><th>Project Name</th><th>Project Details</th><th>Assigned Date</th><th>Submission Date</th><th>No of Students</th><th>Student Name 1</th><th>Roll No 1</th><th>Class Name 1</th><th>Student Name 2</th><th>Roll No 2</th><th>Class Name 2</th><th>Student Name 3</th><th>Roll No 3</th><th>Class Name 3</th><th>Student Name 4</th><th>Roll No 4</th><th>Class Name 4</th></tr>";
    while($row = $result->fetch_assoc()) {
       	echo "<tr><td>". $row["Dept Name"].  "</td><td>".$row ["Fac Name"]."</td><td>". $row["Project Name"]."</td><td>".$row["Project Details"]."</td><td>".$row["Assigned Date"]."</td><td>".$row["Submission Date"]."</td><td>".$row["No of Students"]. "</td><td>".$row["Stud Name 1"] . "</td><td>".$row["Roll No 1"]."</td><td>".$row["Class Name 1"] ."</td><td>".$row["Stud Name 2"] ."</td><td>".$row["Roll No 2"]."</td><td>".$row["Class Name 2"] . "</td><td>".$row["Stud Name 3"] ."</td><td>".$row["Roll No 3"]. "</td><td>".$row["Class Name 3"] . "</td><td>".$row["Stud Name 4"] ."</td><td>".$row["Roll No 4"]."</td><td>".$row["Class Name 4"]."</td></tr>";
    }
} else {
    echo "0 results";
}
echo "</table>";
$con->close();
echo "<footer>\n"; 
echo "  <p>Designed by: Rayvonne Gonsalves</p>\n"; 
echo "</footer>\n"; 
echo "\n"; 
echo "</html>\n";
?>

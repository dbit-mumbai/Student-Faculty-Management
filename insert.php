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

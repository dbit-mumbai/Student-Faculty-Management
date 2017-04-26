<!DOCTYPE html>

<html>

<head>
<title>Student</title>
<link rel="stylesheet" href="styles.css">


</head>
<style>
.center {
   background-color: #FFC94D;
    margin: auto;
    width: 60%;
     color:  #b30000;
    padding: 10px;
}


</style>
<h1>Student Faculty Project Management System</h1>
<ul>
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="fac.php">Faculty Page</a></li>
  <li><a href="proj.php">Student Page</a></li>

</ul>
<body>
 <fieldset>
 
    <legend>Project Information:</legend>
<form><div class="center">

  Class:<br>
  <input type="text" name="fac_name" id="fac_name" value="" autocomplete>
<br>
  Roll no:<br>
  <input type="text" name="roll_no" id="roll_no" value="" autocomplete>
 
<br>

  Department:<br>
  <select name="dept">
  <option value="it" >Information Technology</option>
  <option value="comp">Computer Engineering</option>
  <option value="extc">Electronic and Telecommunication</option>
  <option value="mech">Mechanical Engineering</option>
</select>
  <br>
<input type="submit" value="Send">
  <br>
</form>
</fieldset>
</body>
<footer>
  <p>Designed by: Rayvonne Gonsalves</p>
</footer>
</html>


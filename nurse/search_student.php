<style>
body {margin:0;}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
    background-color: #4CAF50;
    color: white;
}
</style>

 <div class="topnav" id="myTopnav">
  
   <a href="dashboard2.php">Profile</a>
  <a href="register_patient.php">Patient Registeration</a>
  <a href="patient_list.php">Patient Information</a>
   <a href="search_student.php">Search Patient</a>
  <a href="payment.php">Payment</a>
 <a href="../logout.php">Log Out</a>
</div> <?php
include "../database.php";
?>
<HTML>
<head>
<html>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Inventory Management System UTeM </title>
<style type="text/css">
body,td,th {
	color: #000000;
	font-size: 18px;
	font-weight: bold;
}
body {
	background-color: #00000;
}
#header .clearfix div .navigation li {
	font-family: Arial Black, Gadget, sans-serif;
}
</style>
</head>

<body>

</head>
<link rel="stylesheet" href="style1.css" />
	<title> Product Register </title>
	
</head>

<?php
if (isset($_POST["searchstring"])){
	$searchstring = $_POST["searchstring"];
	$searchtype =$_POST["searchtype"];
}

if (isset($searchstring))
{
$sql="SELECT * FROM patient WHERE $searchtype LIKE '%$searchstring%' ORDER BY FullName ASC";
$db = mysql_connect("localhost", "root", "");
mysql_select_db("patient_system",$db);
$result = mysql_query($sql,$db);

echo "<br><br><TABLE BORDER=2 align=center>";
echo"<TR><TD><B>Full Name</B></TD><TD><B>IC number</B></TD><TD><B>Faculty</B></TD><TD><B>MatricNo</B><TD><B>Tel_No</B></TD><TD><B>status</B></TD></TR>";
while ($myrow = mysql_fetch_array($result))
{
echo "<TR><TD>".$myrow["FullName"]."</TD><TD>".$myrow["IC_num"]."</TD><TD>".$myrow["Faculty"]."</TD><TD>".$myrow["MatricNo"]."</TD><TD>".$myrow["Tel_No"]."</TD><TD>".$myrow["status"]."</TD>";

}
echo "</TABLE>";
}
else
{
?>
<body>
<h1><center>Search Product Detail</center></h1>


<center><form method="POST" action="search_student.php">
<table width="403" height="71" border="2" cellspacing="2">
<tr><td><p>Insert you search string here</p></td>
<td><blockquote>
  <p>Search type</p>
</blockquote></td>
</tr>
<tr>
<td><input type="text" name="searchstring" size="28"></td>
<td><select size="1" name="searchtype">
<option selected value="FullName">Full Name</option>
<option selected value="IC_num">IC num</option>
</select></td>
</tr>
</table>
<blockquote>
  <p>
    <input type="submit" value="Submit" name="B1">
    <input type="reset" value="Reset"
>
  </p>
</blockquote>
</form>
</center>
</body>
<?php
}
?>
</HTML>

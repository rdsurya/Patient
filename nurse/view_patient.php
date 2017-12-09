<HTML>
<head>
<link rel="stylesheet" href="style.css" />
	<title> Letter Detail </title>
	
</head>
<body>
	<h1>Letter Detail</h1>
<form action="view_patient.php" method="post">
</body>
</html>
<?php
$MatricNo= $_GET["MatricNo"];

$db = mysql_connect("localhost", "root", "");
mysql_select_db("patient_system",$db);
$result = mysql_query("SELECT * FROM patient WHERE MatricNo=$MatricNo",$db);
$myrow = mysql_fetch_array($result);


echo "MatricNo: ".$myrow["MatricNo"];
echo "<br>FullName : ".$myrow["FullName"];
echo "<br>IC num: ".$myrow["IC_num"];
echo "<br>Gender: ".$myrow["Gender"];
echo "<br>Faculty: ".$myrow["Faculty"];
echo "<br>Tel No: ".$myrow["Tel_No"];
echo "<br>status : ".$myrow["status "];

?>
</form>
</HTML>

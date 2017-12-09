<?
	
	include("../database.php");
	$db_field = $_GET['MatricNo_delete'];
	echo $db_field;
	
	if($db_field !="")
	{
		$a = "delete from patient where MatricNo = '$db_field'";
		$b = mysql_query($a) or die (mysql_error().$a);
	}

?>
<?php 
include '../global.php';
session_start(); 
if ($_SESSION['id'] == '') {
echo '<script>document.location.href="'.$base_url.'" </script>';
} 
$user_id = $_SESSION['id'];
$msj = "";
$now = date("Y-m-d");
$MatricNo = $_GET['MatricNo'];
include "../database.php";

$sqlM="SELECT * FROM patient WHERE MatricNo='$MatricNo'"; 
$resultM=mysql_query($sqlM) or die('SQL Error :: '.mysql_error()); 
$db_fieldM = mysql_fetch_array($resultM);

$sql = "DELETE FROM patient WHERE MatricNo='$MatricNo'"; 
$result=mysql_query($sql) or die('SQL Error :: '.mysql_error()); 
$msj = 'Hapus Berjaya';
echo '<script>document.location.href="'.$base_url.'nurse/patient_list.php" </script>';
?>
  
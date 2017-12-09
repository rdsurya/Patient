<?php 
include '../global.php';
session_start(); 
if ($_SESSION['id'] == '') {
echo '<script>document.location.href="'.$base_url.'" </script>';
} 
$user_id = $_SESSION['id'];
$msj = "";
$now = date("Y-m-d");
$drug_id = $_GET['drug_id'];
include "../database.php";

$sqlM="SELECT * FROM drug WHERE drug_id='$drug_id'"; 
$resultM=mysql_query($sqlM) or die('SQL Error :: '.mysql_error()); 
$db_fieldM = mysql_fetch_array($resultM);

$sql = "DELETE FROM drug WHERE drug_id='$drug_id'"; 
$result=mysql_query($sql) or die('SQL Error :: '.mysql_error()); 
$msj = 'Hapus Berjaya';
echo '<script>document.location.href="'.$base_url.'admin/drug_information.php" </script>';
?>
  
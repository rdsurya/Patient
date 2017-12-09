<?php 
include '../global.php';
session_start(); 
if ($_SESSION['id'] == '') {
echo '<script>document.location.href="'.$base_url.'" </script>';
} 
$user_id = $_SESSION['id'];
$msj = "";
$now = date("Y-m-d");
$id = $_GET['id'];
include "../database.php";

$sqlM="SELECT * FROM user WHERE id='$id'"; 
$resultM=mysql_query($sqlM) or die('SQL Error :: '.mysql_error()); 
$db_fieldM = mysql_fetch_array($resultM);

$sql = "DELETE FROM user WHERE id='$id'"; 
$result=mysql_query($sql) or die('SQL Error :: '.mysql_error()); 
$msj = 'Hapus Berjaya';
echo '<script>document.location.href="'.$base_url.'admin/user_list.php" </script>';
?>
  
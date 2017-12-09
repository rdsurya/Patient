<html>
<title>PATIENT TREATMENT </title>
<body>

<br><br><br>	
<center><fieldset style="width:50%" style ="background:#D0D3D4">
<td width="903" align="left" bgcolor="#F3D886" style="border-radius: 0px 8px 8px 0px; font-size: 30px; font-weight: bold;"><div align="center" class="style6"><center>

<br><br><br>
	<center><h1 style="color:black">TREATMENTS</h1><br>
	<center><form method="post" action="consult.php">
<?php
error_reporting();
 include '../database.php';
 session_start(); 
if ($_SESSION['id'] == '') {
echo '<script>document.location.href="'.$base_url.'" </script>';
} 
$user_id = $_SESSION['id'];
 ?>
<?php 
if (isset($_GET["MatricNo"])){
	$MatricNo = $_GET["MatricNo"];
$result = mysql_query("SELECT consult_id FROM patient WHERE MatricNo='$MatricNo'");
$myrow = (mysql_fetch_array($result));
}


  if(isset($_POST['submit']))
			{
	$consult_id= $_POST["consult_id"];
	$disease= $_POST["disease"];
	$drug= $_POST["drug"];
	$drug2= $_POST["drug2"];
	$drug3= $_POST["drug3"];
	$drug4= $_POST["drug4"];
	$drug5= $_POST["drug5"];
	$id= $_POST["id"];
	
	
$sql = "INSERT INTO consultation 
	 ( consult_id, disease, drug, drug2, drug3, drug4, drug5, id) VALUES   
        ('$consult_id','$disease','$drug','$drug2','$drug3','$drug4','$drug5','$id')";
				
$result = mysql_query($sql);


echo "Thank you! Information entered.<a href='consultation.php'>Click</a> here to go back Main Menu.\n";
} else 
{
?>

<div class="wrapper row3">
  <div class="rnd">
<div class="wrapper row3">
  <div class="rnd">
    <div id="container" class="clear" style="center">
		
      <form method="post" action="consult.php">
		
		<input type="hidden" name="action" value="insert">
			
            <table cellpadding="10" cellspacing="5" border="0" class="stdtable">
			<tr>
                    <td>Consult ID <font color="red">*</font></td><td> : </td><td> <input type="text" id="consult_id" name="consult_id" value="<?php echo$myrow['consult_id'];?>"/> </td>
                </tr>
				
				<tr>
                    <td>User ID<font color="red">*</font></td><td> : </td><td> <input type="text" id="id" name="id" value= <?php echo $_SESSION["id"]?> required> </td>
                </tr>
				
				
				<tr>
                    <td>Comment<font color="red">*</font></td><td> : </td><td><input type="text" id="disease" name="disease" placeholder="disease"  required></td>
                </tr>
				
				
				<tr>
                    <td>Drug Name <font color="red">*</font></td><td>  : </td><td><input name="drug" id="drug" type="text" style="width:145px;"></td></tr>
					<td></td><td>   <td><input name="drug2" id="drug2" type="text"  style="width:145px;"></td></tr>
					<td></td><td>   <td><input name="drug3" id="drug3" type="text"  style="width:145px;"></td></tr>
					<td></td><td>   <td><input name="drug4" id="drug4" type="text"  style="width:145px;"></td></tr>
					<td></td><td>   <td><input name="drug5" id="drug5" type="text"  style="width:145px;"></td></tr>
					
                <input type="Submit" name="submit" value="Enter information"><br><br>
<a href="consultation.php"><input name="Cancel" type="button" value="Cancel"></a><br>
</form>

<?php }?>

</html>
				
            </table>   
        </form>  
    </div>
  </div>
</div>


	
	
</body>
<body style = "background: url(fi3.jpg); background-size: 100%;">

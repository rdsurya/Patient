<html>
<title>PATIENT TREATMENT </title>
<body>
<br><br><br>	
<center><fieldset style="width:50%" style ="background:#D0D3D4">
<td width="903" align="left" bgcolor="#F3D886" style="border-radius: 0px 8px 8px 0px; font-size: 30px; font-weight: bold;"><div align="center" class="style6"><center>

<br><br><br>
	<center><h1 style="color:black">CONSULTATION</h1><br>
<?php
error_reporting();
 include '../database.php';
 session_start(); 
if ($_SESSION['id'] == '') {
echo '<script>document.location.href="'.$base_url.'" </script>';
} 
$user_id = $_SESSION['id'];

if (isset($_GET["consult_id"])){
				$consult_id = $_GET["consult_id"];
				$query1=mysql_query("select * from consultation where consult_id='$consult_id'");
				$query2=(mysql_fetch_assoc($query1));
				
			
?>

<div class="wrapper row3">
  <div class="rnd">
<div class="wrapper row3">
  <div class="rnd">
    <div id="container" class="clear" style="center">
			
            <table cellpadding="10" cellspacing="5" border="0" class="stdtable">
			<form action="consult_update.php" method="post"> 
	<input type="hidden" name="consult_id" value="<?php echo $myrow["consult_id"]?>">
	<input type="hidden" name="action" value="update">
			<tr>
                    <td>Consult ID <font color="red">*</font></td><td> : </td><td> <input type="text" id="consult_id" name="consult_id" value="<?php echo$query2['consult_id'];?>"/> </td>
                </tr>
				
				<tr>
                    <td>User ID<font color="red">*</font></td><td> : </td><td> <input type="text" id="id" name="id" value= <?php echo $_SESSION["id"]?> required> </td>
                </tr>
				
				
				<tr>
                    <td>Comment<font color="red">*</font></td><td> : </td><td><input type="text" id="disease" name="disease" placeholder="disease"  required  value="<?php echo$query2['disease'];?>"/></td>
                </tr>
				
				
				<tr>
                    <td>Drug Name <font color="red">*</font></td><td>  : </td><td><input type="text" id="drug" name="drug" placeholder="DrugName" value="<?php echo $query2['drug'];?>"/></td></tr>
					<td></td><td>   <td><input type="text" id="drug2" name="drug2" placeholder="DrugName" value="<?php echo $query2['drug2'];?>"/></td></tr>
					<td></td><td>   <td><input type="text" id="drug3" name="drug3" placeholder="DrugName" value="<?php echo $query2['drug3'];?>"/></td></tr>
					<td></td><td>   <td><input type="text" id="drug4" name="drug4" placeholder="DrugName" value="<?php echo $query2['drug4'];?>"/></td></tr>
					<td></td><td>   <td><input type="text" id="drug5" name="drug5" placeholder="DrugName" value="<?php echo $query2['drug5'];?>"/></td></tr>
                
                <input type="Submit" name="update" value="Enter information"><br><br>
<a href="treatment.php"><input name="Cancel" type="button" value="Cancel"></a><br>
</form>
<?php
} if(isset($_POST['action'])){
	  
	$action = $_POST["action"];
	$consult_id= $_POST["consult_id"];
	$disease= $_POST["disease"];
	$drug= $_POST["drug"];
	$drug2= $_POST["drug2"];
	$drug3= $_POST["drug3"];
	$drug4= $_POST["drug4"];
	$drug5= $_POST["drug5"];
	
	
if($action=='update')
{
$sql = ("update consultation set disease='$disease', drug='$drug', drug2='$drug2', drug3='$drug3', drug4='$drug4', drug5='$drug5' where consult_id='$consult_id'");	
$result = mysql_query($sql);

echo "Thank you! Information entered.<a href='treatment.php'>Click</a> here to go back Main Menu.\n";
}
}
?>
</html>	
            </table>   
        </form>  
    </div>
  </div>
</div>
	
</body>
<body style = "background: url(fi3.jpg); background-size: 100%;">

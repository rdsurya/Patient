
<html>
<title>Edit Consultation</title>
<body>
<br><br><br>	
<center><fieldset style="width:35%">
<td width="903" align="left" bgcolor="#F3D886" style="border-radius: 0px 8px 8px 0px; font-size: 30px; font-weight: bold;"><div align="center" class="style6"><center>

	<?php
	include('../database.php');
	
	if(isset($_POST['submit']))
			{	
			$MatricNo=$_POST['MatricNo'];
			$status=$_POST['status'];
			
	$query3=mysql_query("update patient set status='$status' where MatricNo='$MatricNo'");
			if($query3) 
				{
					header('Location: consultation.php');
				}
			}
			else
			{
				if (isset($_GET["MatricNo"])){
				$MatricNo = $_GET["MatricNo"];
				$query1=mysql_query("select * from patient where MatricNo='$MatricNo'");
				$query2=(mysql_fetch_assoc($query1));
				
			}
			}
	
	
	?>
	<br><br><br>
	<center><h1 style="color:black">Edit Consultation</h1><br>
	<center><form method="post" action="update_status.php">
	<input type="hidden" name="action" value="update">
	Status:<select name="status" id="status" type="text" style="width:145px;"> 
	<option value="not treat" name="not treat">not treat</option>
	<option value="treat" name="treat">treat</option>
	<input type="hidden" name="MatricNo" value="<?php echo $MatricNo; ?>">
	<br />
	<br/>
	
	<input type="submit" name="submit" value="update" />
	<input type="button" name="button2" value="Back" id="button2" class="input_button" onclick="javascrpit:history.back(-1)"/>
	</form></center>
	
</body>
<body style = "background: url(fi3.jpg); background-size: 100%;">







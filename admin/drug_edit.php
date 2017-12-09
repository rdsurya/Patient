
<html>
<title>Edit Drug</title>
<body>
<br><br><br>	
<center><fieldset style="width:35%">
<td width="903" align="left" bgcolor="#F3D886" style="border-radius: 0px 8px 8px 0px; font-size: 30px; font-weight: bold;"><div align="center" class="style6"><center>

	<?php
	include('database.php');
	
	if(isset($_POST['submit']))
			{	
			$drug_id=$_POST['drug_id'];
			$drug_name=$_POST['drug_name'];
			$drug_description=$_POST['drug_description'];
			$price_per_unit=$_POST['price_per_unit'];
			
			
	$query3=mysql_query("update drug set drug_id='$drug_id', drug_name='$drug_name', drug_description='$drug_description',price_per_unit='$price_per_unit' where drug_id='$drug_id'");
			if($query3) 
				{
					header('Location: drug_information.php');
				}
			}
			else
			{
				if (isset($_GET["drug_id"])){
				$drug_id = $_GET["drug_id"];
				$query1=mysql_query("select * from drug where drug_id='$drug_id'");
				$query2=(mysql_fetch_assoc($query1));
				
			}
			}
	
	
	?>

	<br><br><br>
	<center><h1 style="color:black">Edit Drug</h1><br>
	<center><form method="post" action="drug_edit.php">
	<input type="hidden" name="action" value="update">
	Drug ID:<input type="text" name="drug_id" value="<?php echo $query2['drug_id']; ?>" /><br /><br>
	Drug Name:<input type="text" name="drug_name" value="<?php echo $query2['drug_name']; ?>" /><br /><br />
	Drug Description:<input type="text" name="drug_description" value="<?php echo $query2['drug_description']; ?>" /><br /><br />
	Price:<input type="text" name="price_per_unit" value="<?php echo $query2['price_per_unit']; ?>" /><br /><br />
	<input type="hidden" name="drug_id" value="<?php echo $drug_id; ?>">
	<br />
	<input type="submit" name="submit" value="update" />
	<input type="button" name="button2" value="Back" id="button2" class="input_button" onclick="javascrpit:history.back(-1)"/>
	</form></center>
	
</body>
<body style = "background: url(fi3.jpg); background-size: 100%;">
</html>
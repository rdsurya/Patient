
<html>
<title>Edit Patient</title>
<body>
<br><br><br>	
<center><fieldset style="width:35%">
<td width="903" align="left" bgcolor="#F3D886" style="border-radius: 0px 8px 8px 0px; font-size: 30px; font-weight: bold;"><div align="center" class="style6"><center>

	<?php
	include('../database.php');
	
	if(isset($_POST['submit']))
			{	
			$MatricNo=$_POST['MatricNo'];
			$FullName=$_POST['FullName'];
			$IC_num=$_POST['IC_num'];
			$Gender=$_POST['Gender'];
			$Faculty=$_POST['Faculty'];
			$Tel_No=$_POST['Tel_No'];
			$status=$_POST['status'];
			
	$query3=mysql_query("update patient set MatricNo='$MatricNo', FullName='$FullName', IC_num='$IC_num', Gender='$Gender',Faculty='$Faculty',Tel_No='$Tel_No',status='$status' where MatricNo='$MatricNo'");
			if($query3) 
				{
					header('Location: patient_list.php');
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
	<center><h1 style="color:black">Edit Patient</h1><br>
	<center><form method="post" action="nurse_edit.php">
	<input type="hidden" name="action" value="update">
	No Matric:<input type="text" name="MatricNo" value="<?php echo $query2['MatricNo']; ?>" /><br /><br>
	Full Name:<input type="text" name="FullName" value="<?php echo $query2['FullName']; ?>" /><br /><br />
	No IC:<input type="text" name="IC_num" value="<?php echo $query2['IC_num']; ?>" /><br /><br />
	Gender:<input type="text" name="Gender" value="<?php echo $query2['Gender']; ?>" /><br /><br />
	Faculty:<input type="text" name="Faculty" value="<?php echo $query2['Faculty']; ?>" /><br /><br />
	Phone Number:<input type="text" name="Tel_No" value="<?php echo $query2['Tel_No']; ?>" /><br /><br />
	Status:<input type="text" name="status" value="<?php echo $query2['status']; ?>" /><br /><br />
	<input type="hidden" name="MatricNo" value="<?php echo $MatricNo; ?>">
	<br />
	<input type="submit" name="submit" value="update" />
	<input type="button" name="button2" value="Back" id="button2" class="input_button" onclick="javascrpit:history.back(-1)"/>
	</form></center>
	
</body>
<body style = "background: url(fi3.jpg); background-size: 100%;">








<html>
<title>Edit Profile</title>
<body>
<br><br><br>	
<center><fieldset style="width:35%">
<td width="903" align="left" bgcolor="#F3D886" style="border-radius: 0px 8px 8px 0px; font-size: 30px; font-weight: bold;"><div align="center" class="style6"><center>

	<?php
	include('database.php');
	
	if(isset($_POST['submit']))
			{	
			$name=$_POST['name'];
			$email=$_POST['email'];
			$phone_no=$_POST['phone_no'];
			
			
	$query3=mysql_query("update drug set name='$name', email='$email', phone_no='$phone_no' where name='$name'");
			if($query3) 
				{
					header('Location: dashboard.php');
				}
			}
			else
			{
				if (isset($_GET["name"])){
				$name = $_GET["name"];
				$query1=mysql_query("select * from user where name='$name'");
				$query2=(mysql_fetch_assoc($query1));
				
			}
			}
	
	
	?>

	<br><br><br>
	<center><h1 style="color:black">Edit Profile</h1><br>
	<center><form method="post" action="profile_edit.php">
	<input type="hidden" name="action" value="update">
	Name:<input type="text" name="name" value="<?php echo $query2['name']; ?>" /><br /><br>
	Email:<input type="text" name="email" value="<?php echo $query2['email']; ?>" /><br /><br />
	Phone Number:<input type="text" name="phone_no" value="<?php echo $query2['phone_no']; ?>" /><br /><br />
	<input type="hidden" name="name" value="<?php echo $name; ?>">
	<br />
	<input type="submit" name="submit" value="update" />
	<input type="button" name="button2" value="Back" id="button2" class="input_button" onclick="javascrpit:history.back(-1)"/>
	</form></center>
	
</body>
<body style = "background: url(fi3.jpg); background-size: 100%;">
</html>
<style>
body {margin:0;}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
    background-color: #4CAF50;
    color: white;
}


</style>

 <div class="topnav" id="myTopnav">
 
   <a href="dashboard.php">Profile</a>
  <a href="register.php">Staff Registeration</a>
  <a href="user_list.php">Staff Information</a>
  <a href="drug_registration.php">Drug Registration</a>
  <a href="drug_information.php">Drug Information</a>
 <a href="../logout.php">Log Out</a>
</div> 
<?php include '../database.php'; ?>
<?php 
  if(isset($_POST['user_name'])&&isset($_POST['password'])&&isset($_POST['Role'])&&isset($_POST['email'])&&isset($_POST['phone_no'])&&isset($_POST['name'])
  &&$_POST['user_name']!=''&&$_POST['password']!=''&&$_POST['Role']!=''&&$_POST['email']!=''&&$_POST['phone_no']!=''&&$_POST['name']!=''){
	  
  $sql = "INSERT INTO user(`user_name`, `password`, `Role`, `email`, `phone_no`, `name`) 
  VALUES('".addslashes(ucwords($_POST['user_name']))."','".addslashes($_POST['password'])."','".addslashes($_POST['Role'])."', 
  '".addslashes($_POST['email'])."', '".addslashes($_POST['phone_no'])."', '".addslashes($_POST['name'])."')";
  $res_newuser = mysql_query($sql);
  }

?>

<div class="wrapper row3">
  <div class="rnd">
    <div id="container" class="clear" style="margin-left: 470px;">
		<h2>Staff Registeration Form</h2>
        <form action="register.php" method="post">
			
            <table cellpadding="3" cellspacing="5" border="0" class="stdtable">
				<tr>
                    <td>User Name <font color="red">*</font></td><td> : </td><td><input type="text" id="user_name" name="user_name" placeholder="user_name" pattern="[a-zA-Z\s]+" title="words only" required></td>
                </tr>
				<tr>
                    <td>Password <font color="red">*</font></td><td> : </td><td><input type="text" id="password" name="password" placeholder="Password" required></td>
                </tr>
				<tr>
                    <td>Role <font color="red">*</font></td><td> : </td><td> <select name="Role" id="Role" style="width:145px;">
						<option value="Role" name="Role">Role</option>
						<option value="doctor" name="doctor">Doctor</option>
						<option value="nurse" name="nurse">Nurse</option>
						
					  </select></td>
                </tr>
                <tr>
                    <td>Email <font color="red">*</font></td><td> : </td><td><input type="email" id="email" name="email" placeholder="Email" required></td>
                </tr> 
				<tr>
                    <td>Phone Number <font color="red">*</font></td><td> : </td><td><input type="text" id="phone_no" name="phone_no" placeholder="Phone_no" required></td
                </tr> 
                <tr>
                    <td>Name <font color="red">*</font></td><td> : </td><td><input type="text" id="name" name="name" placeholder="Full Name" required></td>
                </tr> 
                <tr>
                    <td></td><td></td><td><input type="submit" class="button" id="submit" name="submit" value="Submit">&nbsp;<input type="reset" class="button" value="Clear"> </td>
                </tr>
            </table>   
        </form>  
    </div>
  </div>
</div>


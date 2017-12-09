<style>
body {
	margin:0;
	
	}

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
  <a href="user_list.php">Staff information</a>
  <a href="drug_registration.php">Drug Registration</a>
  <a href="drug_information.php">Drug Information</a>
 <a href="../logout.php">Log Out</a>
</div> 
<?php 
include "../global.php"; 
session_start(); 
if ($_SESSION['id'] == '') {
echo '<script>document.location.href="'.$base_url.'" </script>';
} 
$user_id = $_SESSION['id'];
$msj= ""; 
include "../database.php"; 
 
 $result = mysql_query("SELECT * FROM user WHERE name !='Admin'");	

?>
<div class="wrapper row3">
  <div class="rnd">
    <div id="container" class="clear">
	
      <center><h2>Staff Information</h2><center>
      <font color="red"><?php echo $msj; ?></font> 
      
           <table cellpadding="0" cellspacing="0" border="1" class="stdtable" id="dyntable" width="80%">
                <thead>
                    <tr>
                        <th class="head1" style="width: 15%;">Id</th>
						 <th class="head1" style="width:15%;">Name</th>
                        <th class="head1" style="width: 15%;">Role</th>
                         <th class="head1" style="width: 15%;">Email</th>
                        <th class="head0" style="width: 15%;">Handphone</th> 
                        <th class="head1 nosort" style="width: 15%;">Action</th> 
                    </tr>
                </thead> 
                <tbody> 
                    <?php
									
                    while($db_field = mysql_fetch_array($result)) {?>
                    <tr class="gradeA">
						<td align="center"><?php echo $db_field['id']; ?></td>
                        <td align="center"><?php echo $db_field['name']; ?></td>
						<td align="center"><?php echo $db_field['Role']; ?></td>
                        <td align="center"><?php echo $db_field['email']; ?></td>
                        <td align="center"><?php echo $db_field['phone_no']; ?></td>
						
					   <td><a href="admin_edit.php<?php echo '?id='.$db_field['id']; ?>" >UPDATE  
					<a href="delete_user.php<?php echo '?id='.$db_field['id']; ?>" >DELETE</td>
						
 
					
					   
                    </tr>
					
                    <?php } ?> 
                </tbody>
            </table> 
      <p>&nbsp;</p> 
      <!-- ####################################################################################################### -->
    </div>
  </div>
</div>
<!-- ####################################################################################################### -->

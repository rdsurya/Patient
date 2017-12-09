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
 
 $result = mysql_query("SELECT * FROM drug ");	

?>
<div class="wrapper row3">
  <div class="rnd">
    <div id="container" class="clear">
      <center><h2>Drug Information</h2><center>
      <font color="red"><?php echo $msj; ?></font> 
      
           <table cellpadding="0" cellspacing="0" border="1" class="stdtable" id="dyntable" width="80%">
                <thead>
                    <tr>
                        <th class="head1" style="width: 15%;">Drug ID</th>
						 <th class="head1" style="width:15%;">Drug Name</th>
						 <th class="head1" style="width:15%;">Drug Description</th>
                        <th class="head1" style="width: 15%;">Price (RM)</th>
                        
                        <th class="head1 nosort" style="width: 15%;">Action</th> 
                    </tr>
                </thead> 
                <tbody> 
                    <?php
									
                    while($db_field = mysql_fetch_array($result)) {?>
                    <tr class="gradeA">
						<td align="center"><?php echo $db_field['drug_id']; ?></td>
                        <td align="center"><?php echo $db_field['drug_name']; ?></td>
						<td align="center"><?php echo $db_field['drug_description']; ?></td>
                        <td align="center"><?php echo $db_field['price_per_unit']; ?></td>
                        
                       
						
					   <td><a href="drug_edit.php<?php echo '?drug_id='.$db_field['drug_id']; ?>" >UPDATE  
					<a href="delete_drug.php<?php echo '?drug_id='.$db_field['drug_id']; ?>" >DELETE</td>
						
 
					
					   
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

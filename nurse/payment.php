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
 <a href="dashboard2.php">Profile</a>
  <a href="register_patient.php">Patient Registration</a>
   <a href="patient_list.php">Patient Information</a>
   <a href="payment.php">Payment</a>
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
 
 $result = mysql_query("SELECT * FROM consultation ");	

?>
<div class="wrapper row3">
  <div class="rnd">
    <div id="container" class="clear">
      <center><h2>Drug Payment</h2><center>
      <font color="red"><?php echo $msj; ?></font> 
      
           <table cellpadding="0" cellspacing="0" border="1" class="stdtable" id="dyntable" width="80%">
                <thead>
                    <tr>
                        <th class="head1" style="width: 5%;">Consult ID</th>
						 <th class="head1" style="width:5%;">User ID</th>
                        <th class="head1" style="width:5%;">Drug Name</th>
						<th class="head1" style="width: 5%;">ACTION</th>
                        
                        
                    </tr>
                </thead> 
                <tbody> 
                    <?php
									
                    while($db_field = mysql_fetch_array($result)) {?>
                    <tr class="gradeA">
						<td align="center"><?php echo $db_field['consult_id']; ?></td>
                        <td align="center"><?php echo $db_field['id']; ?></td>
						<td align="center"><?php echo $db_field['drug'];echo "<br>"; ?><?php  echo $db_field['drug2']; echo "<br>";?><?php echo $db_field['drug3']; echo "<br>"; ?><?php echo $db_field['drug4']; echo "<br>"; ?><?php echo $db_field['drug5']; echo "<br>";?></td>
						<td><a href="calculation.php">VIEW</td>
                        
                       
						
					  
 
					
					   
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

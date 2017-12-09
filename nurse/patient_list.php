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
  
   <a href="dashboard2.php">Profile</a>
  <a href="register_patient.php">Patient Registeration</a>
  <a href="patient_list.php">Patient Information</a>
   <a href="search_student.php">Patient Information</a>
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

 
$result = mysql_query("SELECT * FROM patient");
?>

<div class="wrapper row3">
  <div class="rnd">
    <div id="container" class="clear">
      <center><h2>Patient Information</h2><center>
      <font color="red"><?php echo $msj; ?></font> 
       
           <table cellpadding="0" cellspacing="0" border="1" class="stdtable" id="dyntable">
                <thead>
                    <tr>
                        <th class="head1" style="width: 5%;">No Matric</th>
						 <th class="head1" style="width:10%;">Full Name</th>
                        <th class="head1" style="width: 5%;">No IC</th> 
                        <th class="head0" style="width: 5%;">Gender</th> 
						<th class="head0" style="width: 5%;">Phone Number</th> 
						<th class="head0" style="width: 5%;">Faculty</th> 
						<th class="head0" style="width: 5%;">Status</th> 
                        <th class="head1 nosort" style="width: 5%;">Action</th> 
                    </tr>
                </thead> 
                <tbody> 
                    <?php 
                    while($db_field = mysql_fetch_array($result)) {?>
                    <tr class="gradeA">
                        <td align="center"><?php echo $db_field['MatricNo']; ?></td>
						<td align="center"><?php echo $db_field['FullName']; ?></td>
                        <td align="center"><?php echo $db_field['IC_num']; ?></td>
						<td align="center"><?php echo $db_field['Gender']; ?></td>
                        <td align="center"><?php echo $db_field['Tel_No']; ?></td>
						<td align="center"><?php echo $db_field['Faculty']; ?></td>
						<td align="center"><?php echo $db_field['status']; ?></td>
                        <td><a href="nurse_edit.php<?php echo '?MatricNo='.$db_field['MatricNo']; ?>" >UPDATE
						<a href="delete_patient.php<?php echo '?MatricNo='.$db_field['MatricNo']; ?>" >DELETE</td>
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







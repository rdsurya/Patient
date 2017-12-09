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
 <a href="dashboard3.php">Profile</a>
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



$result = mysql_query("SELECT * FROM patient where status='treat'");

?>

<div class="wrapper row3">
  <div class="rnd">
    <div id="container" class="clear">
      <center><h2>Patient Treatment</h2></center>
      <font color="red"><?php echo $msj; ?></font> 
      
           <table cellpadding="0" align="center" cellspacing="0" border="1" width="70%" class="stdtable" id="dyntable">
                <thead>
                    <tr>
                        <th class="head1">MatricNo</th>
						 <th class="head1">Name</th>
                        
                         <th class="head1 nosort">Action</th>
                    </tr>
                </thead> 
                <tbody> 
				   <?php 
                    while($db_field = mysql_fetch_array($result)) {?>
                    <tr class="gradeA">
                        <td align="center"><?php echo $db_field['MatricNo']; ?></td>
						<td align="center"><?php echo $db_field['FullName']; ?></td>
						<td><a href="consult_update.php<?php echo '?consult_id='.$db_field['consult_id']; ?>" >CONSULT  
						</td>
						
						
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
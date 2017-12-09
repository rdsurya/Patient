
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

<?php
error_reporting();
 include '../database.php'; ?>
<?php 


   if(isset($_POST['drug_id'])&&isset($_POST['drug_name'])&&isset($_POST['drug_description'])&&isset($_POST['price_per_unit'])
  &&$_POST['drug_id']!=''&&$_POST['drug_name']!=''&&$_POST['drug_description']!=''&&$_POST['price_per_unit']!=''){
	  
  $sql = "INSERT INTO drug(`drug_id`, `drug_name`, `drug_description`, `price_per_unit`) 
  VALUES('".addslashes(ucwords($_POST['drug_id']))."','".addslashes($_POST['drug_name'])."','".addslashes($_POST['drug_description'])."', 
  '".addslashes($_POST['price_per_unit'])."')";
  $res_newuser = mysql_query($sql);
  }
?>

<div class="wrapper row3">
  <div class="rnd">
    <div id="container" class="clear" style="margin-left: 470px;">
		</br>
		</br>
		<h2>Drug Registration Form</h2>
        <form action="drug_registration.php" method="post">
			
            <table cellpadding="3" cellspacing="5" border="0" class="stdtable">
				<tr>
                    <td>Drug ID <font color="red">*</font></td><td> : </td><td><input type="text" id="drug_id" name="drug_id" placeholder="DrugID"  required></td>
                </tr>
				<tr>
                    <td>Drug Name <font color="red">*</font></td><td> : </td><td><input type="text" id="drug_name" name="drug_name" placeholder="DrugName" required></td>
                </tr>
				<tr>
                    <td>Drug Description <font color="red">*</font></td><td> : </td><td><input type="text" id="drug_description" name="drug_description" placeholder="DrugDescription" required></td>
                </tr>
				<tr>
                    <td>Price(RM) <font color="red">*</font></td><td> : </td><td><input type="text" id="price_per_unit" name="price_per_unit" placeholder="Price"></td>
                </tr>
                
				
                <tr>
                    <td></td><td></td><td><input type="submit" class="button" id="submit" name="submit" value="Submit">&nbsp;<input type="reset" class="button" value="Clear"> </td>
                </tr>
            </table>   
        </form>  
    </div>
  </div>
</div>


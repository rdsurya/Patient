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
  <a href="register.php">Patient Registeration</a>
  <a href="patient_list.php">Patient Information</a>
  <a href="payment.php">Payment</a>
 <a href="../logout.php">Log Out</a>
</div> 

<?php include '../database.php'; ?>
<?php 
  
  if(isset($_POST['MatricNo'])&&isset($_POST['FullName'])&&isset($_POST['IC_num'])&&isset($_POST['Gender'])&&isset($_POST['Faculty'])&&isset($_POST['Tel_No'])&&isset($_POST['status'])
  &&$_POST['MatricNo']!=''&&$_POST['FullName']!=''&&$_POST['IC_num']!=''&&$_POST['Gender']!=''&&$_POST['Faculty']!=''&&$_POST['Tel_No']!=''&&$_POST['status']!=''){
	  
  $sql = "INSERT INTO patient (`MatricNo`, `FullName`, `IC_num`, `Gender`, `Faculty`, `Tel_No`, `status`) 
  VALUES('".addslashes(ucwords($_POST['MatricNo']))."','".addslashes($_POST['FullName'])."','".addslashes($_POST['IC_num'])."', 
  '".addslashes($_POST['Gender'])."', '".addslashes($_POST['Faculty'])."', '".addslashes($_POST['Tel_No'])."', '".addslashes($_POST['status'])."')";
  $res_newuser = mysql_query($sql);
  }
  
?>



<table align="center">
<tr align="center"><p align="center" id="as">Patient Registeration</p></tr>
</table>
<center><fieldset style="width:30%">
<table align="center">
	<center>
		<form action="register_patient.php" method="post" >
        <br><br>
            <table cellpadding="5" cellspacing="3" border="0" class="stdtable">
				<tr><center>
				  <td>Matric No <font color="red">*</font></td><td> : </td><td><input type="text" id="MatricNo" name="MatricNo" maxlength="10" placeholder="MatricNo"></td>
                </tr></center>
                    <td>Full Name <font color="red">*</font></td><td> : </td><td><input type="text" id="FullName" name="FullName" placeholder="FullName" pattern="[a-zA-Z\s]+" title="words only" required></td>
                </tr>
				<tr>
                    <td>No IC <font color="red">*</font></td><td> : </td><td><input type="text" id="IC_num" name="IC_num" maxlength="12" placeholder="NoIC" required></td>
                </tr>
                <tr>
                    <td>Gender <font color="red">*</font></td><td> : </td><td><select name='Gender' id="Gender" style="width:145px;">
					<option value="--" name="--">Gender</option>
					<option value="male" name="male">Male</option>
					<option value="female" name="female">Female</option>
					</select></td>
                </tr> 
				<tr>
                    <td>Faculty <font color="red">*</font></td><td> : </td><td><select name='Faculty'  id="Faculty" style="width:145px;"> 
					<option value="--" name="--">Faculty</option>
					<option value="ftk" name="ftk">FTK</option>
					<option value="ftmk" name="ftmk">FTMK</option>
					<option value="fkm" name="fkm">FKM</option>
					<option value="fptt" name="fptt">FPTT</option>
					<option value="fke" name="fke">FKE</option>
					<option value="fkekk" name="fkekk">FKEKK</option>
					</select></td>
                </tr> 
				</tr> 
					<td>Phone Number <font color="red">*</font></td><td> : </td><td><input type="text" pattern="^[0-9]*$" id="Tel_No" name="Tel_No" maxlength="11" placeholder="PhoneNumber" required></td>
                </tr> 
                <tr>
                    <td>Status <font color="red">*</font></td><td> : </td><td><input type="text" id="status" name="status" placeholder="status" required>
                </tr>
				<tr>
        
                </tr>
                <tr>
                    <td></td><td></td><td><input type="submit" class="button" id="submit" name="submit" value="Submit">&nbsp;<input type="reset" class="button" value="Clear"> </td>
			</tr>
            </table> 
        </form>  
		
    </div>
	</fieldset></center>
  </div>
</div>

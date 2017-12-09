<style>
body {margin:0;
background-color: #DCDCDC;}

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

.container{
	background-color: white;
    width: 300px;
    border: 5px solid ;
    padding: 25px;
    margin: 25px;
	margin-left: 35%;
	
}

</style>


<?php
//error_reporting(0); 
session_start();
include "database.php";
 
$msjW = '';
$msjR = '';
?> 
<?php
$msj= "";

if(isset($_POST['login'])){ 
// noic and password sent from form 
$myusername=$_POST['user_name']; 
$mypassword=$_POST['password']; 


$sql="SELECT * FROM user WHERE user_name='$myusername'";

 
$result=mysql_query($sql) or die('SQL Error :: '.mysql_error());
$db_field = mysql_fetch_array($result);

 
// If result matched $myusername and $mypassword, table row must be 1 row
if(mysql_num_rows($result)==1&&$db_field['password']==$mypassword){


$_SESSION['id'] =  $db_field['id']; 
 $_SESSION["Role"] = $db_field["Role"];
	if($db_field['Role']=="admin"){
		header("location:admin/dashboard.php");
	}
	else if($db_field["Role"] == "nurse"){
		header("location:nurse/dashboard2.php");

	}
	else if($db_field["Role"] == "doctor"){
		header("location:doctor/dashboard3.php");

	}

}
else if($myusername==''||$mypassword==''){
$_SESSION['id'] = '';
$msjW= "Please key in the required information";
}
else if($db_field['password']!=$mypassword){
$_SESSION['id'] = '';
$msjW= "Wrong Password";
echo $sql;
}
else {
$_SESSION['id'] = '';
$msjW= "Sorry. You are not in the system. Please Register";
}
}

?>
<!-- ####################################################################################################### -->
<div class="wrapper row3">
  <div class="rnd">
    <div id="container" class="clear">
      <!-- ####################################################################################################### --> 
      
	  
	  </br>
	  </br>
	  </br>
	  </br>
	  </br>
	  </br>
	  </br>
	  <h2 style="margin-left: 30%">WELCOME PATIENT INFORMATION SYSTEM</h2>
	  <div class="container" style="background-color: white">
      <font color="red"><?php echo $msjW; ?></font> 
      <form action="index.php" method="post">  
            <table cellpadding="0" cellspacing="0" border="0" class="stdtable" style="margin-left: 10%">
                <tr>
                    <td>User Name <font color="red">*</font></td><td> : </td><td><input type="text" id="user_name" name="user_name" placeholder="User Name" required></td>
                </tr>
				
				
                <tr>
                    <td>Password <font color="red">*</font></td><td> : </td><td><input type="password" id="password" name="password" placeholder="Password" required></td>
                </tr> 
                <tr>
				<br/>
                    <td></td><td></td><td><input type="submit" class="button" name="login" id="login" id="login" value="Submit">&nbsp;<input class="button" type="reset" value="Clear"></td>
                </tr>
            </table>   
        </form> 
		</div>

      <!-- ####################################################################################################### -->
    </div>
  </div>
</div>
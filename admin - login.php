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
  <a href="#home">Home</a>
  <a href="login.php">Login</a>
  <a href="#about">About</a>
  </div>
<?php 
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
$_SESSION['idlevel'] = $db_field['name'];
if($db_field['name']==admin){
	echo '<script>document.location.href="admin/dashboard.php" </script>';}
else{
echo '<script>document.location.href="admin/dashboard.php" </script>';}
}
else if($myusername==''||$mypassword==''){
session_start();
$_SESSION['id'] = '';
$msjW= "Please key in the required information";
}
else if($db_field['password']!=$mypassword){
session_start();
$_SESSION['id'] = '';
$msjW= "Wrong Password";
}
else {
session_start();
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
      <h2>Log In</h2>
      <font color="red"><?php echo $msjW; ?></font> 
      <form action="login.php" method="post">  
            <table cellpadding="0" cellspacing="0" border="0" class="stdtable">
                <tr>
                    <td>User Name <font color="red">*</font></td><td> : </td><td><input type="text" id="user_name" name="user_name" placeholder="User Name" required></td>
                </tr>
                <tr>
                    <td>Password <font color="red">*</font></td><td> : </td><td><input type="password" id="password" name="password" placeholder="Password" required></td>
                </tr> 
                <tr>
                    <td></td><td></td><td><input type="submit" class="button" name="login" id="login" id="login" value="Submit">&nbsp;<input class="button" type="reset" value="Clear"></td>
                </tr>
            </table>   
        </form> 

      <!-- ####################################################################################################### -->
    </div>
  </div>
</div>
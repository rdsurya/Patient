<html>
<head>
<title> Nurse Page </title>

<style>
body {margin:0;
background-color: #DCDCDC;
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

..sidenav{
	background-color: white;
    width: 230px;
	height: 100%;
    border: 0px solid ;
    padding: 25px;
    margin: 25px;
	margin-left: 0%;
	margin-top: 0%;
	
}

.box1{
    background-color: white;
    width: 100px;
	height: 80px;
    border: 25px solid #0066ff;;
    padding: 25px;
    margin: 25px;
	float: left;
	box-shadow: 10px 10px;
}

.mainmenu {
    margin-left: 230px; /* Same as the width of the sidenav */
}


</style>

</head>

<body>

 <div class="topnav" id="myTopnav">
 
  <a href="dashboard2.php">Profile</a>
  <a href="register_patient.php">Patient Registration</a>
   <a href="patient_list.php">Patient Information</a>
   <a href="payment.php">Payment</a>
  <a href="../logout.php">Log Out</a>
</div> 
<?php 
include '../global.php';
session_start(); 
if ($_SESSION['id'] == '') {
echo '<script>document.location.href="'.$base_url.'" </script>';
} 
$user_id = $_SESSION['id'];
$msj= "";$now= date("Y-m-d");
include "../database.php";
?>

 <div class ="sidenav">
     
      <div id="content">
        <h1>Profile</h1> 
        <?php
        $sql="SELECT * FROM user WHERE id='$user_id'"; 
        $result=mysql_query($sql) or die('SQL Error :: '.mysql_error());
        $db_field = mysql_fetch_assoc($result);
        ?>
        
        <p><strong>Name: </strong><?php echo $db_field['name'];?></p>
        <p><strong>Email : </strong><?php echo $db_field['email'];?></p>
        <p><strong>Phone_no : </strong><?php echo $db_field['phone_no'];?></p>
		<button> UPDATE </button>
      </div>
    
    </div>
  </body>
</html>
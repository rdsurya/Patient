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
  <a href="#">Profile</a>
  <a href="register.php">Staff Registeration</a>
  <a href="user_list.php">Staff information</a>
  <a href="../logout.php">Log Out</a>
</div> 
<?php 
session_start(); 
if ($_SESSION['id'] == '') {
echo '<script>document.location.href="'.$base_url.'" </script>';
} 
$user_id = $_SESSION['id'];
$msj= "";$now= date("Y-m-d");
include "../database.php";
?>
<div class="wrapper row3">
  <div class="rnd">
    <div id="container" class="clear">
      <!-- ####################################################################################################### -->
      <div id="content">
        <h1>Profil diri</h1> 
        <?php
        $sql="SELECT * FROM user WHERE id='$user_id'"; 
        $result=mysql_query($sql) or die('SQL Error :: '.mysql_error());
        $db_field = mysql_fetch_assoc($result);
        ?>
        <?php 
        /*$imge_url = $base_url."upload/".$db_field['img'];*/
        if(@GetImageSize($imge_url)){ ?>
           <img class="imgl" src="<?php echo $imge_url;?>" width="125" height="125">
        <?php }else{ ?>
           <img class="imgl" src="<?php echo $base_url;?>images/icons/no_pic.jpg" width="125" height="125">
        <?php }?> 
        <p><strong>Name: </strong><?php echo $db_field['name'];?></p>
        <p><strong>Email : </strong><?php echo $db_field['email'];?></p>
        <p><strong>Phone_no : </strong><?php echo $db_field['phone_no'];?></p>
      </div>
    <!--  <div id="column">    
        <div class="subnav">
          <h2>Menu</h2>
          <ul>
            <li><a href="<?php echo $base_url;?>admin/dashboard.php">Home</a></li>
            <li><a href="<?php echo $base_url;?>admin/profile.php">Profile</a></li>
            <li><a href="<?php echo $base_url;?>admin/dashboard.php">Password</a></li>
			<li><a href="<?php echo $base_url;?>admin/new_user.php">Add Menu</a></li>
			<li><a href="<?php echo $base_url;?>admin/dashboard.php">Delete Order</a></li>
            <li><a href="<?php echo $base_url;?>admin/dashboard.php">Print</a></li>
            <li><a href="<?php echo $base_url;?>logout.php">Log Out</a></li>
          </ul>
        </div> 
      </div> -->
      <!-- ####################################################################################################### -->
      <!-- ####################################################################################################### -->
    </div>
  </div>
</div>
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
 <?php include '../template/header2.php'; ?> 
    <?php     
   if(isset($_POST['submit'])){ 
   
    $sql="SELECT * FROM user WHERE noic='".$_POST['noic']."'"; 
    $result=mysql_query($sql) or die('SQL Error :: '.mysql_error());
    $db_field = mysql_fetch_assoc($result);
    
   if(isset($_POST['name'])&&isset($_POST['noic'])&&isset($_POST['handphone'])&&$_POST['name']!=''&&$_POST['noic']!=''&&$_POST['handphone']!=''){  
 
    $name = $_POST['name']; 
    $noic = $_POST['noic'];  
    $email = $_POST['email']; 
    $address = $_POST['address']; 
    $handphone = $_POST['handphone']; 

    // If result matched $myusername and $mypassword, table row must be 1 row
    if(mysql_num_rows($result)==0||(mysql_num_rows($result)!=0&&$db_field['id']==$user_id)){ 
        
    if(!is_numeric($noic)){$noicERR = 'Sila pastikan no kad pengenalan dalam bentuk integer<br>';}
    else if(!is_numeric($handphone)){$handphoneERR = 'Sila pastikan bimbit dalam bentuk integer<br>';}
    else if(!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)){$emailERR = 'Emel tidak sah<br>';} 
    else if($_FILES["img"]["name"]!=''){
    $allowedExts = array("gif", "jpeg", "jpg", "pjpeg", "x-png", "png");
    $temp = explode(".", $_FILES["img"]["name"]);
    $extension = end($temp);
    $new_file = time().'.'.$extension;
    
    if ((($_FILES["img"]["type"] == "image/gif")
    || ($_FILES["img"]["type"] == "image/jpeg")
    || ($_FILES["img"]["type"] == "image/jpg")
    || ($_FILES["img"]["type"] == "image/pjpeg")
    || ($_FILES["img"]["type"] == "image/x-png")
    || ($_FILES["img"]["type"] == "image/png"))
    && ($_FILES["img"]["size"] < 10485760)//10MB=10485760byte
    && in_array($extension, $allowedExts)) {
      if ($_FILES["img"]["error"] > 0) {
        $imgERR = $_FILES["img"]["error"] . "<br>";
      } else { 
          move_uploaded_file($_FILES["img"]["tmp_name"], "../upload/" . $new_file);
         
         $sql = "Update user set name='$name', email='$email', noic='$noic', handphone='$handphone', address='$address', img='$new_file' where id='$user_id'";
         $result=mysql_query($sql);
      
         $msj = 'Update Succesfull'; 
      }
    }
    }
    else if($_FILES["img"]["name"]==''){
    $new_file = '';  
    $sql = "Update user set name='$name', email='$email', noic='$noic', handphone='$handphone', address='$address' where id='$user_id'";
    $result = mysql_query($sql);    
      
    $msj = 'Update Succesfull';          
    } else {
      $imgERR = "Please make sure that the file is in gif, jpeg, jpg, pjpeg, png format and not than 10MB<br>";
    } 
    }else{
    $msj = 'Sorry your ic number not valid';
    }
   }else{
    $msj= 'Please enter the required information';               
   }
  }
  ?>
<!-- ####################################################################################################### -->
<div class="wrapper row3">
  <div class="rnd">
    <div id="container" class="clear">
      <!-- ####################################################################################################### --> 
      <h6>Profil</h6>
      <font color="red"><?php echo $msj; ?></font> 
	  
              <form action="<?php echo $base_url;?>admin/profil.php" method="post" enctype="multipart/form-data">  
                    <table cellpadding="0" cellspacing="0" border="0" class="stdtable">
                        <?php
                        $sql="SELECT * FROM user WHERE user.id='".$user_id."'"; 
                        $result=mysql_query($sql) or die('SQL Error :: '.mysql_error());
                        $db_field = mysql_fetch_array($result);
                        ?>
                        <tr>
                                <td><input type="hidden" id="user_id" name="user_id" value="<?php echo $db_field['0'];?>"></td>
                                <td>
                                <?php 
                                $imge_url = $base_url."upload/".$db_field['img'];
                                if(@GetImageSize($imge_url)){ ?>
                                   <img src="<?php echo $imge_url;?>" width="150px" height="150px">
                                <?php }else{ ?>
                                   <img src="<?php echo $base_url;?>images/icons/no_pic.jpg" width="150px" height="150px">
                                <?php }?>
                                </td>
                        </tr>
                        <tr>
                                <td><label for="name">Picture:</label></td>
                                <td><input type="file" name="img" id="img"></td>
                        </tr> 
                        <tr>
                                <td><label for="name">Name:</label></td>
                                <td><input type="text" id="name" name="name" value="<?php echo $db_field['name'];?>"></td>
                        </tr>
                        <tr>
                                <td><label for="nickname">IC Number:</label></td>
                                <td><input type="text" id="noic" name="noic" value="<?php echo $db_field['noic'];?>"></td>
                        </tr>
                        <tr>
                                <td><label for="gender1">Email:</label></td>
                                <td><input type="text" id="email" name="email" value="<?php echo $db_field['email'];?>"></td>
                        </tr>
                        <tr>
                                <td><label for="phone-number">Handphone:</label></td>
                                <td><input type="text" id="handphone" name="handphone" value="<?php echo $db_field['handphone'];?>"></td>
                        </tr> 
                        <tr>
                                <td><label for="address">Address:</label></td>
                                <td><textarea name="address" id="address" cols="30" rows="5"><?php echo $db_field['address'];?></textarea></td>
                        </tr>
                        <tr>
                                <td> </td>
                                <td><input id="submit" name="submit" type="submit" class="button" value="submit" /></td>
                        </tr>
                    </table>   
                </form>
      <p>&nbsp;</p> 
      <!-- ####################################################################################################### -->
    </div>
  </div>
</div>
<!-- ####################################################################################################### -->
<?php include '../template/footer1.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script> 
function calcExpenses() {
  

  var food=parseInt(document.getElementById("qty_").value);
 

  if(isNaN(qty_)){
    alert("Please enter number value");
    qty_.focus();
    qty_.select();

    return false;
  }

  else {

    document.getElementById("totalPrice").value=CalcValue(qty_);}

    function CalcValue(qty_)
    {
      var sum = qty_
      var totSum = sum.toFixed(2);
      return totSum;
    }
  }
}
 </script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Payment</title>
<link rel="stylesheet" type="text/css" href="Style/viewtablesearch.css" />

<script src="js/function.js?"></script> 
<td><input type="submit" name="submit" onClick="return calcExpenses" value="Submit" /></td>
<?php
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'patient_system'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}
//panggil data-table		
$sql = 'SELECT * 
		FROM drug';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>
<style></style>
</head>		
<font style=" font:bold 44px 'Aleo'; text-shadow:1px 1px 15px #000; color:#fff;"><center>Payment Recipt</center></font>
<br><br><br>
<body style = "background: url(fi3.jpg); background-size: 100%;">
<body>
<br><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

	
     
     
        
    </select>
    </div><br><br>
	<form action="resit.php" method="post" id="fm">
	<table>
    	<tr>
	
			<td width="4%" bgcolor="lightblue"><strong>Drug ID</strong></td>
            <td width="4%" bgcolor="lightblue"><strong>Drug Name</strong></td>
            <td width="4%" bgcolor="lightblue"><strong>Price</strong></td>
            <td width="4%" bgcolor="lightblue"><strong>Quantity</strong></td>
			<td width="4%" bgcolor="lightblue"><strong>Total Price</strong></td>
        
    	</tr>
		
 <?php
			include "../database.php";	
			$j = 0;
			$i = "select * from drug";
			$h = mysql_query($i);
			while($tr=mysql_fetch_array($h))
				
			{
		?>
        <tr>
			
			<td width="4%"  bgcolor="white"><?php echo $tr["drug_id"]; ?></td>
        	<td width="4%"  bgcolor="white"><?php echo $tr["drug_name"]; ?></td>
			<td width="4%" bgcolor="white"><?php echo $tr["price_per_unit"]; ?></td>
			<input type ="hidden" name="drug_id<?php echo $j; ?>" id="drug_id<?php echo $j; ?>"  value="<?php echo $tr["drug_id"]; ?>">
			
			
			
			<td width="4%"  bgcolor="white">
			<input type='button'  name='subtract' onclick='Total("<?php echo $tr["drug_name"]; ?>", "qty_<?php echo $j; ?>",-1, "total_<?php echo $j; ?>","<?php echo $tr["price_per_unit"]; ?>");' value='-'/> 	
			 <input type='button' name='add' onclick='Total("<?php echo $tr["drug_name"]; ?>", "qty_<?php echo $j; ?>",1, "total_<?php echo $j; ?>","<?php echo $tr["price_per_unit"]; ?>");' value='+'/> 	
			 <input type='text' name="qty_<?php echo $j; ?>" id='qty_<?php echo $j; ?>' value="0"/></td>
			<td width="4%" bgcolor="white"><input type='text' name='total_<?php echo $j; ?>' id='total_<?php echo $j; ?>' value="0" /></td>
 				
        </tr>
		 
        <?php
				$j++;
			}
		?>
		
		
		<td><input type="submit" name="submit" value="Submit" /></td>
    </table>
	</form>
</body>
</div>
</html>
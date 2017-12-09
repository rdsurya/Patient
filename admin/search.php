<HTML>
<head>
<html>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Inventory Management System UTeM </title>
<style type="text/css">
body,td,th {
	color: #000000;
	font-size: 18px;
	font-weight: bold;
}
body {
	background-color: #00000;
}
#header .clearfix div .navigation li {
	font-family: Arial Black, Gadget, sans-serif;
}
</style>
</head>

<body>
<table align="center" width="1114" height="206" border="1">
  <tr bgcolor="#FFFFFF">
    	<th width="266"><img src="inventory-management.jpg" width="1106" height="183" /></th>
  </tr>
   
	<tr>
    	<th style="font: ETH; font-size: 24px; font-family: 'Century Gothic'; color: 	#6495ED; font-weight: bold;"><div align="center"><strong><em>INVENTORY SYSTEM(ADMIN)</em></strong></div></th>
  </tr>
    
</table>
</head>
<link rel="stylesheet" href="style1.css" />
	<title> Product Register </title>
	
</head>

<?php
if (isset($_POST["searchstring"])){
	$searchstring = $_POST["searchstring"];
	$searchtype =$_POST["searchtype"];
}


if (isset($searchstring))
{
$sql="SELECT * FROM product WHERE $searchtype LIKE '%$searchstring%' ORDER BY Product_nama ASC";
$db = mysql_connect("localhost", "root", "");
mysql_select_db("system_inventory",$db);
$result = mysql_query($sql,$db);
echo "<TABLE BORDER=2>";
echo"<TR><TD><B>Product Name</B></TD><TD><B>ProductType</B></TD><TD><B>Product Quantity </B></TD><TD><B>Supplier Name</B><TD><B>Supplier Address</B></TD><TD><B>Supplier Contact</B></TD><TD><B>Options</B></TD></TR>";
while ($myrow = mysql_fetch_array($result))
{
echo "<TR><TD>".$myrow["Product_nama"]."</TD><TD>".$myrow["Product_type"]."</TD><TD>".$myrow["Product_quantity"]."</TD><TD>".$myrow["Supplier_name"]."</TD><TD>".$myrow["Supplier_address"]."</TD><TD>".$myrow["Supplier_contact"]."</TD>";
echo "<TD><a href=\"view_letter.php?id=".$myrow["Product_nama"]."\">View</a></TD></TR>";
}
echo "</TABLE>";
}
else
{
?>
<body>
<h1>Search Product Detail</h1>


<form method="POST" action="search.php">
<table width="403" height="71" border="2" cellspacing="2">
<tr><td><p>Insert you search string here</p></td>
<td><blockquote>
  <p>Search type</p>
</blockquote></td>
</tr>
<tr>
<td><input type="text" name="searchstring" size="28"></td>
<td><select size="1" name="searchtype">
<option selected value="Product_nama">Product name</option>
<option selected value="Product_type">Product Type</option>
<option selected value="Product_quantity">Product Quantity</option>
<option selected value="Supplier_name">Supplier Nama</option>
<option selected value="Supplier_address">Supplier Address</option>
<option selected value="Supplier_contact">Supplier Contact </option>
</select></td>
</tr>
</table>
<blockquote>
  <p>
    <input type="submit" value="Submit" name="B1">
    <input type="reset" value="Reset"
>
  </p>
</blockquote>
</form>
</body>
<?php
}
?>
</HTML>

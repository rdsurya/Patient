<html>
<?php

include "../database.php";


	$s2 = "select * from drug order by drug_id desc limit 1 ";
	$h2 = mysql_query($s2);
	$r2 = mysql_fetch_assoc($h2);
    $oid = $r2["drug_id"];

	$s = "select * from payment";
	$h = mysql_query($s);
	$tr=mysql_num_rows($h);

	//ahhh shit. This is my code

	$sql = "select * from drug";
	$result = mysql_query($sql);
	$intRows = mysql_num_rows($result);

	$strDate = date("YmdHis");
	$strLastTwo = mt_rand(10, 99);
	$bookNo = $strDate . $strLastTwo;

	//---------- end of shit -------------------------

for ($i=0; $i<$intRows; $i++)
{
	if($_POST["qty_".$i] != 0)
	{
		$leDrugID = $_POST['drug_id'.$i];
	$s3 = "insert into payment(drug_id,quantity,drug_name,total_price, bill_no) values ('$leDrugID',".$_POST['qty_'.$i].", '".$_POST['drug_name_'.$i]."' ,".$_POST['total_'.$i].", '$bookNo')";
	// echo $s3."<br />";
	$h3 = mysql_query($s3);
	}

}
$sql ="select max(drug_id) as orderlatest from payment";
$sqlExecute = mysql_query($sql) or die (mysql_error());
$result = mysql_fetch_assoc($sqlExecute);

$drug_id = $result['orderlatest'];
$sql2 = "select m.price_per_unit*o.quantity as total_price, m.drug_name, o.quantity  from drug m, payment o  where m.drug_id = o.drug_id and o.bill_no = '$bookNo'";
$excutesql2 = mysql_query($sql2) or die (mysql_error());
$totalAll = 0;
while($resultSql2 =  mysql_fetch_assoc($excutesql2)){
	echo "Menu :";
	echo $resultSql2['drug_name'];
	echo "</br>";
	echo "Quantity  :";
	echo $resultSql2['quantity'];
	echo "</br>";
	echo "Price(RM) :";
	echo $resultSql2['total_price'];
	echo "</br>";
	$totalAll = $totalAll + $resultSql2['total_price'];

}
echo "Total Price(RM) :";
echo $totalAll;

?>
<style>
a {
    text-decoration: none;
    display: inline-block;
    padding: 8px 16px;
}

a:hover {
    background-color: #ddd;
    color: black;
}

.previous {
    background-color: #f1f1f1;
    color: black;
}

.next {
    background-color: #4CAF50;
    color: white;
}

.round {
    border-radius: 50%;
}
</style>
&nbsp
&nbsp
<a href="receipt.php" class="next">Print Receipt &raquo;</a>
</html>

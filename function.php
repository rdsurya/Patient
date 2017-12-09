// JavaScript Document

//masukkan dalam calculation file
<script src="js/function.js?"></script> 
<td><input type="submit" name="submit" onClick="return calcExpenses" value="Submit" /></td>


//function.js
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
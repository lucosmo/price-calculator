<?php
  /**
   * Checks if imput contains numeric value
   * @param string $variable value passed from form's input
   * @return string $variable | boolean false Modified value received from form's input or false
  */
function check($variable)
{
	$variable=trim($variable);
	$variable=stripslashes($variable);
	$variable=htmlspecialchars($variable);
	if(is_numeric($variable))
		return $variable;
	else return false;
}

/*
   CHANGE BELOW INTO FUNCTION(S)
*/
function calculatePrices()
{
}
$price1=check($_GET["price1"]);
$price2=check($_GET["price2"]);
$quantity1=check($_GET["quantity1"]);
$quantity2=check($_GET["quantity2"]);
if($price1!=null && $price2!=null && $quantity1!=null && $quantity2!=null){
	$pricePerUnit1=$price1/$quantity1;
	$pricePerUnit2=$price2/$quantity2;
	$better=($pricePerUnit1<$pricePerUnit2)?"1st":"2nd";
	echo "1st price per unit: ".number_format($pricePerUnit1,2)."<br>2nd price per unit: ".number_format($pricePerUnit2,2)."<br><p>".$better." offer is better</p>";
	
}

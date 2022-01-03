function calculate(){
var xmlhttp;
if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
	xmlhttp=new XMLHttpRequest();
}
else{// code for IE6, IE5
	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
var price1=document.getElementById('price1').value;
var price2=document.getElementById('price2').value;
var quantity1=document.getElementById('quantity1').value;
var quantity2=document.getElementById('quantity2').value;
//alert("price1="+price1+"&price2="+price2+"&quantity1="+quantity1+"&quantity2="+quantity2);
xmlhttp.onreadystatechange=function() {
 if (xmlhttp.readyState==4 && xmlhttp.status==200) {
    var content="<h2>"+xmlhttp.responseText+"</h2>";
    document.getElementById("answer").innerHTML=content;
 }
}
xmlhttp.open("GET","calculate.php?price1="+price1+"&price2="+price2+"&quantity1="+quantity1+"&quantity2="+quantity2,true);
xmlhttp.send();
return false;
}

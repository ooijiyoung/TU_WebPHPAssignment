var phoneP = 3499;
var noteP = 3199;
var mbpP = 4199;
var spP = 4999;
var nbP = 5699;


function calc(quantity,price,total){
	console.log(quantity + price + total);
	total.innerHTML = "RM" + (quantity.value * price).toLocaleString(undefined, {minimumFractionDigits: 2});
	getTotal();
}

function getTotal(){
	var total = 0.0;
	var phNo = document.getElementById("phoneQuantity").value;
	var noteNo = document.getElementById("noteQuantity").value;
	var mbpNo = document.getElementById("macBookQuantity").value;
	var spNo = document.getElementById("surfaceQuantity").value;
	var nbNo = document.getElementById("laptopQuantity").value;
	total = (phNo * phoneP) + (noteNo * noteP) + (mbpNo * nbP) + (spNo * spP) + (nbNo * nbP);
	
	var price = total.toLocaleString(undefined, {minimumFractionDigits: 2});
	
	
	document.getElementById("crt_amnt_total").innerHTML = "RM" + price;
}
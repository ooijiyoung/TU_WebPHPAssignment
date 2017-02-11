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

function checkOut(){
	var phNo = document.getElementById("phoneQuantity").value;
	var noteNo = document.getElementById("noteQuantity").value;
	var mbpNo = document.getElementById("macBookQuantity").value;
	var spNo = document.getElementById("surfaceQuantity").value;
	var nbNo = document.getElementById("laptopQuantity").value;
	sessionStorage.jyCartPhone = phNo;
	sessionStorage.jyCartNote = noteNo;
	sessionStorage.jyCartMbp = mbpNo;
	sessionStorage.jyCartSP = spNo;
	sessionStorage.jyCartNB = nbNo;
	document.getElementById("cartFrm").submit();
}

function loadSummaryPage(){
	if(sessionStorage.jyCartPhone > 0){
		document.getElementById("phone").style.display = "table-row";
		makeFooterAtBottom();
	}
	if(sessionStorage.jyCartNote > 0){
		document.getElementById("c4").style.display = "table-row";
		makeFooterAtBottom();
	}
	if(sessionStorage.jyCartMbp > 0){
		document.getElementById("book").style.display = "table-row";
		makeFooterAtBottom();
	}
	if(sessionStorage.jyCartSP > 0){
		document.getElementById("surface").style.display = "table-row";
		makeFooterAtBottom();
	}
	if(sessionStorage.jyCartNB > 0){
		document.getElementById("laptop").style.display = "table-row";
		makeFooterAtBottom();
	}
}

function cancelOrder(){
	window.location.replace("cart.php");
}

function confirmOrder(){
	window.location.href = "checkout.php";
}
function debugSummary(){
	console.log(sessionStorage.jyCartPhone);
	console.log(sessionStorage.jyCartNote);
	console.log(sessionStorage.jyCartMbp);
	console.log(sessionStorage.jyCartSP);
	console.log(sessionStorage.jyCartNB);
}
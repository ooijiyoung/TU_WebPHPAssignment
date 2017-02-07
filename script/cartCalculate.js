function calc(quantity,price,total){
	console.log(quantity + price + total);
	total.innerHTML = "RM" + (quantity.value * price);
}
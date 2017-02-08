if(localStorage.getItem("jyCartdPhone") === null){
	localStorage.jyCartdPhone = false;
	localStorage.jyCartC4 = false;
	localStorage.jyCartdBook = false;
	localStorage.jyCartdurface = false;
	localStorage.jyCartglaptop = false;
}

var phone = localStorage.jyCartdPhone;
var c4 = localStorage.jyCartC4;
var book = localStorage.jyCartdBook;
var surface = localStorage.jyCartdurface;
var laptop = localStorage.jyCartglaptop;

function updateVar(){
	phone = localStorage.jyCartdPhone;
	c4 = localStorage.jyCartC4;
	book = localStorage.jyCartdBook;
	surface = localStorage.jyCartdurface;
	laptop = localStorage.jyCartglaptop;
}


function addCart(item){
	switch(item){
		case 1:
			localStorage.jyCartdPhone = true;
			console.log("added iphone");
			btn1.innerHTML = "Added";
			break;
		case 2:
			localStorage.jyCartC4 = true;
			console.log("added note");
			btn2.innerHTML = "Added";
			break;
		case 3:
			localStorage.jyCartdBook = true;
			console.log("added MacBook");
			btn3.innerHTML = "Added";
			break;
		case 4:
			localStorage.jyCartdurface = true;
			console.log("added surface");
			btn4.innerHTML = "Added";
			break;
		case 5:
			localStorage.jyCartglaptop = true;
			console.log("added laptop");
			btn5.innerHTML = "Added";
			break;
	}
	
}

function checkCart(){
	if(phone == "false" && c4 == "false" && book == "false" && surface == "false" && laptop == "false"){
		console.log("noitem");
	}else{
		console.log ("have item");
		document.getElementById("cartEmpty").style.display = "none";
		document.getElementById("cartFrm").style.display = "block";
	
		if(phone == "true"){
			document.getElementById("phone").style.display = "block";
			document.getElementById("phoneQuantity").value = 1;
			makeFooterAtBottom();
		}
		if(c4 == "true"){
			document.getElementById("c4").style.display = "block";
			document.getElementById("noteQuantity").value = 1;
			makeFooterAtBottom();
		}
		if(book == "true"){
			document.getElementById("book").style.display = "block";
			document.getElementById("macBookQuantity").value = 1;
			makeFooterAtBottom();
		}
		if(surface == "true"){
			document.getElementById("surface").style.display = "block";
			document.getElementById("surfaceQuantity").value = 1;
			makeFooterAtBottom();
		}
		if(laptop == "true"){
			document.getElementById("laptop").style.display = "block";
			document.getElementById("laptopQuantity").value = 1;
			makeFooterAtBottom();
		}
		getTotal();
	}
}

function removeCart(num){
	switch(num){
		case 1:
			localStorage.jyCartdPhone = false;
			console.log("removed phone");
			document.getElementById("phone").style.display = "none";
			document.getElementById("phoneQuantity").value = 0;
			break;
		case 2:
			localStorage.jyCartC4 = false;
			console.log("remove note");
			document.getElementById("c4").style.display = "none";
			document.getElementById("noteQuantity").value = 0;
			break;
		case 3:
			localStorage.jyCartdBook = false;
			console.log("remove MacBook");
			document.getElementById("book").style.display = "none";
			document.getElementById("macBookQuantity").value = 0;
			break;
		case 4:
			localStorage.jyCartdurface = false;
			console.log("remove surface");
			document.getElementById("surface").style.display = "none";
			document.getElementById("surfaceQuantity").value = 0;
			break;
		case 5:
			localStorage.jyCartglaptop = false;
			console.log("remove laptop");
			document.getElementById("laptop").style.display = "none";
			document.getElementById("laptopQuantity").value = 0;
			break;	
	}
	updateVar();
	getTotal();
	if(phone == "false" && c4 == "false" && book == "false" && surface == "false" && laptop == "false"){
		document.getElementById("cartEmpty").style.display = "block";
		document.getElementById("cartFrm").style.display = "none";
	}
	makeFooterAtBottom();
}

function cartDebug(){
	//this function is intended for developer only.
	console.log("jyCartdPhone=" + localStorage.jyCartdPhone);
	console.log("jyCartC4=" + localStorage.jyCartC4);
	console.log("jyCartdBook=" + localStorage.jyCartdBook);
	console.log("jyCartdurface=" + localStorage.jyCartdurface);
	console.log("jyCartglaptop=" + localStorage.jyCartglaptop);
}

function cartReset(){
	//this function is intended for developer only.
	localStorage.jyCartdPhone = false;
	localStorage.jyCartC4 = false;
	localStorage.jyCartdBook = false;
	localStorage.jyCartdurface = false;
	localStorage.jyCartglaptop = false;
}

function clearJYStorage(){
	//this function is intended for developer only.s
	localStorage.removeItem("jyCartdPhone");
	localStorage.removeItem("jyCartC4");
	localStorage.removeItem("jyCartdBook");
	localStorage.removeItem("jyCartdurface");
	localStorage.removeItem("jyCartglaptop");
}
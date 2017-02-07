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



function addCart(item){
	switch(item){
		case 1:
			localStorage.jyCartdPhone = true;
			console.log("added iphone");
			break;
		case 2:
			localStorage.jyCartC4 = true;
			console.log("added note");
			break;
		case 3:
			localStorage.jyCartdBook = true;
			console.log("added MacBook");
			break;
		case 4:
			localStorage.jyCartdurface = true;
			console.log("added surface");
			break;
		case 5:
			localStorage.jyCartglaptop = true;
			console.log("added laptop");
			break;
	}
}

function checkCart(){
	if(phone == "false" && c4 == "false" && book == "false" && surface == "false" && laptop == "false"){
		document.getElementById("cart").innerHTML = "No Item In Cart";
		console.log("noitem");
	}else{
		console.log ("have item");
	}
	if(phone == "true"){
		document.getElementById("phone").style.display = "block";
		makeFooterAtBottom();
	}
	if(c4 == "true"){
		document.getElementById("c4").style.display = "block";
		makeFooterAtBottom();
	}
	if(book == "true"){
		document.getElementById("book").style.display = "block";
		makeFooterAtBottom();
	}
	if(surface == "true"){
		document.getElementById("surface").style.display = "block";
		makeFooterAtBottom();
	}
	if(laptop == "true"){
		document.getElementById("laptop").style.display = "block";
		makeFooterAtBottom();
	}
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
	localStorage.jyCartdPhone = false;
	localStorage.jyCartC4 = false;
	localStorage.jyCartdBook = false;
	localStorage.jyCartdurface = false;
	localStorage.jyCartglaptop = false;
}

function clearJYStorage(){
	localStorage.removeItem("jyCartdPhone");
	localStorage.removeItem("jyCartC4");
	localStorage.removeItem("jyCartdBook");
	localStorage.removeItem("jyCartdurface");
	localStorage.removeItem("jyCartglaptop");
}
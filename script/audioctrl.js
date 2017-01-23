/* OOI JI YOUNG(C) 2015-2016 JYDesign 

BG Music control for Destination Page (if have music)
*/


function audioControlBtn() {
	var audio = document.getElementById("bgMusic");
    if(audio.paused == true){
		audio.play();
		document.getElementById("audioCtrlBtn").innerHTML = "<i class='fa fa-pause-circle-o' aria-hidden='true'></i>";
	}else{
		audio.pause(); 
		document.getElementById("audioCtrlBtn").innerHTML = "<i class='fa fa-play-circle-o' aria-hidden='true'></i>";
	}
}
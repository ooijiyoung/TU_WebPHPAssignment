//Ooi Ji Young (C) 2016

$(document).ready(function(){
	$(document).click(function(e) {
		var target = e.target;

		if (!$(target).is('.destinationCard') && !$(target).parents().is('.destinationCard') && !$(target).is('.destIntro') && !$(target).parents().is('.destIntro')) {
			$.fn.hideAll();
		}
	});
	
	$.fn.hideAll = function(){
		$("#DEST1").hide(500);
        $("#DEST2").hide(500);
		$("#DEST3").hide(500);
		$("#DEST4").hide(500);
		$("#DEST5").hide(500);
		$("#DEST6").hide(500);
		$("#DEST7").hide(500);
		$("#DEST8").hide(500);
    }
    $("#destBtn1").click(function(){
		$.fn.hideAll();
		$("#DEST1").toggle(500);
		$('html, body').animate({
			scrollTop: ($('#DEST1').offset().top)
		},450);
    });
	$("#destBtn2").click(function(){
		$.fn.hideAll();
        $("#DEST2").toggle(500);
		$('html, body').animate({
			scrollTop: ($('#DEST2').offset().top)
		},450);
    });
	$("#destBtn3").click(function(){
		$.fn.hideAll();
        $("#DEST3").toggle(500);
		$('html, body').animate({
			scrollTop: ($('#DEST3').offset().top)
		},450); 
    });
	$("#destBtn4").click(function(){
		$.fn.hideAll();
        $("#DEST4").toggle(500);
		$('html, body').animate({
			scrollTop: ($('#DEST4').offset().top)
		},450);
    });
	$("#destBtn5").click(function(){
		$.fn.hideAll();
        $("#DEST5").toggle(500);
		$('html, body').animate({
			scrollTop: ($('#DEST5').offset().top)
		},450);		
    });
	$("#destBtn6").click(function(){
		$.fn.hideAll();
        $("#DEST6").toggle(500);
		$('html, body').animate({
			scrollTop: ($('#DEST6').offset().top)
		},450);
    });
	$("#destBtn7").click(function(){
		$.fn.hideAll();
        $("#DEST7").toggle(500);
		$('html, body').animate({
			scrollTop: ($('#DEST7').offset().top)
		},450);
    });
	$("#destBtn8").click(function(){
		$.fn.hideAll();
        $("#DEST8").toggle(500);
		$('html, body').animate({
			scrollTop: ($('#DEST8').offset().top)
		},450);
		//setTimeout(function(){location.href="#DEST8"} , 500); deprecated  //
    });
	
});
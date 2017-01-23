 /*
 This Script is to make footer goes to bottom
 For short pages oni 
 2016 (c) Ooi Ji Young
 src taken and modified from stackoverflow
 
 */
 
 function makeFooterAtBottom() {
	$('#warp').css('min-height', 0);
	$('#warp').css('min-height', (
	$(document).height() 
     - $('#header').height() 
     - $('#footer').outerHeight()
   ));
 }

 // onDocumentReady function bind
 $(document).ready(function() {
	console.log("Page ready");
	makeFooterAtBottom();
 });

 // onResize bind of the function
 $(window).resize(function() {
	console.log("Page resize");
	makeFooterAtBottom();
 });

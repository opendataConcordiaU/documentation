// JavaScript Document
$(document).ready(function(){
	
	//$("#main").load("dashboard.php")
	// MENU ACTIONS
	$("#001" ).click(function() {
    	$("#main").load("getting-started.html")
	});
	
	$("#002-1" ).click(function() {
    	$("#main").load("endpoint/courses.html")
	});
	
	$("#002-2" ).click(function() {
    	$("#main").load("endpoint/library.html")
	});
	
	$("#main").load("getting-started.html")


});
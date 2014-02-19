// Load welcome Message
function welcomeMsg () {
	var wel;
	var c=confirm('Welcome to Cash Savers! Would you like to see our ad for this week?');
 if (c == false) {
	alert("Then we would load the html file.");
}
else if (c == true) {
	alert("Good job, they answered yes!");
}	
else {
	alert("This didn't work, bub.");
}

}


<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet"  href="../Assets/css/style.css">
<link rel="stylesheet" href="../Assets/font-awesome-4.7.0/css/font-awesome.min.css">

</head>
<body>
	
	
	<script language = "javascript" type = "text/javascript">
		//Browser Support Code
		function ajaxFunction() {
		var ajaxRequest;  // The variable that makes Ajax possible!
		
		try {        
		// Opera 8.0+, Firefox, Safari
		ajaxRequest = new XMLHttpRequest();
		} catch (e) {
		
		// Internet Explorer Browsers
		try {
		ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e) {
		
		try {
		ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
		} catch (e) {
		// Something went wrong
		alert("Your browser broke!");
		return false;
		}
		}
		}
		
		// Create a function that will receive data
		// sent from the server and will update
		// div section in the same page.
		ajaxRequest.onreadystatechange = function() {
		
		if(ajaxRequest.readyState == 4) {
		var ajaxDisplay = document.getElementById('mensagens');
		ajaxDisplay.innerHTML = ajaxRequest.responseText;
		}
		}
		
		// Now get the value from user and pass it to
		// server script.
		ajaxRequest.open("GET", "show.php", true);
		ajaxRequest.send(null); 
		}
		//-->
		
		setInterval(ajaxFunction,1000)
	</script>
	
	<div id ="mensagens"></div>
	</body>
</html>
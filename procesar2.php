<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Document</title>

</head>
<body>


<button onclick="ejecutarAjax()">Presioname</button>


<script src="js/jquery-3.2.1.min.js"></script>
<script>
  function ejecutarAjax() {
  	$.ajax({
  		method: "GET",
  		url: "procesar.php",
  		data: { name: "John", location: "Boston" }
  	})
  	.done(function( msg ) {
  		  alert ("Ajax Terminó");
     })
  	 .fail(function(){
  	 	alert("Ajax Falló");
  	 });
  	}
  </script>
  </body>
  </html>	
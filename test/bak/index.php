<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>load demo</title>
<style>
body {
	font-size: 12px;
	font-family: Arial;
}
</style>
<script src="jquery-1.10.2.js"></script>
</head>
<body>
	<b>Successful Response (should be blank):</b>
	<div id="success"></div>
	<b>Error Response:</b>
	<div id="error"></div>
	<script>
$( "#success" ).load( "test.php", function( response, status, xhr ) {
if ( status == "error" ) {
var msg = "Sorry but there was an error: ";
$( "#error" ).html( msg + xhr.status + " " + xhr.statusText );
}
});
</script>
</body>
</html>
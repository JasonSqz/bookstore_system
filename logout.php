<!DOCTYPE html>
<html>
<head>
	<title>logout</title>
</head>
<body>

<?php 
session_start();
session_unset();
session_destroy();
echo "Successfully logged out. Returning to homepage in 3 seconds.";
header('Refresh: 3; URL=Homepage.html');
?>

</body>
</html>
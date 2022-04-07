<!DOCTYPE html>
<html>
<head>
	<title>Delete</title>
</head>
<body>

<?php
require_once('db_setup.php');
$sql = "USE szhang71_1;";
if ($conn->query($sql) === TRUE) {

} else {
   echo "Error using  database: " . $conn->error;
}

session_start();
$pos = $_SESSION['pos'];

if ($pos === 'Manager') {
	$e_id = $_POST['E_id'];
	$sql = "DELETE FROM EMPLOYEE WHERE Employee_ID =  '$e_id';";


	$result = $conn->query($sql);

	if ($result === TRUE) {
    	echo "Record deleted successfully. Redirect to previous page in 3 seconds";
    	header('Refresh: 3; URL=manage_e.html');
	} else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
	echo "You are not authorized to do this! ";
	header('Refresh: 3; URL=Homepage.html');
} 


?>

<?php
$conn->close();
?>  

</body>
</html>

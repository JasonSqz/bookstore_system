<!DOCTYPE html>
<html>
<head>
	<title>Add Employee</title>
</head>
<body>

<?php
require_once('db_setup.php');
$sql = "USE szhang71_1;";
if ($conn->query($sql) === TRUE) {

} else {
   echo "Error using  database: " . $conn->error;
}

$e_id = $_POST['E_id'];
$f_Name = $_POST['F_Name'];
$l_Name = $_POST['L_Name'];
$pwd = $_POST['Pwd'];
$pos = $_POST['Pos'];

$sql = "INSERT INTO EMPLOYEE VALUES ('$f_Name', '$l_Name', '$e_id', '$pwd', '$pos');";

$result = $conn->query($sql);

if ($result === TRUE) {
    echo "New record added successfully. Redirect to previous page in 3 seconds";
    header('Refresh: 3; URL=manage_e.html');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
} 
?>

<?php
$conn->close();
?>  

</body>
</html>

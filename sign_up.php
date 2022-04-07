<!DOCTYPE html>
<html>
<head>
<title>Sign up</title>
</head>
<body>

<?php
require_once('db_setup.php');
$sql = "USE szhang71_1;";
if ($conn->query($sql) === TRUE) {

} else {
   echo "Error using  database: " . $conn->error;
}

$fname = $_POST['Firstname'];
$lname = $_POST['Lastname'];
$username = $_POST['Username'];
$pwd = $_POST['Psw'];
$bday = $_POST['Birthday'];

$sql = "INSERT INTO CUSTOMER VALUES ('$username','$pwd','$fname','$lname',0,'$bday');";

 
$result = $conn->query($sql);

if ($result === TRUE) {
    echo "Account successfully created. Redirect to log in page in 3 seconds"; 
    header('Refresh: 3; URL=log_in.html');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
} 
?>

<?php
$conn->close();
?>  

</body>
</html>
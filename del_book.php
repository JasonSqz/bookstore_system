<!DOCTYPE html>
<html>
<head>

</head>
<body>

<?php
require_once('db_setup.php');
$sql = "USE szhang71_1;";
if ($conn->query($sql) === TRUE) {

} else {
   echo "Error using  database: " . $conn->error;
}


$ISBN = $_POST['ISBN'];
$sql = "DELETE FROM  BOOK WHERE ISBN =  '$ISBN';";


$result = $conn->query($sql);

if ($result === TRUE) {
    echo "Record deleted successfully. Redirect to previous page in 3 seconds";
    header('Refresh: 3; URL=del_book.html');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
} 
?>

<?php
$conn->close();
?>  

</body>
</html>

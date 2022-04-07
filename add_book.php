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
$B_Name = $_POST['B_Name'];
$Genre = $_POST['Genre'];
$Author = $_POST['Author'];
$Publisher = $_POST['Publisher'];
$Price = $_POST['Price'];
$Location = $_POST['Location'];
$Award_winning = $_POST['Award_winning'];

$sql = "INSERT INTO BOOK VALUES ('$B_Name', '$ISBN', '$Genre', '$Author', '$Publisher', $Price, '$Location', '$Award_winning');";

$result = $conn->query($sql);

if ($result === TRUE) {
    echo "New record added successfully. Redirect to previous page in 3 seconds";
    header('Refresh: 3; URL=add_book.html');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
} 
?>

<?php
$conn->close();
?>  

</body>
</html>

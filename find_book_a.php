<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="cust_login.css">
</head>
<body>

<?php
require_once('db_setup.php');
$sql = "USE szhang71_1;";
if ($conn->query($sql) === TRUE) {
   // echo "using Database tbiswas2_company";
} else {
   echo "Error using  database: " . $conn->error;
}
// Query:
$result = $_POST['result'];
$sql = "SELECT * FROM BOOK 
        WHERE Author = '$result'" ;

$result = $conn->query($sql);

if($result->num_rows > 0){

?>

<?php
while($row = $result->fetch_assoc()){
?>

<div class="container">
  <h1>Book Information</h1>
  <hr>

   <h4>Book Name:</h4>
   <?php echo $row['B_Name']?><br>
   <h4>ISBN:</h4>
   <?php echo $row['ISBN']?><br>
   <h4>Genre:</h4>
   <?php echo $row['Genre']?><br>
   <h4>Author:</h4>
   <?php echo $row['Author']?><br>
   <h4>Publisher:</h4>
   <?php echo $row['Publisher']?><br>
   <h4>Price:</h4>
   <?php echo $row['Price']?><br>
   <h4>Location:</h4>
   <?php echo $row['Location']?><br>
   <h4>Award_winning:</h4>
   <?php echo $row['Award_winning']?><br>

   <script>
        function rhome(){
          window.location='Homepage.html';
        }
   </script>

   <div class="clearfix">
      <button onclick="rhome()" class="cancelbtn">Return Home</button>
   </div>

</div>

<?php
}
}
else {
echo "Item not found";
}
?>

    </table>

<?php
$conn->close();
?>  

</body>
</html>

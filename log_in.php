<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="cust_login.css">
<title>Log In</title>
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

session_start();

$username = $_POST['uname'];
$pwd = $_POST['psw'];
$_SESSION['c_id'] = $username;
$sql = "SELECT * FROM CUSTOMER
        WHERE Username = '$username' AND Password = '$pwd'";

$result = $conn->query($sql);

if($result->num_rows > 0){

?>

<?php
while($row = $result->fetch_assoc()){
?>

<div class="container">
  <h1>User Home</h1>
  <hr>

  <div class="content">
      <p>Hi, <?php echo $row['C_Fname']?> <?php echo $row['C_Lname']?></p> <br>
      <p>Your total reward point is: <?php echo $row['T_Rpoint']?></p>
  </div>

  <script>
        function rhome(){
          window.location='Homepage.html';
        }

        function viewtrans(){
          window.location='C_view_T.php';
        }
  </script>

  <div class="clearfix">
      <button onclick="viewtrans()" class="viewbtn">View Orders</button>
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

<?php
$conn->close();
?>  

</body>
</html>

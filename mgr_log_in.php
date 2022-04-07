<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="mgr.css">
  <title>Homepage</title>
</head>
<body>



<?php
require_once('db_setup.php');
$sql = "USE szhang71_1;";
if ($conn->query($sql) === TRUE) {
   // echo "using Database tbiswas2_company";
} else {
   echo "Error using database: " . $conn->error;
}
?>

<?php session_start();

if (isset($_SESSION['em_id'])) {
?>  
  

  <div class="container">
  <h1 class>Management System</h1> 
  <hr>

  <div class="content">
    <h3>Hi, <?php echo $_SESSION['ef']?> <?php echo $_SESSION['el']?>
    <br>Your employee ID: <?php echo $_SESSION['id']?></br>
    Your position: <?php echo $_SESSION['pos']?>
    </h3> 
  </div>

  <div class="function">
      
      <script>
        function viewrelation(){
          window.location='view_relation.php';
        }

        function addbook(){
          window.location='add_book.html';
        }

        function delbook(){
          window.location='del_book.html';
        }

        function viewtrans(){
          window.location='Transaction_View.php';
        }

        function rhome(){
          window.location='Homepage.html';
        }

        function manageE(){
          window.location='manage_e.html';
        }

        function logout(){
          window.location='logout.php';
        }
      </script>

      <button class = "bt" onclick="viewrelation();" class="cancelbtn">View Relations</button> <br>
      <button class = "bt" onclick="addbook();" class="cancelbtn">Add a Book</button> <br>
      <button class = "bt" onclick="delbook();" class="cancelbtn">Delete a Book</button> <br>
      <button class = "bt" onclick="manageE();" class="cancelbtn">Manage Employee</button> <br>
      <button class = "bt" onclick="viewtrans();" class="cancelbtn">View Transaction</button> <br>
      <button class = "bt" onclick="rhome()" class="cancelbtn">Return home</button> <br>
      <button class = "bt" onclick="logout()" class="cancelbtn">Log out</button> <br>
  
  </div>

</div>

<?php
} else {
?>

<?php
$employee_id = $_POST['mgr_id'];
$pwd = $_POST['psw'];

$_SESSION['em_id'] = $employee_id;
$_SESSION['psw'] = $pwd;

$sql = "SELECT * FROM EMPLOYEE
        WHERE Employee_ID = '$employee_id' AND Password = '$pwd'";


$result = $conn->query($sql);
if($result->num_rows > 0){

?>

<?php
while($row = $result->fetch_assoc()){
  $_SESSION['ef'] = $row['E_Fname'];
  $_SESSION['el'] = $row['E_Lname'];
  $_SESSION['id'] = $row['Employee_ID'];
  $_SESSION['pos'] = $row['Position']; 
?>

<div class="container">
<h1 class>Management System</h1> 
<hr>

  <div class="content">
    <h3>Hi, <?php echo $row['E_Fname']?> <?php echo $row['E_Lname']?>
    <br>Your employee ID: <?php echo $row['Employee_ID']?></br>
    Your position: <?php echo $row['Position']?>
    </h3> 
  </div>

  <div class="function">
      
      <script>
        function viewrelation(){
          window.location='view_relation.php';
        }

        function addbook(){
          window.location='add_book.html';
        }

        function delbook(){
          window.location='del_book.html';
        }

        function viewtrans(){
          window.location='Transaction_View.php';
        }

        function rhome(){
          window.location='Homepage.html';
        }

        function manageE(){
          window.location='manage_e.html';
        }

        function logout(){
          window.location='logout.php';
        }
      </script>

      <button class = "bt" onclick="viewrelation();" class="cancelbtn">View Relations</button> <br>
      <button class = "bt" onclick="addbook();" class="cancelbtn">Add a Book</button> <br>
      <button class = "bt" onclick="delbook();" class="cancelbtn">Delete a Book</button> <br>
      <button class = "bt" onclick="manageE();" class="cancelbtn">Manage Employee</button> <br>
      <button class = "bt" onclick="viewtrans();" class="cancelbtn">View Transaction</button> <br>
      <button class = "bt" onclick="rhome()" class="cancelbtn">Return home</button> <br>
      <button class = "bt" onclick="logout()" class="cancelbtn">Log out</button> <br>
  
  </div>

</div>



<?php
}
}
else {
echo "Item not found";
}
}
?>

<?php
$conn->close();
?>  

</body>
</html>

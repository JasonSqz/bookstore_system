<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="viewtrans.css">
</head>
<body>

<div class="content">
<?php
require_once('db_setup.php');
$sql = "USE szhang71_1;";
if ($conn->query($sql) === TRUE) {
   // echo "using Database szhang71_1";
} else {
   echo "Error using  database: " . $conn->error;
}

$sql = "SELECT * FROM BOOK";
$result = $conn->query($sql);
if($result->num_rows > 0){

?>
   <h2>Relation BOOK</h2>
    

   <table class="table table-striped">
      <tr>
         <th>B_name</th>
         <th>ISBN</th>
         <th>Genre</th>
         <th>Author</th>
         <th>Publisher</th>
         <th>Price</th>
         <th>Location</th>
         <th>Award_winning</th>
      </tr>
<?php
while($row = $result->fetch_assoc()){
?>
      <tr>
          <td><?php echo $row['B_Name']?></td>
          <td><?php echo $row['ISBN']?></td>
          <td><?php echo $row['Genre']?></td>
          <td><?php echo $row['Author']?></td>
          <td><?php echo $row['Publisher']?></td>
          <td><?php echo $row['Price']?></td>
          <td><?php echo $row['Location']?></td>
          <td><?php echo $row['Award_winning']?></td>
      </tr>

<?php
}
}
else {
echo "Nothing to display";
}
?>

    </table>

    <h2>Relation EMPLOYEE</h2>

<?php
$sql = "SELECT * FROM EMPLOYEE";
$result = $conn->query($sql);
if($result->num_rows > 0){

?>
   <table class="table table-striped">
      <tr>
         <th>Employee_ID</th>
         <th>E_Fname</th>
         <th>E_Lname</th>
         <th>Position</th>
         <th>Password</th>
      </tr>
<?php
while($row = $result->fetch_assoc()){
?>
      <tr>
          <td><?php echo $row['Employee_ID']?></td>
          <td><?php echo $row['E_Fname']?></td>
          <td><?php echo $row['E_Lname']?></td>
          <td><?php echo $row['Position']?></td>
          <td><?php echo $row['Password']?></td>
      </tr>

<?php
}
}
else {
echo "Nothing to display";
}
?>

    </table>
  
  <h2>Relation CUSTOMER</h2>


<?php
$sql = "SELECT * FROM CUSTOMER";
$result = $conn->query($sql);
if($result->num_rows > 0){

?>
   <table class="table table-striped">
      <tr>
         <th>Username</th>
         <th>Password</th>
         <th>C_Fname</th>
         <th>C_Lname</th>
         <th>T_Rpoint</th>
         <th>Birthday</th>
      </tr>
<?php
while($row = $result->fetch_assoc()){
?>
      <tr>
          <td><?php echo $row['Username']?></td>
          <td><?php echo $row['Password']?></td>
          <td><?php echo $row['C_Fname']?></td>
          <td><?php echo $row['C_Lname']?></td>
          <td><?php echo $row['T_Rpoint']?></td>
          <td><?php echo $row['Birthday']?></td>

      </tr>

<?php
}
}
else {
echo "Nothing to display";
}
?>

  </table>

  <h2>Relation INVENTORY</h2>

<?php
$sql = "SELECT * FROM INVENTORY";
$result = $conn->query($sql);
if($result->num_rows > 0){

?>
   <table class="table table-striped">
      <tr>
         <th>ISBN</th>
         <th>Quantity</th>
      </tr>
<?php
while($row = $result->fetch_assoc()){
?>
      <tr>
          <td><?php echo $row['ISBN']?></td>
          <td><?php echo $row['Quantity']?></td>
      </tr>

<?php
}
}
else {
echo "Nothing to display";
}
?>
  
  </table>

  <h2>Relation TRANSACTION_B</h2>

<?php
$sql = "SELECT * FROM TRANSAC_B";
$result = $conn->query($sql);
if($result->num_rows > 0){

?>
   <table class="table table-striped">
      <tr>
         <th>TB_num</th>
         <th>B_price</th>
         <th>B_Date</th>
         <th>E_ID</th>
         <th>Quantity</th>
         <th>ISBN</th>
      </tr>
<?php
while($row = $result->fetch_assoc()){
?>
      <tr>
          <td><?php echo $row['TB_num']?></td>
          <td><?php echo $row['B_price']?></td>
          <td><?php echo $row['B_Date']?></td>
          <td><?php echo $row['E_ID']?></td>
          <td><?php echo $row['Quantity']?></td>
          <td><?php echo $row['ISBN']?></td>
      </tr>

<?php
}
}
else {
echo "Nothing to display";
}
?>
  
  </table>

  <h2>Relation TRANSACTION_S</h2>

<?php
$sql = "SELECT * FROM TRANSAC_S";
$result = $conn->query($sql);
if($result->num_rows > 0){

?>
   <table class="table table-striped">
      <tr>
         <th>TS_num</th>
         <th>R_point</th>
         <th>S_price</th>
         <th>S_Date</th>
         <th>C_name</th>
         <th>E_ID</th>
         <th>Quantity</th>
         <th>ISBN</th>
      </tr>

<?php
while($row = $result->fetch_assoc()){
?>
      <tr>
          <td><?php echo $row['TS_num']?></td>
          <td><?php echo $row['R_point']?></td>
          <td><?php echo $row['S_price']?></td>
          <td><?php echo $row['S_Date']?></td>
          <td><?php echo $row['C_name']?></td>
          <td><?php echo $row['E_ID']?></td>
          <td><?php echo $row['Quantity']?></td>
          <td><?php echo $row['ISBN']?></td>
      </tr>
      
<?php
}
}
else {
echo "Nothing to display";
}
?>

<?php
$conn->close();
?>  

  </table>

      <script>
        function rhome(){
          window.location='mgr_log_in.php';
        }
      </script>

      <div class="clearfix">
          <button onclick="rhome()" class="cancelbtn">Return</button>
      </div>

</div>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="viewtrans.css">
</head>
<body>

<?php session_start();
      $em_id = $_SESSION['em_id'];
  ?>


<?php
require_once('db_setup.php');
$sql = "USE szhang71_1;";
if ($conn->query($sql) === TRUE) {
   // echo "using Database szhang71_1";
} else {
   echo "Error using  database: " . $conn->error;
}

?>

<div class="content">
<h2>Purchase You Made</h2>

<?php
// Query:
$sql = "SELECT * FROM TRANSAC_B
		WHERE E_ID = '$em_id'";
$result = $conn->query($sql);

if($result->num_rows > 0){

?>


   <table class="table table-striped">
      <tr>
         <th>E_ID</th>
         <th>TB_num</th>
         <th>B_price</th>
         <th>B_Date</th>
         <th>ISBN</th>
         <th>Quantity</th>
      </tr>

<?php
while($row = $result->fetch_assoc()){
?>
      <tr>
          <td><?php echo $row['E_ID']?></td>
          <td><?php echo $row['TB_num']?></td>
          <td><?php echo $row['B_price']?></td>
          <td><?php echo $row['B_Date']?></td>
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
  </div>

<div class="content">
      <h2>Sale You Made</h2>
<?php
$sql = "SELECT * FROM TRANSAC_S
		WHERE E_ID = 'em_id'";
$result = $conn->query($sql);

if($result->num_rows > 0){

?>
      <table class="table table-striped">
        <tr>
          <th>TS_num</th>
          <th>S_Date</th>
          <th>ISBN</th>
          <th>S_price</th>
          <th>Quantity</th>
          <th>C_name</th>
        </tr>
<?php
while($row = $result->fetch_assoc()){
?>
      <tr>
          <td><?php echo $row['TS_num']?></td>
          <td><?php echo $row['S_Date']?></td>
          <td><?php echo $row['ISBN']?></td>
          <td><?php echo $row['S_price']?></td>
          <td><?php echo $row['Quantity']?></td>
          <td><?php echo $row['C_name']?></td>
      </tr>

<?php
}
}
else {
	echo "Nothing to display";
}
?>

      </table>

      <script>
        function rhome(){
          window.location='mgr_log_in.php';
        }
      </script>

      <div class="clearfix">
          <button onclick="rhome()" class="cancelbtn">Return</button>
      </div


   </div>
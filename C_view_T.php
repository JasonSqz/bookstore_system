<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="viewtrans.css">
</head>
<body>

<?php session_start();
      $c_id = $_SESSION['c_id'];
  ?>


<?php
require_once('db_setup.php');
$sql = "USE szhang71_1;";
if ($conn->query($sql) === TRUE) {
   // echo "using Database szhang71_1";
} else {
   echo "Error using  database: " . $conn->error;
}

// Query:
$sql = "SELECT * FROM TRANSAC_S
		WHERE C_name = '$c_id'"; //TODO
$result = $conn->query($sql);

if($result->num_rows > 0){

?>
  <div class="content">
   <h2>Purchase You Made</h2>

   <table class="table table-striped">
      <tr>
         <th>TS_num</th>
         <th>S_price</th>
         <th>S_Date</th>
         <th>ISBN</th>
         <th>Quantity</th>
         <th>E_ID</th>
      </tr>

<?php
while($row = $result->fetch_assoc()){
?>
      <tr>
          <td><?php echo $row['TS_num']?></td>
          <td><?php echo $row['S_price']?></td>
          <td><?php echo $row['S_Date']?></td>
          <td><?php echo $row['ISBN']?></td>
          <td><?php echo $row['Quantity']?></td>
          <td><?php echo $row['E_ID']?></td>
      </tr>
  </table>

  <script>
        function rhome(){
          window.location='Homepage.html';
        }

        function viewtrans(){
          window.location='C_view_T.php';
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
	echo "Nothing to display";
}
?>

</body>
</html>
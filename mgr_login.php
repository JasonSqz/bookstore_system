
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="log_in.css">
  <title>Sign Up</title>
</head>

<body>

<?php 
session_start();

if (isset($_SESSION['em_id'])) {
	header('Location: mgr_log_in.php');
} else {
?>
<!-- code from https://www.w3schools.com/howto/howto_css_login_form.asp-->
<form action="mgr_log_in.php" method="post">
  <div class="imgcontainer">
    <img src="nike.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="mgr_id"><b>Employee ID</b></label>
    <input type="text" placeholder="Enter Employee ID" name="mgr_id" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <script>
        function homepage(){
          window.location='Homepage.html';
        }
    </script>

    <button type="submit" class="loginbtn" value="Submit">Login</button>
    <button onclick="homepage();" class="cancelbtn">Homepage</button>
  </div>

</form>

<?php
}
?>

</body>
</html>
<?php include "db.php"; ?>
<link rel="stylesheet" href="style.css">

<form method="post">
<h2>Student Registration</h2>
<input type="text" name="name" placeholder="Enter Name"  required><br>
<input type="email" name="email" placeholder="Enter Email"  required><br>
<input type="qualification" name="qualification" placeholder="qualification" required><br>
<input type="password" name="password" placeholder="Enter password"  required><br>

<br><a href="index.php" class="back-link">← Back to Home</a><br>
<br>
<button name="reg">Register</button>
</form>

<?php
if(isset($_POST['reg'])){
  mysqli_query($conn,
  "INSERT INTO users(name,email,password,qualification,role)
   VALUES('$_POST[name]','$_POST[email]','$_POST[password]','$_POST[qualification]','student')");
  echo "<script>alert('Registration Successful');</script>";  
}
?>

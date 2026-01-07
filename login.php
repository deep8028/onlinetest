<link rel="stylesheet" href="style.css">

<?php include "db.php"; ?>
<form method="post" >
<h2>Login</h2>
<input type="email" name="email" placeholder="enter email"required><br>
<input type="password" name="password" placeholder="enter password"required><br>
<button name="login">Login</button>
</form>

<?php
if(isset($_POST['login'])){
  $q = mysqli_query($conn,
  "SELECT * FROM users WHERE email='$_POST[email]' AND password='$_POST[password]'");

  if(mysqli_num_rows($q)>0){
    $row = mysqli_fetch_assoc($q);
    $_SESSION['uid'] = $row['id'];
    $_SESSION['role'] = $row['role'];

    if($row['role']=="staff")
      header("Location: staff/dashboard.php");
    else
      header("Location: student/dashboard.php");
  } else {
  echo "<script>alert('Invalid Login');</script>";
   } 
  }

?>

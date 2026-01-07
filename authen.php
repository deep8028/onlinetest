
<?php
include "db.php";
$email=$_POST['email'];
$password=$_POST['password'];
$q = mysqli_query($conn,
  "SELECT * FROM users WHERE email='$email' AND password='$password'");

  if(mysqli_num_rows($q)>0){
    $row = mysqli_fetch_assoc($q);
    $_SESSION['uid'] = $row['id'];
    $_SESSION['role'] = $row['role'];

    if($row['role']=="staff")
      header("Location: staff/dashboard.php");
    else
      header("Location: student/dashboard.php");
  } else {
    echo "Invalid Login";
  }

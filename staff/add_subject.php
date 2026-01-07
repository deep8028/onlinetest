<?php include "../db.php"; if(   isset( $_SESSION['uid'])){ ?>

<link rel="stylesheet" href="../style.css">

<form method="post">
<input type="text" name="sub" placeholder="Subject Name" required>
<button name="add">Add</button>



</form>

<?php
if(isset($_POST['add'])){
  mysqli_query($conn,"INSERT INTO subjects(subject_name) VALUES('$_POST[sub]')");
 echo "<script>alert('Subject Added Successfully');</script>";
}
}
else{
   header("Location: ../login.php");
  
}
?>

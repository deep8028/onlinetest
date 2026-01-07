<?php include "../db.php"; 
if(   isset( $_SESSION['uid'])){?>
<link rel="stylesheet" href="../style.css">
<div class="container">
<h2>Student Dashboard</h2>
<h4>Subject</h4>

<?php
$s = mysqli_query($conn,"SELECT * FROM subjects");
while($row=mysqli_fetch_assoc($s)){
  echo "<a href='start_test.php?sub=$row[id]'>
         $row[subject_name]</a><br>";
}
?>
<a href="../logout.php">Logout</a>

</div>
<?php
}
else{
   header("Location: ../login.php");
  
}
?>
<?php include "../db.php"; if(   isset( $_SESSION['uid'])){  ?>

<form method="post">
<select name="subject">
<?php
$s = mysqli_query($conn,"SELECT * FROM subjects");
while($row=mysqli_fetch_assoc($s)){
  echo "<option value='$row[id]'>$row[subject_name]</option>";
}
?>


</select><br>

<textarea name="q" placeholder="Enter your question" required></textarea><br>
<input  type="text" name="o1" placeholder="option 1" required>
<input   type="text" name="o2" placeholder="option 2" required>
<input   type="text" name="o3" placeholder="option 3" required>
<input  type="text" name="o4" placeholder="option 4" required>
<input   type="text" name="ans" placeholder="Correct Option (1-4)" required>
<button   type="text" name="add">Save</button>
<a href="../logout.php">Logout</a>
</form>

<?php
if(isset($_POST['add'])){
  mysqli_query($conn,"INSERT INTO questions
  VALUES(NULL,'$_POST[subject]','$_POST[q]','$_POST[o1]',
  '$_POST[o2]','$_POST[o3]','$_POST[o4]','$_POST[ans]')");
  echo "<script>alert('Question Added Successfully');</script>";
}

}
else{
   header("Location: ../login.php");
  
}
?>
    <link rel="stylesheet" href="../style.css">

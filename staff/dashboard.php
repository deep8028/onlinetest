<?php include "../db.php";
if(   isset( $_SESSION['uid'])){ ?>
<link rel="stylesheet" href="../style.css">
<div class="container">
<h2>Staff Dashboard</h2>
<a href="add_subject.php">Add Subject</a><br>
<a href="add_question.php">Add Question</a><br>
<a href="../logout.php">Logout</a>
</div>

<?php

}
else{
   header("Location: ../login.php");
  
}
?>
<?php
include "../db.php";

$score = $_SESSION['score'];
$student = $_SESSION['uid'];
$sub = $_GET['sub'];

$total = mysqli_num_rows(
  mysqli_query($conn,"SELECT * FROM questions WHERE subject_id=$sub"));

mysqli_query($conn,
"INSERT INTO results VALUES(NULL,$student,$sub,$score,$total)");
?>
<div class="container">

<h2>Result</h2>
Score: <?= $score ?> / <?= $total ?>
<br>
<br>
<a href="../logout.php">Logout</a>
</div>

<link rel="stylesheet" href="../style.css">
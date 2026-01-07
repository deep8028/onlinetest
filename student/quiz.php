<?php
include "../db.php";
if(   isset( $_SESSION['uid'])){
$sub = $_GET['sub'];
$qno = $_SESSION['qno'];

$q = mysqli_query($conn,"SELECT * FROM questions WHERE subject_id=$sub LIMIT $qno,1");
//$conn->query
if(mysqli_num_rows($q)==0){
  header("Location: result.php?sub=$sub");
  exit;
}

$row = mysqli_fetch_assoc($q);

?>
<form method="post">
    <h3><?= htmlspecialchars($row['question']) ?></h3>

    <div class="option">
        <label for="option1"></label>
            <input  type="radio" name="ans" value="1">
            <span><?= htmlspecialchars($row['option1']) ?></span>
        </label>
    </div>

    <div class="option">
        <label for="option2"></label>
            <input  type="radio" name="ans" value="2">
            <span><?= htmlspecialchars($row['option2']) ?></span>
        </label>
    </div>

    <div class="option">
        <label for="option3"></label>
            <input  type="radio" name="ans" value="3">
            <span><?= htmlspecialchars($row['option3']) ?></span>
        </label>
    </div>

    <div class="option">
      <label for="option4"></label>
            <input type="radio" name="ans" value="4">
            <span><?= htmlspecialchars($row['option4']) ?></span>
        </label>
    </div>
<br><br>
    <button name="next">Next</button>
</form>




<script src="../js/timer.js"></script>
<link rel="stylesheet" href="../style.css">

<?php
if((isset($_POST['next'])) && !empty($_POST['ans'])){
  
  if(isset($_POST['ans']) &&  $_POST['ans']==$row['correct_option']){
    $_SESSION['score']++;
  }
  $_SESSION['qno']++;
  header("Refresh:0");

}
}
else{
   header("Location: ../login.php");
  
}
?>

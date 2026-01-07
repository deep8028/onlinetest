<?php
include "../db.php";
$_SESSION['qno']=0;
$_SESSION['score']=0;
$uid=$_SESSION['uid'];
$subid=$_GET['sub'];
$sql="select * from results where student_id=$uid AND subject_id=$subid";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){

header("Location: dashboard.php");
echo "quiz already finished";
}
else{
header("Location: quiz.php?sub=".$_GET['sub']);    
}
?>
<link rel="stylesheet" href="../style.css">

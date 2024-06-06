<?php
include 'dbconnect.php';
$sql="Truncate table Information";
$result=mysqli_query($conn,$sql);
if($result)
{
    header('location:http://localhost/WT%20Project%20(Semester%202)/viewFeedback.php');
}
else{
    echo "Not deleted";
}
?>
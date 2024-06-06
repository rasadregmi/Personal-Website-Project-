<?php
include 'dbconnect.php';
$Name=$_GET['Name'];
$sql="delete from Information where Name='$Name'";
$result=mysqli_query($conn,$sql);
if($result)
{
    header('location:http://localhost/WT%20Project%20(Semester%202)/viewFeedback.php');
}
else{
    echo "Not deleted";
}
?>
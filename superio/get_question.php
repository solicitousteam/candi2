<?php 
include '../connect.php';
if($_POST['offset'])
{
$offset=$_POST['offset'];
}
else{
$offset='0';
    
}
$result=mysqli_query($conn,"SELECT * FROM interview_questions ORDER BY interview_questions_id LIMIT 1 OFFSET $offset;");
$row=mysqli_fetch_array($result);
echo json_encode($row,true);
?>
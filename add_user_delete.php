<?php
include ('connect.php');
error_reporting(0);

$id =$_GET['id'];
$query = "DELETE FROM  admin WHERE  admin_id = '$id'";

$data=mysqli_query($conn,$query);

if ($data)
 {

 header("Location: add_user.php"); 



	echo "<font color='green'>Record Deleted From Database";
}
else
{
	echo "<font color='red'>Failed to Deleted Record from Database";
}
?>

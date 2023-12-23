<?php 
session_start();
include '../connect.php';
	$queryi="Select admin_id from admin where admin_email='".$_SESSION['email']."'";
			$resulti=mysqli_query($conn,$queryi);
			$arrayi=mysqli_fetch_array($resulti);
			$adminid = $arrayi[0];
$result=mysqli_query($conn,"SELECT * FROM chat WHERE user_id=$adminid order by chat_id asc");
$output='';
while($row=mysqli_fetch_array($result))
{
    $type=$row['user'];
    if($type=='user')
    {
        $msg_by='me';
    }
    else
    {
       $msg_by='you';
    }
    $msg=$row['message'];
      $output.="<div class='chat-bubble $msg_by'>$msg</div>";
      
}
echo $output;
?>
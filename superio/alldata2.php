<?php
echo "<pre>";
print_r($_POST);
print_r($_FILES);
$conn=mysqli_connect('localhost','root','');

$sel=mysqli_select_db($conn,'form');
if (isset($_POST['save'])){
$imgname=$_FILES['img']['name'];
$ex=explode('.',$imgname);
$ra=rand(00000,99999);
$imgn='sbs-'.$ra.'.'.$ex[count($ex)-1];
$path='images/'.$imgn;
move_uploaded_file($_FILES['img']['tmp_name'],$path);

$resume=$_FILES['resume']['name'];
$ex=explode('.',$resume);
$ra=rand(00000,99999);
$resn='sbs-'.$ra.'.'.$ex[count($ex)-1];
$path='resume/'.$resn;
move_uploaded_file($_FILES['resume']['tmp_name'],$path);

echo $query="INSERT INTO alldata2(t_id,name,position,phone,email,location,experience,travel,edu,lang,rate,imgn,wtorelocate,security,skill,emptitle,resn) VALUES ('".$_POST['t_id']."','".$_POST['name']."','".$_POST['position']."','".$_POST['phone']."','".$_POST['email']."','".$_POST['location']."','".$_POST['experience']."','".$_POST['travel']."','".$_POST['edu']."','".$_POST['lang']."','".$_POST['rate']."','".$_POST['wtorelocate']."','".$_POST['security']."','".$_POST['skill']."','".$_POST['emptitle']."','".$imgn."','".$resn."')";

$fire=mysqli_query($conn,$query);
if ($fire) {
header('location:alldata.php');
}
else{
	echo "notok";
}

}



if(isset($_POST['save2'])) {

    $email2=$_GET['email2'];
$sel=mysqli_query($conn,"SELECT t_id from alldata2 where email='".$email2."'");
$row=mysqli_fetch_assoc($sel);

print_r($_POST);

 echo $query1="UPDATE alldata2 SET facebook='".$_POST['facebook']."',twitter='".$_POST['twitter']."',linkedin='".$_POST['linkedin']."',google='".$_POST['google']."' WHERE t_id='".$row['t_id']."'";
$fire=mysqli_query($conn,$query1);
if($fire){
echo "<script>alert('Successfully Update....');</script>";
echo "<script>window.location.href='alldata.php';</script>";
}
else{
echo "<script>alert('Fail....');</script>";
echo "<script>window.location.href='alldata.php';</script>";
}

}


?>
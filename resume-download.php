<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
include 'auth_session.php';
include "connect.php";
$i=$_GET['id'];

require 'pdf/vendor/autoload.php';

use Dompdf\Adapter\CPDF;      
use Dompdf\Dompdf;
use Dompdf\Exception;



$query="Select * FROM candidate_register,candidate_profile where candidate_register.candidate_id=candidate_profile.candidate_id AND candidate_register.candidate_id='".$i."'"; 
$result=mysqli_query($conn,$query);
$array=mysqli_fetch_assoc($result);


$skills=$array["candidate_skills"];
                                                    
                                      $array2 =  explode(',', $skills);
                            
                                     foreach ($array2 as $item) {
                                     $item .="<h4>$item</h4>";
                                     }
                                












$dompdf = new DOMPDF();
$dompdf->loadHtml('
<table border=1 align=center width=400>
<tr><td>Candidate Name : </td><td>'.$array["candidate_fname"].' '.$array["candidate_lname"].'</td></tr>
<tr><td>Cell: : </td><td>'.$array['candidate_phoneno'].'</td></tr>
<tr><td>Email: </td><td>'.$array['candidate_email'].'</td></tr>
<tr><td>Education : </td><td>'.$item.'</td></tr>
</table>
');
$dompdf->setPaper('A4', 'landscape');
$dompdf->render();
$dompdf->stream("",array("Attachment" => false));
exit(0);
?>




        



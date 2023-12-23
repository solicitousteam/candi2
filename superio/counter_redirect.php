  
  <?php 
include 'candidate-auth-session.php';
include '../connect.php';
include 'candidate-header.html';
include 'candidate-sidebar.php';
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
  
$mail = new PHPMailer(true);

   if(isset($_POST['submit'])){
                          $j=$_GET['id'];
                           $query1=" UPDATE job_applications SET counter_job_offer='".$_POST['counter_job_offer']."' WHERE job_id='".$j."' AND candidate_id='".$arrays['candidate_id']."'";
                           $result1=mysqli_query($conn,$query1);

                            $query="SELECT * FROM job_details, job_applications, candidate_register, admin WHERE job_details.job_id=job_applications.job_id AND admin.admin_id=job_details.admin_id AND job_applications.candidate_id=candidate_register.candidate_id AND job_applications.job_id='".$j."' AND job_applications.candidate_id='".$arrays['candidate_id']."'";
                            $result=mysqli_query($conn,$query);
                            $array2=mysqli_fetch_assoc($result);
                          if ($result){
                              try {                                     
                              $mail->isSMTP();                                            
                              $mail->Host       = 'smtp.gmail.com;';                    
                              $mail->SMTPAuth   = true;                           
                              $mail->Username   = 'canditestemail@gmail.com';                 
                              $mail->Password   = 'candi123$';                        
                              $mail->SMTPSecure = 'tls';                              
                              $mail->Port       = 587;  
                              
                              $mail->setFrom('canditestemail@gmail.com', 'Candi.ai');           
                              $mail->addAddress($array2['admin_email']);
                                  
                              $mail->isHTML(true);                                  
                              $mail->Subject = 'Candi.ai Counter Offer Notice';
                              $mail->Body = "Dear ".$array2['admin_fname']." ".$array2['admin_lname'].", <br><br> Greetings from Candi.ai!<br> <br><br>".$array2['candidate_fname']." ".$array2['candidate_lname']." has made a counter offer for the position of ".$array2['job_title']." at ".$array2['admin_company_name']." as per the details below :<br><br>Your Offer: $".$array2['job_offer']." ".$array2['job_type']."<br>Counter Offer: $".$array2['counter_job_offer']." ".$array2['job_type']."<br><br>Please login to Candi.ai and change offer details as per your requirement.<br><br>Regards,<br>Candi.ai<br> This is a system generated mail please do not reply ";
                              $mail->send();

                          } catch (Exception $e) {
                              echo "<script>
                              alert('Failed to send email. Try Again');
                              window.location.href='candidate_offer.php?id=".$j."';
                              </script>";
                              }
                              echo "<script>
                              alert('Counter offer is sent!');
                              window.location.href='candidate_offer.php?id=".$j."';
                              </script>";
                          }
                          else{
                              echo "<script>
                              alert('Try Again');
                              window.location.href='candidate_offer.php?id=".$j."';
                              </script>";
                              }
  
                                
                            }

                              //  if($result){
                              //     echo "<script>
                              //       alert('Counter Offer is sent');
                              //       window.location.href='candidate_offer.php?id=".$j."';
                              //       </script>";
                              //   }
                              //   else{
                              //       echo "<script>
                              //       alert('Try Again');
                              //       window.location.href='candidate_offer.php?id=".$j."';
                              //       </script>";
                              //       }

                               
                  ?>
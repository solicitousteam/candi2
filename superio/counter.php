<!DOCTYPE html>
<html lang="en">
<head>
<?php 
include 'candidate-auth-session.php';
include '../connect.php';
include 'candidate-header.html';
?>
</head>

<body>

<div class="page-wrapper dashboard">

    <!-- Preloader -->
    <div class="preloader"></div>


    <!-- Main Header-->
<?php
    include 'candidate-sidebar.php';
?>
    <!-- End User Sidebar -->

    <!-- Dashboard -->
    <section class="user-dashboard">
        <div class="dashboard-outer">
            <div class="upper-title-box">
                <h3>Counter Offer</h3>
                <!-- <div class="text">Ready to jump back in?</div> -->
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Ls widget -->
                    <div class="ls-widget">
                        <div class="tabs-box">                        
                            <div class="widget-title">
                            </div>

   <?php
                            $j=$_GET['id'];
                             $query2="SELECT * FROM job_applications WHERE candidate_id='".$arrays['candidate_id']."' AND job_id='".$j."'";
                            $result2=mysqli_query($conn,$query2);
                            $array2=mysqli_fetch_assoc($result2);
                                ?>                       
                            <div class="widget-content">
                               
                                <form action="counter_redirect.php?id=<?php echo $j; ?>" method="post" class="default-form">
                                <div class="profile-personal-info">
                                <div class="form-group col-lg-6 col-md-12">
                                     <label for="fname">Enter Counter offer:</label>
                                        <input type="text" id="fname" name="counter_job_offer" placeholder='Enter Counter Offer'>
                                    </div>  
                                        <div class="form-group col-lg-6 col-md-6">
                                                <!-- <input type="submit" class="theme-btn btn-style-one" name="reschedule" value="Reschedule Interview"> -->
                                                <?php
                                                if(empty($array2['counter_job_offer'])){
                                                    echo "<button class='theme-btn btn-style-one' name='submit'>Submit</button>"; 
                                                }
                                                else{
                                                    echo "<h5>You have made a counter offer of $".$array2['counter_job_offer']." ".$array2['job_type']."</h5><br>";
                                                    echo "<a class='theme-btn btn-style-one' href='candidate_offer.php?id=".$j."'>Go Back</a>";
                                                }
                                               ?>
                                                &nbsp; &nbsp;
                                               <!--  <?php 
                                                  // if(@$array2['reschedule_date']!=''){
                                                     //   echo "<a class='theme-btn btn-style-one' href='reschedule_status.php?id=".$j."'>Rescheduling Status</a>";
                                                    //}
                                                    //else 
                                                        //echo " ";
                                                ?> -->
                                                
                                            </div>
										</form>
                                            </div>
                                            
                                        
                                
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
  
    <!-- End Dashboard -->

    <!-- Copyright -->
<?php

    include 'candidate-footer.html';

?>
</html>
   <?php
//    if(isset($_REQUEST['submit'])){
//                            $query=" UPDATE job_applications SET counter_job_offer='".$_POST['counter_job_offer']."', job_offer_status='In Progress' WHERE job_id='".$j."' AND candidate_id='".$arrays['candidate_id']."'";
//                             $result=mysqli_query($conn,$query);
                                
//                             }
                            ?>
<!-- 
           UPDATE job_applications SET reschedule_time='".$reschedule_time."' , reschedule_date='".$reschedule_date."' WHERE job_id='".$j."' AND candidate_id='".$arrays['candidate_id']."'                 
            $query="UPDATE job_applications(counter_job_offer)VALUES('".$_POST['counter_job_offer']."')";


 -->
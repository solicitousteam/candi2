<?php
   include 'CandidateData.php';
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from creativelayers.net/themes/superio/dashboard-change-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Dec 2021 18:07:10 GMT -->
<head>
<?php
    include 'candidate-header.html';
?>
</head>

<body>

<div class="page-wrapper dashboard ">

    <!-- Preloader -->
    <div class="preloader"></div>

<?php
    include 'sidebar.php';
    $name = "SELECT * from candidate_register WHERE candidate_email = '".$_SESSION['email']."'";
    $run_query = mysqli_query($conn, $name);
    while($array=mysqli_fetch_assoc($run_query)){ 
?> 


                   
    <!-- Dashboard -->
    <section class="user-dashboard">
        <div class="dashboard-outer">
            <div class="upper-title-box">
                <h3>Delete My account</h3>
                    <p><?php echo $array['candidate_fname']." ".$array['candidate_lname'];  ?>, we're sorry to see you go. Please note that deleting your account is irreversible.
                    <br>All the data associated with your <?php echo $array['candidate_email']; } ?> account (including access to trainings) will be permanently deleted.</p>
              
            </div>

             <!-- Ls widget -->
            <div class="ls-widget">
                <div class="widget-title">
                    <h4>Before you leave, please tell us why you'd like to Delete your Candi.ai account. <br>This information will help us improve.(Optional) </h4>
                </div>

                <div class="widget-content">
                     <form class="default-form" action="deleteacc.php">
                        <div class="row">
                            <!-- Input -->
                            <div class="form-group col-lg-7 col-md-12">
                                <!-- <label>New Email address</label> -->
                                <input type="text" name="feedback" placeholder="Your feedback matters">
                            </div>

                           

                            <!-- Input -->
                            <div class="form-group col-lg-6 col-md-12">
                                <input type="submit" name="submit" class="theme-btn btn-style-one" value="Submit">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End Dashboard -->
<?php
    include 'candidate-footer.html';
?>
   </html>



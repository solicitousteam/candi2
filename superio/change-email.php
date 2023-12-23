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
                <h3>Change Email Address</h3>
                <p>Note: Please note that all the data associated with your account (<?php echo $array['candidate_email']; ?>) will be linked to your new email address after this change.
                    <br>Also ensure that you have access to both the email accounts for making the change.</p>
                <!-- <div class="text">Ready to jump back in?</div> -->
            </div>

             <!-- Ls widget -->
            <div class="ls-widget">
                <div class="widget-title">
                    <h4>New Email Address</h4> 
                </div> 
               
                <div class="widget-content">
                <form class="default-form" method="post">
                     <?php 
                        if(isset($_SESSION['info'])){
                            ?>
                            <div class="alert alert-success text-center" style="padding: 0.4rem 0.4rem">
                                <?php 
                                    echo $_SESSION['info']; 
                                ?>
                            </div>
                            <?php
                        }
                        ?>
                     <?php
                     
                        if (count($errors) > 0) {
                        ?>
                            <div class="alert alert-danger text-center">
                                <?php
                                foreach ($errors as $showerror) {
                                    echo $showerror;
                                }
                                ?>
                            </div>
                        <?php
                        }
                    }
                        ?>
                        <div class="row">
                            <!-- Input -->
                            <div class="form-group col-lg-7 col-md-12">
                                <!-- <label>New Email Address</label> -->
                                <input type="email" name="email" placeholder="Enter New Email Address">
                            </div>

                           

                            <!-- Input -->
                            <div class="form-group col-lg-6 col-md-12">
                                <input type="submit" class="theme-btn btn-style-one" name="changemail" value="Submit">
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



<?php
    include 'CandidateData.php';
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from creativelayers.net/themes/superio/dashboard-change-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Dec 2021 18:07:10 GMT -->
<head>
    
    <style>
        input.theme-btn.btn-style-one{
               position: relative;
               display: inline-block;
               min-width: 160px;
        }
    </style>
    
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
?>      

    <!-- Dashboard -->
    <section class="user-dashboard">
        <div class="dashboard-outer">
            <div class="upper-title-box">
                <h3>Change Password</h3>
                <!-- <div class="text">Ready to jump back in?</div> -->
                <p>You will be prompted to login again after changing your password</p>
            </div>

             <!-- Ls widget -->
            <div class="ls-widget">
                <div class="widget-title">
                    <h4>Change Password</h4>
                </div>

                <div class="widget-content">
                     <form class="default-form" method="post">
                     <?php 
                    if(isset($_SESSION['info'])){
                        ?>
                        <div class="alert alert-success text-center" style="padding: 0.4rem 0.4rem">
                            <?php echo $_SESSION['info']; ?>
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
                        ?>
                        <div class="row">
                            <!-- Input -->
                            <div class="form-group col-lg-7 col-md-12">
                                <label>Current Password </label>
                                <input type="password" name="password" placeholder="Enter Current Password">
                            </div>

                            <!-- Input -->
                            <div class="form-group col-lg-7 col-md-12">
                                <label>New Password</label>
                                <input type="password" name="newpassword" placeholder="Enter New Password">
                            </div>

                            <!-- Input -->
                            <div class="form-group col-lg-7 col-md-12">
                                <label>Confirm New Password</label>
                                <input type="password" name="confirmpassword" placeholder="Confirm New Password">
                            </div>

                            <!-- Input -->
                            <div class="form-group col-lg-6 col-md-12">
                                <input type="submit" name="changepass" class="theme-btn btn-style-one" value="Submit">
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




<!DOCTYPE html>
<html lang="en" class="h-100">
<?php
include 'CandidateData.php';
$email = $_SESSION['email'];
if($email == false){
  header('Location: login.php');
}
?>


<head>
<?php   
include 'header.html';
?> </head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form" style="background-color: white;">
									<div class="text-center mb-3">
										
                                        <img src="images/Candi-AI-07.png"  width="200px" height="64px">
                                       
									</div>
                                    <h4 class="text-center mb-4 text-orange"></h4>
                                    <form method="post">
                                    <?php
                                    if(count($errors) == 1){
                                        ?>
                                        <div class="alert alert-danger text-center">
                                            <?php
                                            foreach($errors as $showerror){
                                                echo $showerror;
                                            }
                                            ?>
                                        </div>
                                        <?php
                                    }elseif(count($errors) > 1){
                                        ?>
                                        <div class="alert alert-danger">
                                            <?php
                                            foreach($errors as $showerror){
                                                ?>
                                                <li><?php echo $showerror; ?></li>
                                                <?php
                                            }
                                            ?>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="password" placeholder="Create new Password" >
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="cpassword" placeholder="Confirm your Password" >
                                        </div>
                                        <div class="text-center">
                                            <input type="submit" class="btn bg-success text-white btn-block" name="change-password" value="Change">
                                        </div>
                                        
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/deznav-init.js"></script>

</body>



</html>
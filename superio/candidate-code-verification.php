<!DOCTYPE html>
<html lang="en" class="h-100">
<?php require_once "CandidateData.php"; 
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
                                        if(isset($_SESSION['info'])){
                                            ?>
                                            <div class="alert alert-success text-center" style="padding: 0.4rem 0.4rem">
                                                <?php echo $_SESSION['info']; ?>
                                            </div>
                                            <?php
                                        }
                                        ?>
                                        <?php
                                        if(count($errors) > 0){
                                            ?>
                                            <div class="alert alert-danger text-center">
                                                <?php
                                                foreach($errors as $showerror){
                                                    echo $showerror;
                                                }
                                                ?>
                                            </div>
                                            <?php
                                        }
                                        ?>
                                        <div class="form-group">
                                            <label class="mb-1 text-orange"><strong>Code Verification</strong></label>
                                            <input type="number" class="form-control" placeholder="Enter Code" name="otp">
                                        </div>
                                        
                                        <div class="text-center">
                                            <input type="submit" class="btn bg-success text-white btn-block" name="check-reset-otp" value="Submit">
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
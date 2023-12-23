<?php 
session_start();
include 'CandidateData.php'; ?>


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
										
                                        <img src="images/Candi_Logo_Final_02_1.png"  width="281px" height="106px">
                                       
									</div>
									<!--<?php echo "<div class='alert alert-success'>Email verification code send successfully </div>"; ?>-->
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
                                            <label class="mb-1 text-orange"><strong>Code Verification</strong></label>
                                            <input type="number" class="form-control" placeholder="Enter Code" name="otp" required>
                                        </div>
                                        
                                        <div class="text-center">
                                            <button type="submit" name="check" class="btn bg-success text-white btn-block">Submit</button>
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
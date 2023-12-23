<?php
    
    include 'CandidateData.php';
    
 ?>
<html lang="en" class="h-100">
<head> <?php   
include 'header.html';
?> 
</head>
<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
									<div class="text-center mb-3">
                                        <img src="images/Candi-AI-07.png" height="64px" >
									</div>
                                    <h4 class="text-center mb-4 text-white">Forgot Password</h4>
                                    <form class="form" method="post">
                                    <?php
                        if(count($errors) > 0){
                            ?>
                            <div class="alert alert-danger text-center">
                                <?php 
                                    foreach($errors as $error){
                                        echo $error;
                                    }
                                ?>
                            </div>
                            <?php
                        }
                    ?>
                                      <div class="form-group">
                                      <label class="mb-1 text-orange"><strong>Enter your Email:</strong></label>
                                           <input class="form-control" type="email" name="email" placeholder="Enter email address" required value="<?php echo $email ?>">
                    </div>
                    <div class="form-group">
                        <input class="btn bg-success text-white btn-block" type="submit" name="check-email" value="Continue">
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

   
</body>



</html>
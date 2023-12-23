<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
<?php
include 'controllerUserData.php';
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
                                <div class="auth-form" style="background-color: white;">
									<div class="text-center mb-3">
										
                                        <img src="images/Candi-Logo-Final-02.png" width="200px" height="64px">
                                       
									</div>
                                    <h4 class="text-center mb-4 text-orange"></h4>
                                         <?php 
                                        if(isset($_SESSION['info'])){
                                            ?>
                                            <div class="alert alert-success text-center">
                                            <?php echo $_SESSION['info']; ?>
                                            </div>
                                            <?php
                                        }
                                        ?>
                                            <form action="login-user.php" method="POST">
                                                <div class="form-group">
                                                    <input class="form-control button" type="submit" name="login-now" value="Login Now">
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
<?php
include 'footer.html';
?>

</body>



</html>
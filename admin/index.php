<!DOCTYPE html>
<html lang="en" class="h-100">

<head> <?php
include 'controllerUserData.php';
include 'header.html'; ?> 

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

                                    <a href="../superio/employer-login.html"><img src="../images/Candi-AI-07.png" height="64px"></a>
                                    </div>
                                    <h4 class="text-center mb-4 text-orange">Sign in your account</h4>
                                    <form action=login_c.php method=post>
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
                                        <div class="form-group">
                                            <label class="mb-1 text-orange"><strong>Email</strong></label>
                                            <input class="form-control" type="email" name="email" placeholder="Email Address" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1 text-orange"><strong>Password</strong></label>
                                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                                        </div>

                                        <div class="form-group"><center>
                                            <input class="btn bg-success text-white " type="submit" name="login" value="Login"> &nbsp;&nbsp;&nbsp;&nbsp;
                                        </div>
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                      
                                           
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
    <?php
    include 'footer.html';
    ?>
</body>



</html>
<?php 
include 'CandidateData.php';
?>
<html lang="en">

<!-- Mirrored from creativelayers.net/themes/superio/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Dec 2021 18:06:38 GMT -->
<head>
<meta charset="utf-8">
<title>Candi.ai</title>

<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<link rel="shortcut icon" href="images/Candi-AI-06.png" type="image/x-icon">
<link rel="icon" href="images/Candi-AI-06.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
<style>
    
    @media (min-width: 768px) {
        .gradient-form {
            /*height: 100%!important;*/
        }
    }
    .card{
        height:auto!important;
    }
    .site-bg-color{
        background-color:#c6c6c6;
        border-color:#c6c6c6;
        padding:10px;
        color:#363636;
        border-radius:50px;
    }
    .site-bg-color:hover{
        background-color:#FF8100;
        border-color:#FF8100;
    }
    .mb-10{
        margin-bottom:10px!important;
    }
    .img-div{
        /*height: 420px;*/
        /*position: absolute;*/
        /*left: -45px;*/
    }
    .login-image{
        height: 100%;
        width: 97%;
    }
    /*.login-image img{*/
    /*     width: auto;*/
    /*     max-width: 90%;*/
    /*     margin-left: 68px;*/
    /*     margin-top: 51px;*/
    /*     height: 297px;*/
    /*}*/
    .btn-outline-danger{
        border-color:#fd8101;
        color:#fd8101;
        border-radius:50px
    }
    .btn-outline-danger:hover{
        background-color:#fd8101;
        border-color:#fd8101;
        color:#ffffff;
    }
</style>

<style>
    /* 08-06-2022 Start Here */
    .image-contain{
        /* fallback for old browsers */
        background: #fccb90;
    
        /* Chrome 10-25, Safari 5.1-6 */
        background: -webkit-linear-gradient(to right, #FF8100, #FF8100, #ff9931, #FBB040);
    
        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        background: linear-gradient(to right, #FF8100, #FF8100, #ff9931, #FBB040);
    }
    .image-contain .bg-site{
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        /*border: 2px solid red;*/
        height:100%;
    }
    .image-contain .row{
        margin:0px;   
    }
    
    .image-contain .img-div{
        display: flex;
        justify-content: center;
        /*border: 1px solid red;*/
        width: 100%;
        height: 400px;
    }
    
    .image-contain .img-div > .login-image{
        width: 100%;
        display: flex;
        justify-content: center;
        height: 100%;
        align-items: center;
    }
    
    .image-contain .img-div > .login-image img{
        width: inherit;
        height: fit-content;
    }
    /* 08-06-2022 Close Here */
</style>
</head>

<body>

<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Info Section -->
    <div style="overflow:auto;">
        <section class="gradient-form" style="background-color: #eee;">
            <div class="container py-5">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-xl-10">
                        <div class="card rounded-3 text-black">
                            <div class="row g-0">
                                <div class="col-lg-6 col-md-6 col-md-12 col-xs-12">
                                    <div class="card-body p-md-5 mx-md-4 pt-1">
                                        <div class="text-center">
                                            <img src="images/Candi_Logo_Final_02_1.png" style="width: 185px;" alt="logo">
                                            <h5 class="mt-1 mb-3">Please login to your account</h5>
                                        </div>
                                        <form method="post">
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
                                            
        
                                            <div class="form-outline mb-10">
                                                <input type="email" name="email" id="email" class="form-control" placeholder="Email" />
                                                <label class="form-label" for="email">Username</label>
                                            </div>
        
                                            <div class="form-outline mb-10">
                                                <input type="password" id="password" name="password" class="form-control" placeholder="Password" />
                                                <label class="form-label" for="password">Password</label>
                                            </div>
        
                                            <div class="text-center pt-1 mb-10 pb-1">
                                                <button class="btn btn-primary btn-block fa-lg mb-3 site-bg-color" type="submit" name="log-in" value="Log In"><h5>Log
                                                    in</h5></button>
                                                <a class="text-muted" href="candidate-forgot-password.php">Forgot password?</a>
                                            </div>
        
                                            <div class="d-flex align-items-center justify-content-center pb-2">
                                                <p class="mb-0 me-2">Don't have an account?</p>&nbsp;&nbsp;&nbsp;
                                                <a href="register.php" class="btn btn-outline-danger">Create new</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-md-12 col-xs-12 image-contain">
                                    <div class="bg-site">
                                        <div class="row">
                                            <div class="text-white img-div">
                                                <div class="login-image">
                                                    <img src="images/bg-jobseeker.new.png">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- End Info Section -->


</div><!-- End Page Wrapper -->


<script src="js/jquery.js"></script> 
<script src="js/popper.min.js"></script>
<script src="js/chosen.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/jquery.modal.min.js"></script>
<script src="js/mmenu.polyfills.js"></script>
<script src="js/mmenu.js"></script>
<script src="js/appear.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/script.js"></script>
</body>

<!-- Mirrored from creativelayers.net/themes/superio/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Dec 2021 18:06:38 GMT -->
</html>



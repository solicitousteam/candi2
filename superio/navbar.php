<!-- Main Header-->
<header class="main-header header-shaddow">
    <div class="container-fluid">
        <!-- Main box -->
        <div class="main-box">
            <!--Nav Outer -->
            <div class="nav-outer">
                <div class="logo-box">
                    <div class="logo">
                        <a href="index.html">
                            <img src="images/Candi Logo Final-02.png" style="height: 70px; width: 164px;" alt="" title="">
                        </a>
                    </div>
                </div>
                <!-- Only for Mobile View -->
                <ul>
                    <li class="mm-add-listing">
                        <a href="add-listing.html" class="theme-btn btn-style-one">Job Post</a>
                        <span>
                            <span class="contact-info">
                                <span class="phone-num">
                                    <span>Call us</span>
                                    <a href="tel:1234567890">123 456 7890</a>
                                </span>
                                <span class="address">
                                    329 Queensberry Street, North Melbourne VIC
                                    <br />3051, Australia.
                                </span>
                                <a href="mailto:support@superio.com" class="email">support@superio.com</a>
                            </span>
                            <span class="social-links">
                                <a href="#">
                                    <span class="fab fa-facebook-f"></span>
                                </a>
                                <a href="#">
                                    <span class="fab fa-twitter"></span>
                                </a>
                                <a href="#">
                                    <span class="fab fa-instagram"></span>
                                </a>
                                <a href="#">
                                    <span class="fab fa-linkedin-in"></span>
                                </a>
                            </span>
                        </span>
                    </li>
                </ul>
            </div>
            <?php
            if(!empty($_SESSION['candidate_id']))
            {
                $candidate_id=$_SESSION['candidate_id'];
                $headerquerys="Select candidate_register.candidate_id,candidate_register.candidate_fname,candidate_register.candidate_lname,candidate_profile.candidate_image from candidate_register,candidate_profile where candidate_register.candidate_id=candidate_profile.candidate_id and candidate_register.candidate_id = '$candidate_id'"; 
                $headerresults=mysqli_query($conn,$headerquerys);
                $headerarray=mysqli_fetch_assoc($headerresults);
            }
            ?>
            <div class="outer-box">
                <!--<button class="menu-btn">-->
                <!--    <span class="icon la la-heart-o"></span>-->
                <!--</button>-->
                <button class="menu-btn" style=" margin-right: 22px;">
                    <span class="count">1</span>
                    <span class="icon la la-bell"></span>
                </button>
                <!--<img src="images/resource/candidate-2.png" alt="avatar" class="thumb" style="width:50px; height:50px; margin-right: -35px; " />-->
                <!-- Dashboard Option -->
                <div class="dropdown dashboard-option">
                    <a class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="false">
                        <?php
                        if(!empty($headerarray['candidate_image']))
                        {
                            echo "<img src='pfp/".$headerarray['candidate_image']."' alt='avatar' class='thumb'>";
                        }
                        else
                        {    
                            echo "<img src='images/resource/candidate-2.png alt='avatar' class='thumb'>";
                        }
                        echo '<span class="name">'.((!empty($headerarray['candidate_fname'])) ? $headerarray['candidate_fname'].' '.$headerarray['candidate_lname'] : 'My Account').'</span>';                    
                        ?>
                    </a>
                    <ul class="dropdown-menu">
                        <!--<li>-->
                        <!--    <a href="candidate-dashboard.php">-->
                        <!--        <i class="la la-home"></i>Dashboard-->
                        <!--    </a>-->
                        <!--</li>-->
                        <li>
                            <a href="candidate-dashboard-profile.php">
                                <i class="la la-user-tie"></i>My Profile
                            </a>
                        </li>
                        <!--<li>-->
                        <!--    <a href="jobs_applied.php">-->
                        <!--        <i class="la la-bookmark-o"></i>Jobs applied-->
                        <!--    </a>-->
                        <!--</li>-->
                        <!--<li class="">-->
                        <!--    <a href="candidate-dashboard-resume.php">-->
                        <!--        <i class="la la-paste"></i>My Resume-->
                        <!--    </a>-->
                        <!--</li>-->
                        <!--<li>-->
                        <!--    <a href="http://r.py.solicitous.cloud/">-->
                        <!--        <i class="la la-sticky-note"></i>Document Validation-->
                        <!--    </a>-->
                        <!--</li>-->
                        <!--<li>-->
                        <!--    <a href="./interview-terms.php">-->
                        <!--        <i class="la la-reddit"></i>Interview-->
                        <!--    </a>-->
                        <!--</li>-->
                        <!--<li>-->
                        <!--    <a href="job_opening.php">-->
                        <!--        <i class="la la-briefcase"></i> Job Openings</a>-->
                        <!--</li>-->
                        <!--<li>-->
                        <!--    <a href="candidate-dashboard-shortlisted-jobs.php">-->
                        <!--        <i class="la la-clone"></i>Shortlisted Jobs-->
                        <!--    </a>-->
                        <!--</li>-->
                        <li>
                            <a href="dashboard-change-password.php">
                                <i class="la la-unlock-alt"></i>Change Password
                            </a>
                        </li>
                        <li>
                            <a href="change-email.php">
                                <i class="la la-retweet"></i>Change Email
                            </a>
                        </li>
                        <!--<li>-->
                        <!--    <a href="accpass.php">-->
                        <!--        <i class="la la-trash"></i>Delete Account-->
                        <!--    </a>-->
                        <!--</li>-->
                        <!--<li>-->
                        <!--    <a href="candidate-feedback.php">-->
                        <!--        <i class="la la-thumbs-up"></i>Feedback-->
                        <!--    </a>-->
                        <!--</li>-->
                        <li>
                            <a href="candidate-logout.php">
                                <i class="la la-sign-out"></i>Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Header -->
    <div class="mobile-header responsive-mobile-header">
        <div class="logo">
            <a href="candidate-dashboard-profile.php">
                <img src="images/Candi-AI-06.png" alt="" title="">
            </a>
        </div>

        <!--Nav Box-->
        <div class="nav-outer clearfix">
            <div class="outer-box">
                <?php
                if(!empty($_SESSION['candidate_id']))
                {
                    $candidate_id=$_SESSION['candidate_id'];
                    $headerquerys="Select candidate_register.candidate_id,candidate_register.candidate_fname,candidate_register.candidate_lname,candidate_profile.candidate_image from candidate_register,candidate_profile where candidate_register.candidate_id=candidate_profile.candidate_id and candidate_register.candidate_id = '$candidate_id'"; 
                    $headerresults=mysqli_query($conn,$headerquerys);
                    $headerarray=mysqli_fetch_assoc($headerresults);
                ?>
                <div class="dropdown mobile-option">
                    <a class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="false">
                    <?php
                    if(!empty($headerarray['candidate_image']))
                    {
                        echo "<img src='pfp/".$headerarray['candidate_image']."' alt='avatar' class='thumb'>";
                    }
                    else
                    {    
                        echo "<img src='images/resource/candidate-2.png' alt='avatar' class='thumb'>";
                    }
                    echo '<span class="name">'.((!empty($headerarray['candidate_fname'])) ? $headerarray['candidate_fname'].' '.$headerarray['candidate_lname'] : 'My Account').'</span>';                    
                    ?>
                    </a>
                    <ul class="dropdown-menu" style="">
                        <li>
                            <a href="candidate-dashboard.php">
                                <i class="la la-home"></i>Dashboard
                            </a>
                        </li>
                        <li class="">
                            <a href="candidate-dashboard-profile.php">
                                <i class="la la-user"></i>My Profile
                            </a>
                        </li>
                
                        <li class="">
                            <a href="candidate-dashboard-resume.php">
                                <i class="la la-paste"></i>My Resume
                            </a>
                        </li>
                        <li>
                            <div class="sidenav">
                                <button class="dropdown-btn">
                                    <a>
                                        <i class="la la-briefcase"></i>Jobs <i class="fa fa-caret-down"></i>
                                    </a>
                                </button>
                                <div class="dropdown-container" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="job_opening.php"> Job Openings</a>
                                    <a class="dropdown-item" href="jobs_applied.php">Jobs applied</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <?php
                }
                else
                {?>
                <!-- Login/Register -->
                <div class="login-box">
                    <a href="login-popup.html" class="call-modal">
                        <span class="icon-user"></span>
                    </a>
                </div>
                <?php   
                }?>
                
                <a id="toggle-user-sidebar" class="mobile-nav-toggler navbar-trigger">
                    <span class="flaticon-menu-1"></span>
                </a>
            </div>
        </div>
    </div>

    <!-- Mobile Nav -->
    <div id="nav-mobile"></div>
</header>
<!--End Main Header -->
<style>
    .mobile-option .dropdown-menu{
        right:-70px!important;
    }
</style>
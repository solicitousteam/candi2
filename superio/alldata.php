<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from creativelayers.net/themes/superio/candidate-dashboard-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Dec 2021 18:07:10 GMT -->
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
</head>

<body>
    

<div class="page-wrapper dashboard">

    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Header Span -->
   <span class="header-span"></span> 

    <!-- Main Header-->
    <header class="main-header header-shaddow">
        <div class="container-fluid">
            <!-- Main box -->
            <div class="main-box">
                <!--Nav Outer -->
                <div class="nav-outer">
                    <div class="logo-box">
                        <div class="logo"><a href="index.html"><img src="images/Candi-AI-07.png"  style="height: 40px; width: 123.3px;" alt="" title=""></a></div>
                    </div>

                    <nav class="nav main-menu">
                        <ul class="navigation" id="navbar">
                            <li class="current"><a href="index.html">Home </a></li>                         
    

    <!-- Dashboard -->
    <form action="alldata2.php" method="post" enctype="multipart/form-data">

    <section class="user-dashboard">
        <div class="dashboard-outer">
            <div class="upper-title-box">
                <h3>My Profile</h3>
                <div class="text">Ready to jump back in?</div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Ls widget -->
                    <div class="ls-widget">
                        <div class="tabs-box">                        
                            <div class="widget-title">
                                <h4>My Profile</h4>
                            </div>

                            <div class="widget-content">

                                <div class="uploading-outer">
                                    <div class="uploadButton">
                                        <input class="uploadButton-input" type="file"  name="img" accept="image/*, application/pdf" id="upload" multiple/>
                                        <label class="uploadButton-button ripple-effect" for="upload" required>image</label>
                                        <span class="uploadButton-file-name"></span>
                                    </div>
                                    <div class="uploadButton">
                                        <input class="uploadButton-input" type="file"  name="resume" accept="image/*, application/pdf" id="upload" multiple/  required>
                                        <label class="uploadButton-button ripple-effect" for="upload">Upload Resumes</label>
                                        <span class="uploadButton-file-name"></span>
                                    </div>
                                    <div class="text">Max file size is 1MB, Minimum dimension: 330x300 And Suitable files are .jpg & .png</div>
                                </div>

                                 <form class="default-form">
                                    <div class="row">
                                        <!-- Input -->
                                        <div class="form-group col-lg-6 col-md-12">
                                            <label>Full Name</label>
                                            <input type="text" name="name" placeholder="Jerome" required>
                                        </div>

                                        <!-- Input -->
                                        <div class="form-group col-lg-6 col-md-12">
                                            <label>Position Title</label>
                                            <input type="text" name="position" placeholder="UI Designer" required>
                                        </div>

                                        <!-- Input -->
                                        <div class="form-group col-lg-6 col-md-12">
                                            <label>Phone</label>
                                            <input type="text" name="phone" placeholder="0 123 456 7890" required>
                                        </div>

                                        <!-- Input -->
                                        <div class="form-group col-lg-6 col-md-12">
                                            <label>Email address</label>
                                            <input type="text" name="email" placeholder="abc@gmail.com" required>
                                        </div>

                                        <!-- Input -->
                                        <div class="form-group col-lg-6 col-md-12">
                                            <label>Location</label>
                                            <input type="text" name="location" placeholder="Location" required>
                                        </div>

                                        <!-- Input -->
                                        <div class="form-group col-lg-3 col-md-12">
                                            <label>Work Authorization</label>
                                            <select class="chosen-select" name="work" required>
                                                <option value="C2C">C2C</option>
                                                <option value="1099">1099</option>
                                                <option value="W2">W2</option>
                                                <option value="C2H">C2H</option>
                                                <option value="Fulltime">Fulltime</option>
                                               
                                            </select>
                                        </div>

                                        <!-- Input -->
                                        <div class="form-group col-lg-3 col-md-12">
                                            <label>Employment Title</label>
                                            <select class="chosen-select" name="emptitle" required>
                                                <option value="C2C">C2C</option>
                                                <option value="1099">1099</option>
                                                <option value="W2">W2</option>
                                                <option value="C2H">C2H</option>
                                                <option value="Fulltime">Fulltime</option>
                                               
                                            </select>
                                        </div>

                                        <!-- Input -->
                                        <div class="form-group col-lg-6 col-md-12">
                                            <label>Add Work Experience</label>
                                            <input type="text" name="experience" placeholder="5-10 Years" required>
                                        </div>
                                         <!-- Input -->
                                         <div class="form-group col-lg-6 col-md-12">
                                            <label>Willing to Travel</label>
                                             <select class="chosen-select" name="travel" required>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>

                                        <!-- Input -->
                                        <div class="form-group col-lg-6 col-md-12">
                                            <label>Desired Salary/Rate</label>
                                            <select class="chosen-select" name="rate" required>
                                                <option value="1099">1099</option>
                                                <option value="W2">W2</option>
                                                <option value="C2C">C2C</option>
                                               
                                            </select>
                                        </div>

                                        <!-- Input -->
                                        <div class="form-group col-lg-6 col-md-12">
                                            <label>Education Details</label>
                                            <input type="text" name="edu" placeholder="Certificate" required>
                                        </div>

                                        <!-- Input -->
                                        <div class="form-group col-lg-6 col-md-12">
                                            <label>Languages</label>
                                            <input type="text" name="lang" placeholder="English, Turkish" required>
                                        </div>

                                        <!-- Search Select -->
                                        <div class="form-group col-lg-6 col-md-12">
                                            <label>Add Skills</label>
                                            <select data-placeholder="Categories" class="chosen-select multiple" multiple tabindex="4" name="skill" required> 
                                              <option value="java">java</option> 
                                              <option value="Php">Php</option> 
                                              <option value="C++">C++</option> 
                                              <option value="python">python</option> 
                                              <option value="HTML">HTML</option> 
                                            </select>
                                        </div>

                                        <!-- Input -->
                                        <div class="form-group col-lg-6 col-md-12">
                                            <label>Security Clearance</label>
                                            <select class="chosen-select" name="security" required>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                         <!-- Input -->
                                         <div class="form-group col-lg-6 col-md-12">
                                            <label>Willing to Relocate</label>
                                            <select class="chosen-select" name="wtorelocate" required>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>

                                        <!-- About Company -->
                                        <div class="form-group col-lg-12 col-md-12">
                                            <label>Desired Job Title</label>
                                            <textarea placeholder="xyz......" required></textarea>
                                        </div>

                                        <!-- Input -->
                                       <!--  <div class="form-group col-lg-6 col-md-12">
                                            <button name="" class="theme-btn btn-style-one">Save</button>
                                        </div> -->
                                    </div>
                                
                            </div>
                        </div>
                    </div>
                      </form>

                    <!-- Ls widget -->
                    <form action="alldata2.php" method="post">
                    <div class="ls-widget">
                        <div class="tabs-box">                        
                            <div class="widget-title">
                                <h4>Social Network</h4>
                            </div>

                            <div class="widget-content">
                                 <form class="default-form">
                                    <div class="row">
                                        <!-- Input -->
                                        <div class="form-group col-lg-6 col-md-12">
                                            <label>email2</label>
                                            <input type="text" name="email2" placeholder="" required>
                                        </div>

                                        <div class="form-group col-lg-6 col-md-12">
                                            <label>Facebook</label>
                                            <input type="text" name="facebook" placeholder="www.facebook.com/Invision" required>
                                        </div>

                                        <!-- Input -->
                                        <div class="form-group col-lg-6 col-md-12">
                                            <label>Twitter</label>
                                            <input type="text" name="twitter" placeholder="" required>
                                        </div>

                                        <!-- Input -->
                                        <div class="form-group col-lg-6 col-md-12">
                                            <label>Linkedin</label>
                                            <input type="text" name="linkedin" placeholder="" required>
                                        </div>

                                        <!-- Input -->
                                        <div class="form-group col-lg-6 col-md-12">
                                            <label>Google Plus</label>
                                            <input type="text" name="google" placeholder="" required>
                                        </div>

                                        <!-- Input -->
                                        <div class="form-group col-lg-6 col-md-12">
                                            <button name="save2" class="theme-btn btn-style-one">Save2</button>
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


            </div>
        </div>
  </form>
    </section>
    <!-- End Dashboard -->

    <!-- Copyright -->
    <div class="copyright-text">
        <p><a href="http://solicitousbusiness.com/">Powered with <i class="fa fa-heart" style="color:red;"></i> By</a><a href="http://solicitousbusiness.com/"> Solicitous</a></p>
    </div>

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
<script src="js/knob.js"></script>
<script src="js/script.js"></script>
<!--Google Map APi Key-->
<script src="http://maps.google.com/maps/api/js?key=AIzaSyDaaCBm4FEmgKs5cfVrh3JYue3Chj1kJMw&amp;ver=5.2.4"></script>
<script src="js/map-script.js"></script>
<!--End Google Map APi-->
</form>
</body>

<!-- Mirrored from creativelayers.net/themes/superio/candidate-dashboard-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Dec 2021 18:07:10 GMT -->
</html>



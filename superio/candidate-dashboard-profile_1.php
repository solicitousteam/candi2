<?php
    include 'candidate-auth-session.php';
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from creativelayers.net/themes/superio/candidate-dashboard-profile.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Dec 2021 18:07:10 GMT -->
<head>
<?php
    include 'candidate-header.html';
?>
</head>

<body>

<div class="page-wrapper dashboard">

    <!-- Preloader -->
    <div class="preloader"></div>

<?php
    include 'candidate-sidebar.php';
?>

    <!-- Dashboard -->
    <section class="user-dashboard">
        <div class="dashboard-outer">
            <div class="upper-title-box">
                <h3>My Profile</h3>
                <!-- <div class="text">Ready to jump back in?</div> -->
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Ls widget -->
                    <div class="ls-widget">
                        <div class="tabs-box">                        
                            <div class="widget-title">
                                <h4>My Profile</h4>
                            </div>
                            <form class="default-form" action="candidate-profile-data.php" method="post" enctype="multipart/form-data">
                            <div class="widget-content">

                               <!--  <div class="uploading-outer">
                                    <div class="uploadButton">
                                        <input class="uploadButton-input" type="file"  name="files[]" accept="image/*, application/pdf" id="upload"  multiple required>
                                        <label class="uploadButton-button ripple-effect" for="upload"> Upload Resume <br>and Profile Picture</label>
                                        <span class="uploadButton-file-name"></span>
                                    </div> -->
                                     <div class="uploading-outer">
                                    <div class="uploadButton">
                                       <!--  <input class="uploadButton-input" type="file"  name="files[]" accept="application/pdf" id="upload"  multiple required>
                                        <label class="uploaButdton-button ripple-effect" for="upload"> Upload Resume <br>and Profile Picture</label>
                                        <span class="uploadButton-file-name"></span> -->
                                        <label>Upload Resume:
                                         <input name="file1[]" type="file" id="upload" /> </label><br />
                                         
                                         <label>Upload Profile Picture:
                                         <input name="file2[]" type="file" id="upload" /></label><br />
                                    </div>
                                    <!-- <div class="uploadButton">
                                        <input class="uploadButton-input" type="file"  name="resume" accept="image/*, application/pdf" id="upload"  multiple="multiple">
                                        <label class="uploadButton-button ripple-effect" for="upload">Upload Resume</label>
                                        <span class="uploadButton-file-name"></span>
                                    </div> -->
                                    <!-- <div class="text">Max file size is 1MB, Minimum dimension: 330x300 <br> Allowed file formats are .jpg .png .jpeg .pdf .docx</div> -->
                                </div>

                                
                                    <div class="row">
                                        <!-- Input -->
                                        <!-- <div class="form-group col-lg-6 col-md-12">
                                            <label>Full Name</label>
                                            <input type="text" name="name" placeholder="Enter your name">
                                        </div> -->

                                        <!-- Input -->
                                        <div class="form-group col-lg-6 col-md-12">
                                            <label>Position Title</label>
                                            <input type="text" name="position" placeholder="Current position title" required>
                                        </div>

                                        <!-- Input -->
                                        <div class="form-group col-lg-6 col-md-12">
                                            <label>Phone</label>
                                            <input type="text" name="phone" placeholder="Phone number" required>
                                        </div>

                                        <!-- Input -->
                                        <!-- <div class="form-group col-lg-6 col-md-12">
                                            <label>Email ID</label>
                                            <input type="text" name="email" placeholder="Email ID" required>
                                        </div> -->

                                        <!-- Input -->
                                        <div class="form-group col-lg-6 col-md-12">
                                            <label>Location</label>
                                            <input type="text" name="location" placeholder="Current location" required>
                                        </div>

                                        <!-- Input -->
                                        <div class="form-group col-lg-3 col-md-12">
                                            <label>Work Authorization</label>
                                            <select class="chosen-select" name="work">
                                                <option value="H1">H1</option>
                                                <option value="GC">GC</option>
                                                <option value="Citizen">Citizen</option>
                                                <option value="GC EAD">GC EAD</option>
                                                <option value="H4 EAD">H4 EAD</option>
                                            </select>
                                        </div>

                                        <!-- Input -->
                                        <div class="form-group col-lg-3 col-md-12">
                                            <label>Employment Title</label>
                                            <select class="chosen-select" name="emptitle">
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
                                            <input type="number" min="0" name="experience" placeholder="5 Years" required>
                                        </div>
                                         <!-- Input -->
                                         <div class="form-group col-lg-6 col-md-12">
                                            <label>Willing to Travel</label>
                                            <select class="chosen-select" name="travel">
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>

                                        <!-- Input -->
                                        <div class="form-group col-lg-6 col-md-12">
                                            <label>Desired Salary/Rate</label>
                                            <!--<select class="chosen-select"  name="rate">-->
                                            <!--    <option value="1099">1099</option>-->
                                            <!--    <option value="W2">W2</option>-->
                                            <!--    <option value="C2C">C2C</option>-->
                                               
                                            <!--</select>-->
                                              <input type="text" min="0" name="experience" placeholder="Desired Salary" required>
                                        </div>

                                        <!-- Input -->
                                        <div class="form-group col-lg-6 col-md-12">
                                            <label>Education Details</label>
                                            <input type="text" name="edu" placeholder="Education" required>
                                        </div>

                                        <!-- Input -->
                                        <div class="form-group col-lg-6 col-md-12">
                                            <label>Languages</label>
                                            <input type="text" name="lang" placeholder="Eg. English, Spanish" required>
                                        </div>

                                        <!-- Search Select -->
                                        <div class="form-group col-lg-6 col-md-12">
                                            <label>Add Skills</label>
                                            <select data-placeholder="Categories" class="chosen-select multiple" multiple tabindex="4" name="skill[]"> 
                                              <option value="Java">Java</option> 
                                              <option value="Php">Php</option> 
                                              <option value="C++">C++</option> 
                                              <option value="Python">Python</option> 
                                              <option value="HTML">HTML</option> 
                                            </select>
                                        </div>

                                        <!-- Input -->
                                        <div class="form-group col-lg-6 col-md-12">
                                            <label>Security Clearance</label>
                                            <select class="chosen-select" name="security">
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                         <!-- Input -->
                                         <div class="form-group col-lg-6 col-md-12">
                                            <label>Willing to Relocate</label>
                                            <select class="chosen-select" name="relocate">
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>

                                        <!-- About Company -->
                                        <div class="form-group col-lg-12 col-md-12">
                                            <label>Desired Job Title</label>
                                            <input type="text" name="jobtitle" placeholder="Job Title" required>
                                        </div>

                                        <!-- Input -->
                                        <div class="form-group col-lg-6 col-md-12">
                                            <input type="submit" class="theme-btn btn-style-one" name="submit">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Ls widget -->
                    <div class="ls-widget">
                        <div class="tabs-box">                        
                            <div class="widget-title">
                                <h4>Social Network</h4>
                            </div>

                            <div class="widget-content">
                                 <form class="default-form" action="candidate-profile-data.php" method="post">
                                    <div class="row">
                                        <!-- Input -->
                                        <div class="form-group col-lg-6 col-md-12">
                                            <label>Facebook</label>
                                            <input type="text" name="facebook" placeholder="www.facebook.com/Example" >
                                        </div>

                                        <!-- Input -->
                                        <div class="form-group col-lg-6 col-md-12">
                                            <label>Twitter</label>
                                            <input type="text" name="twitter" placeholder="www.twitter.com/Example" >
                                        </div>

                                        <!-- Input -->
                                        <div class="form-group col-lg-6 col-md-12">
                                            <label>Linkedin</label>
                                            <input type="text" name="linkedin" placeholder="www.linkedin.com/Example" >
                                        </div>

                                        <div class="form-group col-lg-6 col-md-12">
                                            <label>Skype ID</label>
                                            <input type="text" name="skype" placeholder="Skype ID" >
                                        </div>

                                        <!-- Input -->
                                        <div class="form-group col-lg-6 col-md-12">
                                            <label>Google Plus</label>
                                            <input type="text" name="google" placeholder="www.googleplus.com/Example" >
                                        </div>

                                        <!-- Input -->
                                        
                                    </div>
                                    <div class="form-group col-lg-6 col-md-12">
                                           <input type="submit" class="theme-btn btn-style-one" name="submit2"> 
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Ls widget -->
                    <!-- <div class="ls-widget">
                        <div class="tabs-box">                        
                            <div class="widget-title">
                                <h4>Contact Information</h4>
                            </div>

                            <div class="widget-content">
                                 <form class="default-form">
                                    <div class="row"> -->
                                        <!-- Input -->
                                        <!-- <div class="form-group col-lg-6 col-md-12">
                                            <label>Country</label>
                                            <select class="chosen-select">
                                                <option>Australia</option>
                                                <option>Pakistan</option>
                                                <option>Chaina</option>
                                                <option>Japan</option>
                                                <option>India</option>
                                            </select>
                                        </div> -->

                                        <!-- Input -->
                                        <!-- <div class="form-group col-lg-6 col-md-12">
                                            <label>City</label>
                                            <select class="chosen-select">
                                                <option>Melbourne</option>
                                                <option>Pakistan</option>
                                                <option>Chaina</option>
                                                <option>Japan</option>
                                                <option>India</option>
                                            </select>
                                        </div> -->

                                        <!-- Input -->
                                        <!-- <div class="form-group col-lg-12 col-md-12">
                                            <label>Complete Address</label>
                                            <input type="text" name="name" placeholder="329 Queensberry Street, North Melbourne VIC 3051, Australia.">
                                        </div> -->

                                        <!-- Input -->
                                        <!-- <div class="form-group col-lg-6 col-md-12">
                                            <label>Find On Map</label>
                                            <input type="text" name="name" placeholder="329 Queensberry Street, North Melbourne VIC 3051, Australia.">
                                        </div> -->

                                        <!-- Input -->
                                        <!-- <div class="form-group col-lg-3 col-md-12">
                                            <label>Latitude</label>
                                            <input type="text" name="name" placeholder="Melbourne">
                                        </div> -->

                                        <!-- Input -->
                                        <!-- <div class="form-group col-lg-3 col-md-12">
                                            <label>Longitude</label>
                                            <input type="text" name="name" placeholder="Melbourne">
                                        </div> -->

                                        <!-- Input -->
                                        <!-- <div class="form-group col-lg-12 col-md-12">
                                            <button class="theme-btn btn-style-three">Search Location</button>
                                        </div> -->


                                        <!-- <div class="form-group col-lg-12 col-md-12">
                                            <div class="map-outer">
                                                <div class="map-canvas map-height"
                                                    data-zoom="12"
                                                    data-lat="-37.817085"
                                                    data-lng="144.955631"
                                                    data-type="roadmap"
                                                    data-hue="#ffc400"
                                                    data-title="Envato"
                                                    data-icon-path="images/resource/map-marker.png"
                                                    data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
                                                </div>
                                            </div>
                                        </div> -->

                                        <!-- Input -->
                                        <!-- <div class="form-group col-lg-12 col-md-12">
                                            <button class="theme-btn btn-style-one">Save</button>
                                        </div> -->
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </section>
    <!-- End Dashboard -->
    <?php
    include 'candidate-footer.html';
?>
   </html>



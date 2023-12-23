<?php 
require_once "controllerUserData.php"; 
include 'connect.php';
include 'header.html';
?>
<script>  
if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    } 
</script> 
</head>
<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-12">
					<div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
									<div class="text-center mb-3">
										<a href="superio/employer-login.html"><img src="images/Candi-AI-07.png"  height="64px"></a>
									</div>
                                    <h4 class="text-center mb-4 text-black">Sign up your account</h4>
                                    <form action="" method="POST" autocomplete="" enctype="multipart/form-data">
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
                                        <div class="mb-sm-5 mb-2">
                                            <div class="title mb-4"><span class="fs-18 text-black font-w600">Create Recruiters Profile</span></div>
                                            <div class="row">
                                                <div class="col-xl-4 col-sm-8">
                                                    <div class="form-group">
                                                        <!-- <label>First Name</label> -->
                                                        <input type="text" class="form-control" placeholder="First Name" name="fname" required>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-xl-4 col-sm-8">
                                                    <div class="form-group">
                                                        <!-- <label>Last Name</label> -->
                                                        <input type="text" class="form-control" placeholder="Last Name" name="lname" required>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-sm-6">
                                                    <div class="form-group">
                                                        <!-- <label>Locations</label> -->
                                                        <input type="text" class="form-control" placeholder="Location" name="location" required>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-sm-6">
                                                    <div class="form-group">
                                                        <!-- <label>Email</label> -->
                                                        <div class="input-group input-icon mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon3"><i class="las la-envelope"></i></span>
                                                            </div>
                                                            <input type="email" class="form-control" placeholder="Email" name="email" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-sm-6">
                                                    <div class="form-group">
                                                        <!-- <label>Email</label> -->
                                                        <div class="input-group input-icon mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon3"><i class="fa fa-lock"></i></span>
                                                            </div>
                                                            <input type="password" class="form-control" placeholder="Password" name="password" id="password" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-sm-6">
                                                    <div class="form-group">
                                                        <!-- <label>Email</label> -->
                                                        <div class="input-group input-icon mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon3"><i class="fa fa-check" aria-hidden="true"></i></span>
                                                            </div>
                                                            <input type="password" class="form-control" placeholder="Confirm password" name="confirmpass" id="confirmpass" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <div class="col-xl-4 col-sm-6">
                                                    <div class="form-group">
                                                        <label>Whatsapp</label>
                                                        <div class="input-group input-icon mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon2"><i class="fa fa-whatsapp" aria-hidden="true"></i></span>
                                                            </div>
                                                            <input type="text" class="form-control" placeholder="Phone no.">
                                                        </div>
                                                    </div>
                                                </div> -->
                                               
                                                <div class="col-xl-4 col-sm-6">
                                                    <div class="form-group">
                                                        <!-- <label>MobilePhone</label> -->
                                                        <div class="input-group input-icon mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                                            </div>
                                                            <input type="number" class="form-control" placeholder="Phone Number" name="phoneno" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-sm-6">
                                                    <div class="form-group">
                                                        <!-- <label>Whatsapp</label> -->
                                                        <div class="input-group input-icon mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon2"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                            </div>
                                                            <!-- <div>
                                                            <label for="files" class="btn">Upload Company Logo</label>
                                                            <input id="files" style="visibility:hidden;" type="file">
                                                            </div> -->
                                                            <input type="file" class="form-control"  placeholder="company logo" name="fileToUpload" id="fileToUpload" required>
                                                            <!-- <div style="display: block; width: 100px; height: 40px; overflow: hidden;">
                                                            <button style="width: 110px; height: 30px; position: relative; top: -5px; left: -5px;"><a href="javascript: void(0)">Upload Company Logo</a></button>
                                                            <input type="file" id="upload_input" name="upload" style="font-size: 50px; width: 120px; opacity: 0; filter:alpha(opacity=0);  position: relative; top: -40px;; left: -20px" />
                                                            </div> -->
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-sm-5 mb-2">
                                            <div class="title mb-4"><span class="fs-18 text-black font-w600">Professional Details</span></div>
                                            <div class="row">
                                                <div class="col-xl-4 col-sm-6">
                                                    <div class="form-group">
                                                        <!-- <label>Current Company Name</label> -->
                                                        <div class="input-group input-icon mb-3">
                                                            
                                                            <input type="text" class="form-control" placeholder="Current Company Name" name="companyname" required>
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                                
                                              
                                        
                                      <div class="col-xl-4 col-sm-6">
                                        <div class="form-group">
                                           
                                            <div class="input-group input-icon mb-3">
                                               
                                                <input type="text" class="form-control" placeholder="Address" name="address" required>
                                            </div>
                                        </div>
                                  </div>
                                  <div class="col-xl-4 col-sm-6">
                                    <div class="form-group">
                                       
                                        <div class="input-group input-icon mb-3">
                                           
                                            <input type="text" class="form-control" placeholder="City" name="city" required>
                                        </div>
                                    </div>
                              </div>
                              <div class="col-xl-4 col-sm-6">
                                <div class="form-group">
                                   
                                    <div class="input-group input-icon mb-3">
                                       
                                        <input type="text" class="form-control" placeholder="State" name="state" required>
                                    </div>
                                </div>
                          </div>                             
                           <div class="col-xl-4 col-sm-6">
                            <div class="form-group">
                               
                                <div class="input-group input-icon mb-3">
                                   
                                    <input type="text" class="form-control" placeholder="Country" name="country" required>
                                </div>
                            </div>
                      </div>
                    

                      
                                               
                                        </div>
                                        <center><button type="submit" class="btn btn-primary" name="signup">Submit</button>
                                           </div>
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
<?php include 'footer.html'; ?>

</body>


</html>
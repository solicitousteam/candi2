<?php
	include 'auth_session.php';
	include 'connect.php';	
//	$adminid=$_SESSION['admin_id'];
?>


   

    
    
   <!DOCTYPE html>
<html lang="en">
	<head><?php  include 'header.html'; ?></head> 
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

    <?php include 'connect.php';
          include 'sidebar.php';
            
   ?>

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="page-titles">
					<ol class="breadcrumb">
						<!-- <li class="breadcrumb-item"><a href="javascript:void(0)">App</a></li> -->
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Profile</a></li>
                        
					</ol>
                </div>
                <!-- row -->
                <div class="row">
                <?php
                
                 //echo $queryi="Select admin_id from admin where admin_email='".$_SESSION['admin_id']."'";
                 
                 $adminid = $_SESSION['admin_id'];
                $query1="Select * from admin where admin_id = '$adminid'"; 
                $result1=mysqli_query($conn,$query1);
                while($array1=mysqli_fetch_assoc($result1)){ 
                ?>
                    <div class="col-lg-12">
                        <div class="profile card card-body px-3 pt-3 pb-0">
                            <div class="profile-head">
                                <div class="photo-content">
                                    <div class="cover-photo"></div>
                                </div>
                                <div class="profile-info">
									<div class="profile-photo">
										<img src="<?php  echo $array1['admin_logo']; ?>" class="img-fluid rounded-circle" alt="">
									</div>
									<div class="profile-details">
										<div class="profile-name px-3 pt-2">
											<h4 class="text-primary mb-0"><?php  echo $array1["admin_fname"]." "; echo $array1["admin_lname"]; ?></h4>
											<!-- <p>UX / UI Designer</p> -->
										</div>
										<div class="profile-email px-2 pt-2">
											<h4 class="text-muted mb-0"><?php  echo $array1["admin_email"]; ?></h4>
											<!-- <p>Email</p> -->
										</div>
										<!-- <div class="dropdown ml-auto">
											<a href="#" class="btn btn-primary light sharp" data-toggle="dropdown" aria-expanded="true"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg></a>
											<ul class="dropdown-menu dropdown-menu-right">
												<li class="dropdown-item"><i class="fa fa-user-circle text-primary mr-2"></i> View profile</li>
												<li class="dropdown-item"><i class="fa fa-users text-primary mr-2"></i> Add to close friends</li>
												<li class="dropdown-item"><i class="fa fa-plus text-primary mr-2"></i> Add to group</li>
												<li class="dropdown-item"><i class="fa fa-ban text-primary mr-2"></i> Block</li>
											</ul>
										</div> -->
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    
                           
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="profile-tab">
                                    <div class="custom-tab-1">
                                        <ul class="nav nav-tabs">
                                            <!-- <li class="nav-item"><a href="#my-posts" data-toggle="tab" class="nav-link active show">Posts</a>
                                            </li> -->
                                            <li class="nav-item"><a href="#about-me" data-toggle="tab" class="nav-link">About Me</a>
                                            </li>
                                            <li class="nav-item"><a href="#profile-settings" data-toggle="tab" class="nav-link">Edit</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <!-- <div id="my-posts" class="tab-pane fade active show">
                                                <div class="my-post-content pt-3">
                                                    <div class="post-input">
                                                        <textarea name="textarea" id="textarea" cols="30" rows="5" class="form-control bg-transparent" placeholder="Please type what you want...."></textarea> 
														<a href="javascript:void()" class="btn btn-primary light px-3"><i class="fa fa-link"></i> </a>
                                                        <a href="javascript:void()" class="btn btn-primary light mr-1 px-3"><i class="fa fa-camera"></i> </a><a href="javascript:void()" class="btn btn-primary">Post</a>
                                                    </div>
                                                    <div class="profile-uoloaded-post border-bottom-1 pb-5">
                                                        <img src="images/profile/8.jpg" alt="" class="img-fluid">
														<a class="post-title" href="post-details.html"><h3 class="text-black">Collection of textile samples lay spread</h3></a>
                                                        <p>A wonderful serenity has take possession of my entire soul like these sweet morning of spare which enjoy whole heart.A wonderful serenity has take possession of my entire soul like these sweet morning
                                                            of spare which enjoy whole heart.</p>
                                                        <button class="btn btn-primary mr-2"><span class="mr-2"><i
                                                                    class="fa fa-heart"></i></span>Like</button>
                                                        <button class="btn btn-secondary"  data-toggle="modal" data-target="#replyModal"><span class="mr-2"><i
                                                                    class="fa fa-reply"></i></span>Reply</button>
                                                    </div>
                                                    <div class="profile-uoloaded-post border-bottom-1 pb-5">
                                                        <img src="images/profile/9.jpg" alt="" class="img-fluid">
														<a class="post-title" href="post-details.html"><h3 class="text-black">Collection of textile samples lay spread</h3></a>
                                                        <p>A wonderful serenity has take possession of my entire soul like these sweet morning of spare which enjoy whole heart.A wonderful serenity has take possession of my entire soul like these sweet morning
                                                            of spare which enjoy whole heart.</p>
                                                        <button class="btn btn-primary mr-2"><span class="mr-2"><i
                                                                    class="fa fa-heart"></i></span>Like</button>
                                                        <button class="btn btn-secondary"  data-toggle="modal" data-target="#replyModal"><span class="mr-2"><i
                                                                    class="fa fa-reply"></i></span>Reply</button>
                                                    </div>
                                                    <div class="profile-uoloaded-post pb-3">
                                                        <img src="images/profile/8.jpg" alt="" class="img-fluid">
														<a class="post-title" href="post-details.html"><h3 class="text-black">Collection of textile samples lay spread</h3></a>
                                                        <p>A wonderful serenity has take possession of my entire soul like these sweet morning of spare which enjoy whole heart.A wonderful serenity has take possession of my entire soul like these sweet morning
                                                            of spare which enjoy whole heart.</p>
                                                        <button class="btn btn-primary mr-2"><span class="mr-2"><i
                                                                    class="fa fa-heart"></i></span>Like</button>
                                                        <button class="btn btn-secondary"  data-toggle="modal" data-target="#replyModal"><span class="mr-2"><i
                                                                    class="fa fa-reply"></i></span>Reply</button>
                                                    </div>
                                                </div>
                                            </div> -->
                                            <div id="about-me" class="tab-pane fade active show">
                                                <!-- <div class="profile-about-me">
                                                    <div class="pt-4 border-bottom-1 pb-3">
                                                        <h4 class="text-primary">About Me</h4>
                                                        <p class="mb-2">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence was created for the bliss of souls like mine.I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.</p>
                                                        <p>A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame.</p>
                                                    </div>
                                                </div> -->
                                                <!-- <div class="profile-skills mb-5">
                                                    <h4 class="text-primary mb-2">Skills</h4>
                                                    <a href="javascript:void()" class="btn btn-primary light btn-xs mb-1">Admin</a>
                                                    <a href="javascript:void()" class="btn btn-primary light btn-xs mb-1">Dashboard</a>
                                                    <a href="javascript:void()" class="btn btn-primary light btn-xs mb-1">Photoshop</a>
                                                    <a href="javascript:void()" class="btn btn-primary light btn-xs mb-1">Bootstrap</a>
                                                    <a href="javascript:void()" class="btn btn-primary light btn-xs mb-1">Responsive</a>
                                                    <a href="javascript:void()" class="btn btn-primary light btn-xs mb-1">Crypto</a>
                                                </div> -->
                                                <!-- <div class="profile-lang  mb-5">
                                                    <h4 class="text-primary mb-2">Language</h4>
													<a href="javascript:void()" class="text-muted pr-3 f-s-16"><i class="flag-icon flag-icon-us"></i> English</a> 
													<a href="javascript:void()" class="text-muted pr-3 f-s-16"><i class="flag-icon flag-icon-fr"></i> French</a>
                                                    <a href="javascript:void()" class="text-muted pr-3 f-s-16"><i class="flag-icon flag-icon-bd"></i> Bangla</a>
                                                </div> -->
                                                <div class="profile-personal-info">
                                                    <br>
                                                    <h4 class="text-primary mb-4">Personal Information</h4>
                                                    <div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            <h5 class="f-w-500">Name <span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-sm-9 col-7"><span><?php  echo $array1["admin_fname"]." "; echo $array1["admin_lname"]; ?></span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            <h5 class="f-w-500">Email <span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-sm-9 col-7"><span><?php  echo $array1["admin_email"]; ?></span>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            <h5 class="f-w-500">Locations <span class="pull-right">:</span></h5>
                                                        </div>
                                                        <div class="col-sm-9 col-7"><span>Aaron's Hill</span>
                                                        </div>
                                                    </div> -->
                                                    <!-- <div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            <h5 class="f-w-500">Age <span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-sm-9 col-7"><span>27</span>
                                                        </div>
                                                    </div> -->
                                                    <div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            <h5 class="f-w-500">Location <span class="pull-right">:</span></h5>
                                                        </div>
                                                        <div class="col-sm-9 col-7"><span><?php  echo $array1["admin_location"]; ?></span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            <h5 class="f-w-500">Phone <span class="pull-right">:</span></h5>
                                                        </div>
                                                        <div class="col-sm-9 col-7"><span><?php  echo $array1["admin_phoneno"]; ?></span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            <h5 class="f-w-500">Company Name <span class="pull-right">:</span></h5>
                                                        </div>
                                                        <div class="col-sm-9 col-7"><span><?php  echo $array1["admin_company_name"]; ?></span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            <h5 class="f-w-500">City<span class="pull-right">:</span></h5>
                                                        </div>
                                                        <div class="col-sm-9 col-7"><span><?php  echo $array1["admin_city"]; ?></span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            <h5 class="f-w-500">State <span class="pull-right">:</span></h5>
                                                        </div>
                                                        <div class="col-sm-9 col-7"><span><?php  echo $array1["admin_state"]; ?></span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            <h5 class="f-w-500">Country<span class="pull-right">:</span></h5>
                                                        </div>
                                                        <div class="col-sm-9 col-7"><span><?php  echo $array1["admin_country"]; ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div id="profile-settings" class="tab-pane fade">
                                                <div class="pt-3">
                                                    <div class="settings-form">
                                                    <br><h4 class="text-primary">Recruiters Profile</h4><br>
                                                    <form action="edit-app-profile.php" method="post" enctype="multipart/form-data"> 
                                                            <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                    <input type="text" placeholder="First Name" name="fname" value="<?php  echo $array1['admin_fname']; ?>" class="form-control">
                                                                </div>

                                                                <div class="form-group col-md-6">
                                                                    <input type="text" placeholder="Last Name" name="lname" value="<?php  echo $array1['admin_lname']; ?>" class="form-control">
                                                                </div>

                                                                <!-- <div class="form-group col-md-6">
                                                                    <label>Last Name</label>
                                                                    <input type="text" placeholder="Last Name" class="form-control">
                                                                </div> -->
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                   
                                                                <!-- <label>Locations</label> -->
                                                                <input type="text" placeholder="Location" name="location" value="<?php  echo $array1['admin_location']; ?>" class="form-control">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                   
                                                                <!-- <label>Email</label> -->
                                                                <input type="email" placeholder="Email" name="email" value="<?php  echo $array1['admin_email']; ?>" class="form-control">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <!-- <label>MobilePhone</label> -->
                                                                <input type="number" placeholder="Phone" name="phone" value="<?php  echo $array1['admin_phoneno']; ?>" class="form-control">
                                                            </div>
                                                           
                                                            </div>
                                                            <br><h4 class="text-primary">Professional Details</h4><br>
                                                            
                                                            <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                    <label>Current Company Name </label> 
                                                                    <input type="text" placeholder="Company Name " name="company" value="<?php  echo $array1['admin_company_name']; ?>" class="form-control">
                                                                </div>
                                                                
                                                                <div class="form-group col-md-6">
                                                                    <label>Company Logo</label>
                                                                    <input type="file" placeholder="company logo" name="fileToUpload" id="fileToUpload" class="form-control">
                                                                </div>
                                                                
                                                                
                                                                
                                                            </div>
                                                            <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                    <!-- <label>Address </label> -->
                                                                    <input type="text" placeholder="Address" name="address" value="<?php  echo $array1['admin_address']; ?>" class="form-control">
                                                                </div>
                                                            <div class="form-group col-md-6">
                                                                    <!-- <label>Current Company Name </label> -->
                                                                    <input type="text" placeholder="City" name="city" value="<?php  echo $array1['admin_city']; ?>" class="form-control">
                                                                </div>
                                                                
                                                            </div>
                                                            <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                    <!-- <label>Address </label> -->
                                                                    <input type="text" placeholder="State" name="state" value="<?php  echo $array1['admin_state']; ?>" class="form-control">
                                                                </div>
                                                            <div class="form-group col-md-6 ">
                                                                    <input type="text" placeholder="Country" name="country" value="<?php  echo $array1['admin_country']; ?>" class="form-control">
                                                                
                                                                </div>
                                                                
                                                            </div>
                                                            <button class="btn btn-primary" name="submit" type="submit">Submit</button>
                                                        </form>
                                                       <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
									<!-- Modal -->
									<div class="modal fade" id="replyModal">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title">Post Reply</h5>
													<button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
												</div>
												<div class="modal-body">
													<form>
														<textarea class="form-control" rows="4">Message</textarea>
													</form>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
													<button type="button" class="btn btn-primary">Reply</button>
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
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->

        
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->
	
	<!--removeIf(production)-->
        
    <!--**********************************
        Scripts
    ***********************************-->
    <?php include 'footer.html'; ?>	
	<!-- <script src="js/demo.js"></script>
    <script src="js/styleSwitcher.js"></script> -->
	<script>
		$('#lightgallery').lightGallery({
			thumbnail:true,
		});
	</script>
    



	
		
</body>



</html>
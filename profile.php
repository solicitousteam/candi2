<!DOCTYPE html>
<html lang="en">
<head> 
<?php 
include 'auth_session.php'; 
include 'header.html'; 
?>
</head>
<body>
	<?php  
	include 'sidebar.php';

    ?>
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

		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
			<div class="container-fluid">
            <!-- row -->
				<div class="row">
					
					<div class="col-xl-12 col-lg-6">
						<div class="row">
							<div class="col-xl-12">
								<div class="card profile-card">
									<div class="card-header flex-wrap border-0 pb-0">
										<h3 class="fs-24 text-black font-w600 mr-auto mb-2 pr-3">Edit Profile</h3>
										<div class="d-sm-flex d-block">
											<div class="d-flex mr-5 align-items-center mb-2">
												<div class="custom-control custom-switch toggle-switch text-right">
													<input type="checkbox" class="custom-control-input" id="customSwitch1">
													<label class="custom-control-label" for="customSwitch1">Available for hire?</label>
												</div>
											</div>
											<a href="#" class="btn btn-dark light rounded mr-3 mb-2">Cancel</a>
											<a class="btn btn-primary rounded mb-2" href="#">Save Changes</a>
										</div>
									</div>
									<div class="card-body">
										<form>
											<div class="mb-sm-5 mb-2">
												<div class="title mb-4"><span class="fs-18 text-black font-w600">Generals</span></div>
												<div class="row">
													<div class="col-xl-12 col-sm-6">
														<div class="form-group">
															<label>Company Name</label>
															<input type="text" class="form-control" placeholder="Enter name">
														</div>
													</div>
													
													<div class="col-xl-4 col-sm-6">
														<div class="form-group">
															<label>Username</label>
															<input type="text" class="form-control" placeholder="User name">
														</div>
													</div>
													<div class="col-xl-4 col-sm-6">
														<div class="form-group">
															<label>Password</label>
															<input type="password" class="form-control" placeholder="Enter password">
														</div>
													</div>
													<div class="col-xl-4 col-sm-6">
														<div class="form-group">
															<label>Re-Type Password</label>
															<input type="password" class="form-control" placeholder="Enter password">
														</div>
													</div>
												</div>
											</div>
											<div class="mb-sm-5 mb-2">
												<div class="title mb-4"><span class="fs-18 text-black font-w600">CONTACT</span></div>
												<div class="row">
													<div class="col-xl-4 col-sm-6">
														<div class="form-group">
															<label>MobilePhone</label>
															<div class="input-group input-icon mb-3">
																<div class="input-group-prepend">
																	<span class="input-group-text" id="basic-addon1"><i class="fa fa-phone" aria-hidden="true"></i></span>
																</div>
																<input type="text" class="form-control" placeholder="Phone no.">
															</div>
														</div>
													</div>
													<div class="col-xl-4 col-sm-6">
														<div class="form-group">
															<label>Whatsapp</label>
															<div class="input-group input-icon mb-3">
																<div class="input-group-prepend">
																	<span class="input-group-text" id="basic-addon2"><i class="fa fa-whatsapp" aria-hidden="true"></i></span>
																</div>
																<input type="text" class="form-control" placeholder="Phone no.">
															</div>
														</div>
													</div>
													<div class="col-xl-4 col-sm-6">
														<div class="form-group">
															<label>Email</label>
															<div class="input-group input-icon mb-3">
																<div class="input-group-prepend">
																	<span class="input-group-text" id="basic-addon3"><i class="las la-envelope"></i></span>
																</div>
																<input type="text" class="form-control" placeholder="Enter email">
															</div>
														</div>
													</div>
													<div class="col-xl-4 col-sm-6">
														<div class="form-group">
															<label>Address</label>
															<div class="input-group">
																<input type="text" class="form-control" placeholder="Enter adress">
															</div>
														</div>
													</div>
													<div class="col-xl-4 col-sm-6">
														<div class="form-group">
															<label>City</label>
															<select class="form-control default-select">
																<option>London</option>
																<option>United State</option>
																<option>United Kingdom</option>
																<option>Germany</option>
																<option>Netherland</option>
															</select>
														</div>
													</div>
													<div class="col-xl-4 col-sm-6">
														<div class="form-group">
															<label>Country</label>
															<select class="form-control default-select">
																<option>England</option>
																<option>United State</option>
																<option>United Kingdom</option>
																<option>Germany</option>
																<option>Netherland</option>
															</select>
														</div>
													</div>
												</div>
											</div>
											
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
            Content body end
        ***********************************-->

    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->
<?php 	include 'footer.html'; ?>
</body>


</html>
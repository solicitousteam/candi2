<!-- <?php 
session_start();
include 'connect.php';
$adminid=$_SESSION['admin_id'];
$querys="Select * from sub_admin where admin_id = '$adminid'"; 
$results=mysqli_query($conn,$querys);
$arrays=mysqli_fetch_assoc($results);
?> -->
<!--**********************************
            Nav header start
        ***********************************-->
		<div class="nav-header">
            <a href="dashboard.php" class="brand-logo">
				<img src="../images/Candi-AI-06.png"  height="64px">
				
				<img src="../images/Candi-AI-08.png" class="brand-title"  fill-rule="evenodd">
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
								Application
                            </div>
                        </div>
                        <ul class="navbar-nav header-right">
							<!-- <li class="nav-item">
								<div class="input-group search-area d-xl-inline-flex d-none">
									<input type="text" class="form-control" placeholder="Search here...">
									<div class="input-group-append">
										<span class="input-group-text"><a href="javascript:void(0)"><i class="fa fa-search" aria-hidden="true"></i></a></span>
									</div>
								</div>
							</li> -->
							
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="javascript:void(0)" role="button" data-toggle="dropdown">
									<div class="header-info">
										<?php
										if(!empty($arrays['admin_fname'])){
											echo "<span class='text-black'><strong>".$arrays['admin_fname']." ".$arrays['admin_lname']."</strong></span>";
										 } else {    
											echo "<span class='text-black'><strong>My Account</strong></span>";
										 } 
										?>
										<!-- <span class="text-black"><strong><?php //echo $arrays['admin_fname']." ".$arrays['admin_lname']; ?></strong></span> -->
										<p class="fs-12 mb-0"> Admin</p>
									</div>
									<?php
										if(!empty($arrays['admin_logo'])){
											echo "<img src='logo/".$arrays['admin_logo']."' alt='employer logo displayed in a circular shape' class='thumb'>";
										 } else {    
											echo "<img src='../images/Candi-AI-06.png' alt='employer logo displayed in a circular shape' class='thumb'>";
										 } 
									?>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
									<a href="app-profile.php" class="dropdown-item ai-icon">
										<svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    <a href="logout-user.php" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->


<!--**********************************
            Sidebar start
        ***********************************-->
        <div class="deznav">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">
					<li><a class="ai-icon" href="index.php" aria-expanded="false">
						<i class="fa fa-bars" aria-hidden="true"></i>
						<!-- <i class="flaticon-381-notepad"></i> -->
						<span class="nav-text">Dashboard</span>
					</a>
					</li>
					<li>
                   
					
					<li>
              <a
                class="has-arrow ai-icon"
                href="javascript:void()"
                aria-expanded="false"
              >
                <i class="fa fa-television" aria-hidden="false"></i>

                <span class="nav-text">Requirment</span>
              </a>

              <ul aria-expanded="false">
                <li><a href="requirment.html">Manual</a></li>
                <li><a href="Https://chatbot.py.solicitous.cloud">Quick</a></li>
              </ul>
            </li>

					<li>
					<li>
						<li><a class="ai-icon" href="question.php" aria-expanded="false">
							<i class="fa fa-user" aria-hidden="true"></i>
							<!-- <i class="flaticon-381-notepad"></i> -->
							<span class="nav-text">Interview Question</span>
						</a>
						</li>
						<li><a class="ai-icon" href="candidate-front.php" aria-expanded="false">
							<i class="fa fa-user" aria-hidden="true"></i>
							<!-- <i class="flaticon-381-notepad"></i> -->
							<span class="nav-text">Candidates</span>
						</a>
						</li>
                    
                   
							<li><a class="ai-icon" href="manage_job.php" aria-expanded="false">
								<i class="fa fa-briefcase" aria-hidden="true"></i>
								<!-- <i class="flaticon-381-notepad"></i> -->
								<span class="nav-text">Manage Job</span>
							</a>
							</li>	
					
				
						
						
                        
                  
				
             
            <li>
              <a class="ai-icon" href="page-login.html" aria-expanded="false">
                <i class="fa fa-sign-in" aria-hidden="true"></i>

                <span class="nav-text">Logout </span>
              </a>
            </li>
					
					<!-- <li><a class="ai-icon" href="logout-user.php" aria-expanded="false">
						<i class="fa fa-sign-in" aria-hidden="true"></i> -->
						<!-- <i class="flaticon-381-notepad"></i> -->
						<!-- <span class="nav-text">Logout </span>
					</a>
					</li> -->
					<!-- <li><a class="ai-icon" href="page-register.php" aria-expanded="false">
						<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
						<span class="nav-text">Register</span>
					</a>
					</li> -->
                   
                      
                </ul>
				
				<div class="copyright">
                    <p><strong> © Copyright Solicitous. <br> All Right Reserved</strong>  </p>
					<p><a href="http://solicitousbusiness.com/">Powered with <i class="fa fa-heart" style="color:red;"></i> By</a><a href="http://solicitousbusiness.com/"> Solicitous</a></p>
				</div>
			</div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
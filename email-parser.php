<?php 
include "auth_session.php";

?>
<html lang="en">
<head>
<?php
include "connect.php"; 
include "header.html";
?>
</head>
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

	<?php 
	include "sidebar.php";
	?>
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="row">
					
						<div class="row col-lg-12">
							<div class="col-xl-12">
								<!-- <div class="d-flex flex-wrap search-job search-job-xl bg-white rounded py-3 px-md-3 px-0 mb-4 align-items-center"> -->
									<!-- <div class="col-xl-3 col-xxl-12 col-lg-3 search-dropdown aroundYou">
										<div class="dropdown mb-0 custom-dropdown d-block">
											<div class="btn d-flex align-items-center rounded-0 svg-btn px-0" role="button" data-toggle="dropdown" aria-expanded="false">
											
											</div>
										
										</div>
									</div> -->
									<div class="col-xl-9 col-xxl-12 col-lg-9 d-flex flex-wrap">
										
										<!-- <input class="form-control input-rounded mr-auto mb-2 mb-md-0" type="text" placeholder="Search by technologies"> -->
										<a href="javascript:void(0);" class="btn rounded btn-primary  mr-3 mb-0 mb-md-0 mb-sm-2"><i class="las la-upload scale5 mr-3"></i>
						
											Upload Resumes</a>
											<a href="upload/gmail_exe.exe" class="btn btn-primary rounded  mr-3  mb-0 mb-md-0 mb-sm-2"><i class="las la-download scale5 mr-3"></i>Gmail Parser</a> 
											<a href="upload/outlook/Global/dist/outlook/outlook.exe" class="btn btn-primary rounded  mb-0 mb-md-0 mb-sm-2"><i class="las la-download scale5 mr-3"></i>Outlook Parser</a> 
										
									</div>
								<!-- </div> -->
							
							</div>
							<!-- <div class="col-xl-2 col-xxl-3 col-lg-3 col-md-4 col-6">
								<div class="card text-center">
									<div class="card-body">
										<img src="images/php.png" class="mb-sm-4 mb-3" width="80" height="80" viewBox="0 0 80 80" fill="none">
										
										<h6 class="font-w600 fs-16 mb-1">Php</h6>
										<span class="text-primary"><a href="./resumes1.html">21 Vacancy</a></span>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-xxl-3 col-lg-3 col-md-4 col-6">
								<div class="card text-center">
									<div class="card-body">
										<img src="images/java.png" class="mb-sm-4 mb-3" width="80" height="80" viewBox="0 0 80 80" fill="none">
										
										<h6 class="font-w600 fs-16 mb-1">Java</h6>
										<span class="text-primary"><a href="./resumes1.html">17 Vacancy</a></span>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-xxl-3 col-lg-3 col-md-4 col-6">
								<div class="card text-center">
									<div class="card-body">
										<img src="images/c.png" class="mb-sm-4 mb-3" width="80" height="80" viewBox="0 0 80 80" fill="none">
										
										<h6 class="font-w600 fs-16 mb-1">C</h6>
										<span class="text-primary"><a href="./resumes1.html">17 Vacancy</a></span>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-xxl-3 col-lg-3 col-md-4 col-6">
								<div class="card text-center">
									<div class="card-body">
										<img src="images/python.png" class="mb-sm-4 mb-3" width="80" height="80" viewBox="0 0 80 80" fill="none">
										
										<h6 class="font-w600 fs-16 mb-1">Python</h6>
										<span class="text-primary"><a href="./resumes1.html">17 Vacancy</a></span>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-xxl-3 col-lg-3 col-md-4 col-6">
								<div class="card text-center">
									<div class="card-body">
										<img src="images/c (1).png" class="mb-sm-4 mb-3" width="80" height="80" viewBox="0 0 80 80" fill="none">
										
										<h6 class="font-w600 fs-16 mb-1">C++</h6>
										<span class="text-primary"><a href="./resumes1.html">17 Vacancy</a></span>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-xxl-3 col-lg-3 col-md-4 col-6">
								<div class="card text-center">
									<div class="card-body">
										<img src="images/js.png" class="mb-sm-4 mb-3" width="80" height="80" viewBox="0 0 80 80" fill="none">
									
										<h6 class="font-w600 fs-16 mb-1">Javascript</h6>
										<span class="text-primary"><a href="./resumes1.html">17 Vacancy</a></span>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-xxl-3 col-lg-3 col-md-4 col-6">
								<div class="card text-center">
									<div class="card-body">
										<img src="images/hashtag.png" class="mb-sm-4 mb-3" width="80" height="80" viewBox="0 0 80 80" fill="none">
									
										<h6 class="font-w600 fs-16 mb-1">C#</h6>
										<span class="text-primary"><a href="./resumes1.html">17 Vacancy</a></span>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-xxl-3 col-lg-3 col-md-4 col-6">
								<div class="card text-center">
									<div class="card-body">
										<img src="images/sql-server.png" class="mb-sm-4 mb-3" width="80" height="80" viewBox="0 0 80 80" fill="none">
										
										<h6 class="font-w600 fs-16 mb-1">SQL</h6>
										<span class="text-primary"><a href="./resumes1.html">17 Vacancy</a></span>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-xxl-3 col-lg-3 col-md-4 col-6">
								<div class="card text-center">
									<div class="card-body">
										<img src="images/assembly.png" class="mb-sm-4 mb-3" width="80" height="80" viewBox="0 0 80 80" fill="none">
										
										<h6 class="font-w600 fs-16 mb-1">ASM</a></h6>
										<span class="text-primary"><a href="./resumes1.html">17 Vacancy</a></span>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-xxl-3 col-lg-3 col-md-4 col-6">
								<div class="card text-center">
									<div class="card-body">
										<img src="images/ruby.png" class="mb-sm-4 mb-3" width="80" height="80" viewBox="0 0 80 80" fill="none">
									
										<h6 class="font-w600 fs-16 mb-1">Ruby</a></h6>
										<span class="text-primary"><a href="./resumes1.html">17 Vacancy</a></span>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-xxl-3 col-lg-3 col-md-4 col-6">
								<div class="card text-center">
									<div class="card-body">
										<img src="images/Visual-Studio-Logo.png" class="mb-sm-4 mb-3" width="80" height="80" viewBox="0 0 80 80" fill="none">
									
										<h6 class="font-w600 fs-16 mb-1">Visual Basic</a></h6>
										<span class="text-primary"><a href="./resumes1.html">17 Vacancy</a></span>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-xxl-3 col-lg-3 col-md-4 col-6">
								<div class="card text-center">
									<div class="card-body">
										<img src="images/delphi.png" class="mb-sm-4 mb-3" width="80" height="80" viewBox="0 0 80 80" fill="none">
										
										
										<h6 class="font-w600 fs-16 mb-1">Delphi</a></h6>
										<span class="text-primary"><a href="./resumes1.html">17 Vacancy</a></span>
									</div>
								</div>
							</div> -->
						</div>
					</div>
					
			</div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

        <!--**********************************
            Footer start
        ***********************************-->
       <?php 
	 	include "footer.html";  
	   ?>
        <!--**********************************
            Footer end
        ***********************************-->

	


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
  
	
</body>


</html>
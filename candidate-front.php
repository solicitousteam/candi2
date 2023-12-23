<?php
include 'auth_session.php';
include 'connect.php';     
include 'header.html'; ?>
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
      <!--**********************************
            Nav header start
        ***********************************-->
        <?php 
    include 'sidebar.php';    
    ?>
      <!--**********************************
            Sidebar end
        ***********************************-->
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
                  <h4 class="card-title">Show Candidates From: </h4>
                <div class="col-xl-9 col-xxl-12 col-lg-9 d-flex flex-wrap">
                  <!-- <input class="form-control input-rounded mr-auto mb-2 mb-md-0" type="text" placeholder="Search by technologies"> -->
                  <a
                    href="datapool.php"
                    class="btn rounded btn-primary mr-3 mb-0 mb-md-0 mb-sm-2"
                  >
                    Datapool
                  </a>
                  <a
                    href="candidate_f.php"
                    class="btn btn-primary rounded mb-0 mb-md-0 mb-sm-2"
                    >Candi.ai</a
                  >
                </div>
                <!-- </div> -->
              </div>
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
        <?php include 'footer.html'; ?>
  </body>
</html>

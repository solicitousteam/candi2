<?php 
    include('connect.php');
    error_reporting(0);
   $id = $_GET['id'];
  
    ?>

    <!-- to update data -->
    <?php
$myid = $_GET['id'];


?>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Candi.ai</title>
    <!-- Favicon icon -->
    <link
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    />
    <link
      href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap.min.css"
    />
    <link
      href="https://cdn.datatables.net/fixedheader/3.2.0/css/fixedHeader.bootstrap.min.css"
    />
    <link
      href="https://cdn.datatables.net/fixedheader/3.2.0/css/fixedHeader.bootstrap.min.css"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="images/Candi-AI-06.png"
    />
    <link
      href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css"
      rel="stylesheet"
    />
    <link
      href="vendor/lightgallery/css/lightgallery.min.css"
      rel="stylesheet"
    />
    <link href="css/style.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;family=Roboto:wght@100;300;400;500;700;900&amp;display=swap"
      rel="stylesheet"
    />
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
      <div class="nav-header">
        <a href="index.html" class="brand-logo">
          <img
            src="images/Candi-AI-06.png"
            style="width"
            ="64px"
            height="64px"
          />

          <img
            src="images/Candi-AI-08.png"
            class="brand-title"
            fill-rule="evenodd"
          />
        </a>
        <div class="nav-control">
          <div class="hamburger">
            <span class="line"></span><span class="line"></span
            ><span class="line"></span>
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
                <div class="dashboard_bar">Manage Jobs</div>
              </div>
              <ul class="navbar-nav header-right">
                <li class="nav-item dropdown header-profile">
                  <a
                    class="nav-link"
                    href="javascript:void(0)"
                    role="button"
                    data-toggle="dropdown"
                  >
                    <div class="header-info">
                      <span class="text-black"
                        ><strong>David Heree</strong></span
                      >
                      <p class="fs-12 mb-0">Super Admin</p>
                    </div>
                    <img src="images/profile/17.jpg" width="20" alt="" />
                  </a>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a href="app-profile.html" class="dropdown-item ai-icon">
                      <svg
                        id="icon-user1"
                        xmlns="http://www.w3.org/2000/svg"
                        class="text-primary"
                        width="18"
                        height="18"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      >
                        <path
                          d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"
                        ></path>
                        <circle cx="12" cy="7" r="4"></circle>
                      </svg>
                      <span class="ml-2">Profile </span>
                    </a>

                    <a href="page-login.php" class="dropdown-item ai-icon">
                      <svg
                        id="icon-logout"
                        xmlns="http://www.w3.org/2000/svg"
                        class="text-danger"
                        width="18"
                        height="18"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      >
                        <path
                          d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"
                        ></path>
                        <polyline points="16 17 21 12 16 7"></polyline>
                        <line x1="21" y1="12" x2="9" y2="12"></line>
                      </svg>
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
            <li>
              <a class="ai-icon" href="index.php" aria-expanded="false">
                <i class="fa fa-bars" aria-hidden="true"></i>
                <!-- <i class="flaticon-381-notepad"></i> -->
                <span class="nav-text">Dashboard</span>
              </a>
            </li>
            <!--<li>-->
            <!--  <a class="ai-icon" href="requirment.html" aria-expanded="false">-->
            <!--    <i class="fa fa-television" aria-hidden="true"></i>-->
               
            <!--    <span class="nav-text">Requirment</span>-->
            <!--  </a>-->
            <!--</li>-->
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
                <li><a href="requirement.php">Manual</a></li>
                <li>
                    <a href="https://main.solicitous.cloud/portal/chat/">Quick</a>
                    <!--<a href="Https://chatbot.py.solicitous.cloud">Quick</a>--></li>
              </ul>
            </li>

            <li>
              <a class="ai-icon" href="candidate-front.php" aria-expanded="false">
                <i class="fa fa-user" aria-hidden="true"></i>
                <!-- <i class="flaticon-381-notepad"></i> -->
                <span class="nav-text">Candidates</span>
              </a>
            </li>

            <li>
              <a class="ai-icon" href="manage_job.php" aria-expanded="false">
                <i class="fa fa-television" aria-hidden="true"></i>
                <!-- <i class="flaticon-381-notepad"></i> -->
                <span class="nav-text">Manage Jobs</span>
              </a>
            </li>

            <!--<li>-->
            <!--  <a-->
            <!--    class="has-arrow ai-icon"-->
            <!--    href="javascript:void()"-->
            <!--    aria-expanded="false"-->
            <!--  >-->
            <!--    <i class="fa fa-calendar-o" aria-hidden="true"></i>-->

            <!--    <span class="nav-text">Reports</span>-->
            <!--  </a>-->

            <!--  <ul aria-expanded="false">-->
            <!--    <li><a href="table.html">Report-1</a></li>-->
            <!--    <li><a href="rep11.html">Report-2</a></li>-->
            <!--  </ul>-->
            <!--</li>-->
            	<li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
						<i class="fa fa-calendar-o" aria-hidden="true"></i>
					
						<span class="nav-text">Reports</span>
					</a>
					
							<ul aria-expanded="false">
								<li><a href="table.php">Report-1</a></li>
								<li><a href="rep11.php">Report-2</a></li>
								
							</ul>
				</li>

            <li>
              <a href="email-parser.php" class="ai-icon" aria-expanded="false">
                <!-- <i class="flaticon-381-settings-2"></i> -->
                <i class="fa fa-search" aria-hidden="true"></i>
                <span class="nav-text">Email Parser</span>
              </a>
            </li>
            <li>
              <a class="ai-icon" href="aadd_user.php" aria-expanded="false">
                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                <span class="nav-text">Add User</span>
              </a>
            </li>
            <li>
              <a class="ai-icon" href="page-login.php" aria-expanded="false">
                <i class="fa fa-sign-in" aria-hidden="true"></i>

                <span class="nav-text">Logout </span>
              </a>
            </li>

            <!-- <li><a class="ai-icon" href="page-login.html" aria-expanded="false">
						<i class="fa fa-sign-in" aria-hidden="true"></i>
					
						<span class="nav-text">Login </span>
					</a>
					</li>
					<li><a class="ai-icon" href="page-register.html" aria-expanded="false">
						<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
						<span class="nav-text">Register</span>
					</a>
					</li> -->
          </ul>

          <div class="copyright">
            <p><strong> © copyright Solicitous.All Right Reserved</strong></p>
            <p>
              <a href="http://solicitousbusiness.com/"
                >Powered with
                <i class="fa fa-heart" style="color" ="red"></i> By</a
              ><a href="http://solicitousbusiness.com/"> Solicitous</a>
            </p>
          </div>
        </div>
      </div>
      <!--**********************************
            Sidebar end
        ***********************************-->
      <!--**********************************
            Content body start
        ***********************************-->
      
      <div class="content-body">
        <div class="container-fluid">
          <!-- -----login---- -->
          <!-- <div class="col-xl-8"> -->
          <div class="col-xl-12 col-xxl-8 col-lg-8">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Add Documents</h4>
              </div>
              <form action="" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="user_id" value="<?php echo $_GET['id'] ?>">
              <div class="card-body">
                <div class="form-group">
                  <label class="mb-1 text-orange"
                    ><strong>Upload Doc</strong></label
                  >
                  <input type="file" name="file">
                </div>
                

                <div class="text-center">
                  <button
                    type="submit" name="submit"
                    class="btn bg-success text-white btn-block"
                  >
                    Upload
                  </button>
                </div>
               <!-- <div class="form-row d-flex justify-content-between mt-4 mb-2">
                  <div class="form-group">
                    <a class="text-orange" href="forgrt-pass.html"
                      >Change Password</a
                    >
                  </div>
                </div>-->
              </div>
            </form>
            </div>
          </div>
          <!-- ---- end login------ -->
          <?php

$statusMsg = '';

// File upload path
$targetDir = "doc/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            // $insert = $db->query("INSERT into images (file_name, uploaded_on) VALUES ('".$fileName."', NOW())");
            $query = "UPDATE add_user SET docs='$fileName' WHERE id=".$_GET['id'];
            // echo $query; die;
            $insert = mysqli_query($conn,$query);
            if($insert){
                
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
                header("Location: add_user.php");
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = $query;
}

// Display status message
echo $statusMsg;
?>
          <!-- row -->

          
                      <!-- -------my post------ -->

                      
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
            Footer start
        ***********************************-->
      <div class="footer">
        <div class="copyright">
          <p>
            <a href="http://solicitousbusiness.com/"
              >Powered with <i class="fa fa-heart" style="color: red"></i> By</a
            ><a href="http://solicitousbusiness.com/"> Solicitous</a>
          </p>
        </div>
      </div>
      <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--removeIf(production)-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
    <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="vendor/lightgallery/js/lightgallery-all.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/deznav-init.js"></script>

    <script>
      $("#lightgallery").lightGallery({
        thumbnail: true,
      });
    </script>

    <script>
      $(document).ready(function () {
        // inspired by http://jsfiddle.net/arunpjohny/564Lxosz/1/
        $(".table-responsive-stack").each(function (i) {
          var id = $(this).attr("id");
          //alert(id);
          $(this)
            .find("th")
            .each(function (i) {
              $("#" + id + " td:nth-child(" + (i + 1) + ")").prepend(
                '<span class="table-responsive-stack-thead">' +
                  $(this).text() +
                  ":</span> "
              );
              $(".table-responsive-stack-thead").hide();
            });
        });

        $(".table-responsive-stack").each(function () {
          var thCount = $(this).find("th").length;
          var rowGrow = 100 / thCount + "%";
          //console.log(rowGrow);
          $(this).find("th, td").css("flex-basis", rowGrow);
        });

        function flexTable() {
          if ($(window).width() < 768) {
            $(".table-responsive-stack").each(function (i) {
              $(this).find(".table-responsive-stack-thead").show();
              $(this).find("thead").hide();
            });

            // window is less than 768px
          } else {
            $(".table-responsive-stack").each(function (i) {
              $(this).find(".table-responsive-stack-thead").hide();
              $(this).find("thead").show();
            });
          }
          // flextable
        }

        flexTable();

        window.onresize = function (event) {
          flexTable();
        };

        // document ready
      });
    </script>
  </body>
</html>

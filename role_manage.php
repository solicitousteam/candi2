<?php
include 'connect.php';
include 'sidebar.php';

$employee = "SELECT * FROM add_user";
$county_qry = mysqli_query($conn, $employee);
 ?>u

<!DOCTYPE html>
<html lang="en">
  <head>
    <script>
      function getddl()
      {
        document.getElementById('lblmess').innerHTML=(formid.employee[formid.employee.selectedIndex].text)
      }
    </script>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Candi.ai</title>
    <!-- Favicon icon -->
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="images/Candi-AI-06.png"
    />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="vendor/chartist/css/chartist.min.css" />
    <link
      href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css"
      rel="stylesheet"
    />
    <link
      href="vendor/datatables/css/jquery.dataTables.min.css"
      rel="stylesheet"
    />
    <link href="css/style.css" rel="stylesheet" />
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
          <img src="images/Candi-AI-06.png" style="width = 64" height="64px" />

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
                <div class="dashboard_bar">Application</div>
              </div>
              <ul class="navbar-nav header-right">
                <li class="nav-item">
                  <!-- <div class="input-group search-area d-xl-inline-flex d-none">
                  <input type="text" class="form-control" placeholder="Search here...">
                  <div class="input-group-append">
                    <span class="input-group-text"><a href="javascript:void(0)"><i class="fa fa-search" aria-hidden="true"></i></a></span>
                  </div>
                </div> -->
                </li>

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
                      <p class="fs-12 mb-0">Admin</p>
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
                    <a href="page-login.html" class="dropdown-item ai-icon">
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
              <!-- <a class="ai-icon" href="index.php" aria-expanded="false"> -->
                <!-- <i class="fa fa-bars" aria-hidden="true"></i> -->
                <!-- <i class="flaticon-381-notepad"></i> -->
                <!-- <span class="nav-text">Dashboard</span> -->
                <!-- <p>U Choose</p> -->

<?php
  if(isset($_POST['submit'])) {

    if (!empty($_POST['manage'])) {

      foreach ($_POST['manage'] as $checked) {
        echo "<a class='ai-icon' href='manage_job.php' aria-hidden='true'><i class='fa fa-briefcase' aria-expanded='false'></i>$checked</a>";

     
      }
    }
  }


 ?>
              <!-- </a> -->
            </li>
            <li>
              <!-- <a class="ai-icon" href="requirement.php" aria-expanded="false">
                <i class="fa fa-television" aria-hidden="true"></i> -->
                <!-- <i class="flaticon-381-notepad"></i> -->
                <!-- <span class="nav-text">Requirment</span> -->
<?php
  if(isset($_POST['submit'])) {

    if (!empty($_POST['requirment'])) {

      foreach ($_POST['requirment'] as $checked) {
        echo "<a href='requirement.php'><i class='fa fa-television' aria-hidden='true'></i>$checked</a>";
     
      }
    }
  }


 ?>
              </a>
            </li>

            <li>
              <!-- <a class="ai-icon" href="candidate_f.php" aria-expanded="false">
                <i class="fa fa-user" aria-hidden="true"></i> -->
                <!-- <i class="flaticon-381-notepad"></i> -->
                <!-- <span class="nav-text">Candidates</span> -->
                <?php
  if(isset($_POST['submit'])) {

    if (!empty($_POST['candidates'])) {

      foreach ($_POST['candidates'] as $checked) {
        echo "<a href='candidate-front.php'><i class='fa fa-user' aria-hidden='true'></i>$checked</a>";
     
      }
    }
  }


 ?>
              </a>
            </li>

            <li>
              <!-- <a class="ai-icon" href="manage_job.php" aria-expanded="false">
                <i class="fa fa-television" aria-hidden="true"></i> -->
                <!-- <i class="flaticon-381-notepad"></i> -->
                <!-- <span class="nav-text">Manage Jobs</span> -->
                <?php
  if(isset($_POST['submit'])) {

    if (!empty($_POST['reports'])) {

      foreach ($_POST['reports'] as $checked) {
        echo "<a href='add_user.php'><i class='fa fa-calendar-o' aria-hidden='true'></i>$checked</a>";
     
      }
    }
  }


 ?>
              </a>
            </li>

            <li>
              <!-- <a
                class="has-arrow ai-icon"
                href="javascript:void()"
                aria-expanded="false"
              >
                <i class="fa fa-calendar-o" aria-hidden="true"></i>

                <span class="nav-text">Reports</span>
              </a>

              <ul aria-expanded="false">
                <li><a href="table.html">Report-1</a></li>
                <li><a href="rep11.html">Report-2</a></li>
              </ul> -->
              <?php
  if(isset($_POST['submit'])) {

    if (!empty($_POST['email_parser'])) {

      foreach ($_POST['email_parser'] as $checked) {
        echo "<a href='technologies.php'><i class='fa fa-search' aria-hidden='true'></i>$checked</a>";
     
      }
    }
  }


 ?>
            </li>

            <li>
              <!-- <a href="technologies.html" class="ai-icon" aria-expanded="false"> -->
                <!-- <i class="flaticon-381-settings-2"></i> -->
<!--                 <i class="fa fa-search" aria-hidden="true"></i>
                <span class="nav-text">Email Parser</span> -->
                <!-- <?php
  if(isset($_POST['submit'])) {

    if (!empty($_POST['requirment'])) {

      foreach ($_POST['requirment'] as $checked) {
        echo "<a href='add_user.php'><i class='fa fa-bars' aria-hidden='true'></i>$checked</a>";
     
      }
    }
  }


 ?>
 -->              </a>
            </li>
            <li>
              <!-- <a class="ai-icon" href="add?_user.php" aria-expanded="false">
                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                <span class="nav-text">Add User</span>
              </a> -->
            </li>
            <li>
              <!-- <a class="ai-icon" href="page-login.html" aria-expanded="false">
                <i class="fa fa-sign-in" aria-hidden="true"></i>

                <span class="nav-text">Logout </span>
              </a> -->
            </li>
            <!-- <li><a class="ai-icon" href="page-register.html" aria-expanded="false">
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
                <i class="fa fa-heart" style="color = red"></i> By</a
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
        <!-- container starts -->
        <div class="container-fluid">
          <!-- <div class="page-titles">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="javascript:void(0)">Application</a>
              </li>
              <li class="breadcrumb-item active">
                <a href="javascript:void(0)">Candidates</a>
              </li>
            </ol>
          </div> -->
          <!-- row -->
          <div class="col-lg-12">
            <div class="card">
              <!-- <div class="card-header">
                <h4 class="card-title">Role management</h4>
              </div> -->
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-responsive-md">
                    <thead>
                      <tr>
                        <th><h4>User</h4></th>

                        <th>
                          User List
                          
                     <form name="formid">
                    <select class="form-select" id="employee" name="employee" onchange="getddl()">
                        <option selected disabled>Select User</option>
                        <?php while ($row = mysqli_fetch_assoc($county_qry)) : ?>
                            <option value="<?php echo $row['id']; ?>"> <?php echo $row['name']; ?> </option>
                        <?php endwhile; ?>
                    </select>
                  </form>

                        </th>
                      </tr>
                      <tr>
                        <th><h4><label id="lblmess"></label></h4></th>
                        <div class="card-header">
                          <h4 class="card-title">Role management</h4>
                        </div>
                      </tr>
                    </thead>
                    <tbody>
                      <form action="role_manage.php" method="POST">
                      <tr>
                        <td>Manage job</td>
                        <td>
                          <div
                            class="custom-control custom-checkbox checkbox-success check-lg mr-3"
                          >
                            <!-- <input
                              type="checkbox"
                              class="custom-control-input"
                              id="customCheckBox1"
                              required=""
                            /> -->
                            <input type="checkbox" name="checkArr[]" value="Manage job" >
                          <!-- <a href="role.php">Manage job</a> -->
                            <!-- <label
                              class="custom-control-label"
                              for="customCheckBox1"
                            ></label> -->
                          </div>
                        </td>

                        
                      </tr>
                      <tr>
                        <td>Requirment</td>
                        <td>
                          <div
                            class="custom-control custom-checkbox checkbox-success check-lg mr-3"
                          >
                          <input type="checkbox" name="checkArr[]" value="Requirment">
<!--                             <input
                              type="checkbox"
                              class="custom-control-input"
                              id="customCheckBox2"
                              required=""
                            />
                            <label
                              class="custom-control-label"
                              for="customCheckBox2"
                            ></label> -->
                          </div>
                        </td>

                        
                      </tr>
                      <tr>
                        <td>Candidates</td>
                        <td>
                          <div
                            class="custom-control custom-checkbox checkbox-success check-lg mr-3"
                          >
                          <input type="checkbox" name="checkArr[]" value="Candidates">
                            <!-- <input
                              type="checkbox"
                              class="custom-control-input"
                              id="customCheckBox3"
                              required=""
                            />
                            <label
                              class="custom-control-label"
                              for="customCheckBox3"
                            ></label> -->
                          </div>
                        </td>
                        
                      </tr>
                      <tr>
                        <td>Reports</td>
                        <td>
                          <div
                            class="custom-control custom-checkbox checkbox-success check-lg mr-3"
                          >
                          <input type="checkbox" name="checkArr[]" value="Reports">
                            <!-- <input
                              type="checkbox"
                              class="custom-control-input"
                              id="customCheckBox5"
                              required=""
                            />
                            <label
                              class="custom-control-label"
                              for="customCheckBox5"
                            ></label> -->
                          </div>
                        </td>

                      </tr>
                      <tr>

                        <td>Email Parser</td>
                        <td>
                          <div
                            class="custom-control custom-checkbox checkbox-success check-lg mr-3"
                          >
                          <input type="checkbox" name="checkArr[]" value="Email Parser">
                            <!-- <input
                              type="checkbox"
                              class="custom-control-input"
                              id="customCheckBox4"
                              required=""
                            />
                            <label
                              class="custom-control-label"
                              for="customCheckBox4"
                            ></label> -->
                          </div>
                        </td>
                        
                      </tr>

                        

                      <tr>
                        <td>
                          <div>

                          <input type="submit" name="submit" value="Assign" class="btn btn-primary rounded">


                        </div>
                          <!-- <button type="submit" class="btn btn-primary rounded">
                            Assign
                          </button> -->
                        </td>
                      </tr>
                    </form>
 
                    </tbody>
                  </table>

                   

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

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
    <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="vendor/chart.js/Chart.bundle.min.js"></script>
    <!-- Datatable -->
    <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/deznav-init.js"></script>

    <script>
      (function ($) {
        var table = $("#example5").DataTable({
          searching: false,
          paging: true,
          select: false,
          //info: false,
          lengthChange: false,
        });
        $("#example tbody").on("click", "tr", function () {
          var data = table.row(this).data();
        });
      })(jQuery);
    </script>
  </body>
</html>

 <?php 
   include 'auth_session.php';
   include 'connect.php';
   include 'header.html';
   
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
        <div class="container-fluid">
          <div class="page-titles">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="javascript:void(0)">Candidates</a>
              </li>
              <li class="breadcrumb-item active">
                <a href="javascript:void(0)">Data pool</a>
              </li>
            </ol>
          </div>
          <!-- row -->

          <div class="row">
            <div class="col-xl-12">
              <div class="card">
                <div class="card-body">
                  <div class="profile-tab">
                    <div class="custom-tab-1">
                      <!-- -------my post------ -->

                      <div class="col-xl-12">
                        <table
                          class="table table-bordered table-striped"
                          id="tableOne"
                        >
                          <thead class="thead-dark">
                            <tr>
                              <th>Sr.No</th>
                              <th>Name</th>
                              <th>Phone No</th>
                              <th>Email</th>
                              <th>Skills</th>
                                <th>View Candidate</th>
                            </tr>
                          </thead>
                          <tbody>
            <?php 
            if(isset($_GET['skills']))
            {
                $skills=$_GET['skills'];
                $search_query.="and FIND_IN_SET('".$skills."',candidate_skills) ";
                 
            }
            
            if(isset($_GET['exp']))
            {
                $exp=$_GET['exp'];
                $search_query.="and candidate_workexp like '$exp%' ";
                 
            }
            
            if(isset($_GET['job_title']))
            {
                $job_title=$_GET['job_title'];
                $search_query.="and candidate_jobtitle like '%$job_title%' ";
                 
            }
            
            if(isset($_GET['shift']))
            {
                $shift=$_GET['shift'];
                $search_query.="and candidate_employ_title like '%$shift%' ";
                 
            }
            
            if(isset($_GET['exp']))
            {
                $exp=$_GET['exp'];
                $search_query.="and candidate_workexp like '$exp%' ";
                 
            }
            
            if(isset($_GET['location']))
            {
                $location=$_GET['location'];
                $search_query.="and candidate_location like '%$location%' ";
                 
            }
   $candididate=mysqli_query($conn,"SELECT * FROM candidate_profile left join candidate_register on  candidate_profile.candidate_id=candidate_register.candidate_id  WHERE 1=1 $search_query");
   $i=0;
   while( $row=mysqli_fetch_array($candididate))
  { $i++; ?>
                            <tr>
                              <td><?php echo $i; ?></td>
                              <td><?php echo $row["candidate_fname"]; echo $row["candidate_lname"]; ?></td>
                              <td><?php echo $row["candidate_phoneno"] ?></td>

                              <td><?php echo $row["candidate_email"] ?></td>
                              <td><?php echo $row["candidate_skills"] ?></td>
                              <td><a class="btn btn-primary" href="view-m.php?id=<?php echo $row["candidate_id"] ?>">View Candidate</a></td>
                                                              
                            
                            </tr>
                            <?php } ?>
                          </tbody>
                        </table>
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
            Footer start-->
            <?php
            include 'footer.html';
            ?>
    
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

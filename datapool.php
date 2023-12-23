<?php
include 'auth_session.php';
include 'connect.php';     
include 'header.html'; 


if( isset( $_SESSION['p_id'] ) && $_SESSION['p_id'] !='') {

$pid =   $_SESSION['p_id'];
$queryid="select admin_email from admin where  admin_id = '$pid'";
$resid = mysqli_query($conn, $queryid); 
$adminid = mysqli_fetch_assoc($resid);
$_SESSION['email']=$adminid['admin_email']; 

}
                                    









	$queryi="Select admin_id from admin where admin_email='".$_SESSION['email']."'";
			$resulti=mysqli_query($conn,$queryi);
			$arrayi=mysqli_fetch_array($resulti);
			$adminid = $arrayi[0];
$candidate_id=$adminid;

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
                  <label class="input-group-addon"><strong>Search : </strong></label>
                  
                  
                   <form name="frm" id="frm" action="" method="GET">
                  <input type="text" name="search_text" id="search_text" placeholder="Search by Candidate Details" class="form-control" />
                  </form
                  
                <div class="card-body">
                  <div class="profile-tab">
                    <div class="custom-tab-1">
                      <!-- -------my post------ -->

                      <div class="col-xl-12">
                        <table
                          class="table table-bordered table-striped "
                          id="tableOne"
                        >
                          <thead class="thead-dark">
                            <tr>
                              <th>Sr.No</th>
                              <th>Name</th>
                              <th>Phone No</th>
                              <th>Email</th>
                              <th>Skills</th>
                            
                            </tr>
                          </thead>
                          <tbody>
                              <?php 
                              
                              
                              $searchAll='';
                               $searchAll2='';
                                        if(   isset($_GET['search_text']) ){
                                            
                                            $txtVal = $_GET['search_text'];
                                            
                                            $searchAll = " AND (candidate_register.candidate_fname LIKE '%$txtVal%' OR candidate_register.candidate_lname LIKE '%$txtVal%' OR candidate_register.candidate_email LIKE '%$txtVal%')";
                                            $searchAll2 = " AND (candidate_profile.candidate_phoneno LIKE '%$searchAll2%' OR candidate_profile.candidate_skills LIKE '%$txtVal%')";
                                        }
                              
                              
                              
                             // echo "SELECT * FROM `candidate_register`  WHERE 1=1  $searchAll";
                              
                              //echo "SELECT * FROM `candidate_register` as cr inner join job_applications ja on ja.candidate_id = cr.candidate_id inner join job_details jd on jd.job_id=ja.job_id  WHERE 1=1 AND jd.admin_id=$candidate_id $searchAll ";
                                $result = mysqli_query($conn, "SELECT * FROM `candidate_register` as cr inner join job_applications ja on ja.candidate_id = cr.candidate_id inner join job_details jd on jd.job_id=ja.job_id  WHERE 1=1 AND jd.admin_id=$candidate_id $searchAll ");
                                $i = 1;
                                while ($row = mysqli_fetch_array($result))
                                {   
                                    $result1 = mysqli_query($conn, "SELECT * FROM `candidate_profile` WHERE candidate_id='".$row['candidate_id']."'    $searchAll2 ");  
                                    $row1 = mysqli_fetch_array($result1);
                                ?>  
                            <tr>
                              <td><?php echo $i ?></td>
                              <td><?php echo $row["candidate_fname"]; echo $row["candidate_lname"]; ?></td>
                              <td><?php echo $row1["candidate_phoneno"] ?></td>

                              <td><?php echo $row["candidate_email"] ?></td>
                              <td><?php echo $row1["candidate_skills"] ?></td>
                                                                 
                            
                            </tr>
                            <?php $i++; } ?>
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

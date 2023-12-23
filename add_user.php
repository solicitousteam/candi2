<?php 
include 'auth_session.php';
include('connect.php');
include('header.html');
include('sidebar.php');?>
<style>
    table {
  border-collapse: collapse;
  width: 100%;
}

td {
  height: 50px;
  vertical-align: bottom;
  word-wrap:break-word;
}
</style>

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
                <h4 class="card-title">Add New User</h4>
              </div>
              <form action="add_user_c.php" method="POST">
              <div class="card-body">
                <div class="form-group">
                  <label class="mb-1 text-orange"
                    ><strong>Name</strong></label
                  >
                  <input
                  name="name"
                    type="text"
                    class="form-control"
                    placeholder="Your Name"
                    required
                  />
                </div>
                <div class="form-group">
                  <label class="mb-1 text-orange"><strong>Email</strong></label>
                  <input
                  name="email"
                    type="email"
                    class="form-control"
                    placeholder="Your Email"
                 
                    required
                     box-sizing: border-box;
                  />
                </div>
                <div class="form-group">
                  <label class="mb-1 text-orange"
                    ><strong>Password</strong></label
                  >
                  <input
                  name="pass"
                    type="password"
                    class="form-control"
                    placeholder="Password"
                    required
                  />
                </div>
                <div class="form-group">
                  <label class="mb-1 text-orange"
                    ><strong>confirm password</strong></label
                  >
                  <input
                  name="cpass"
                    type="password"
                    class="form-control"
                    placeholder=" Conform Password"
                    required
                  />
                </div>

                <div class="text-center">
                    <input type="submit" class="btn bg-success text-white btn-block" value="Create">
                 
                </div>
                <!--<div class="form-row d-flex justify-content-between mt-4 mb-2">-->
                <!--  <div class="form-group">-->
                <!--    <a class="text-orange" href="forgrt-pass.html"-->
                <!--      >Change Password</a-->
                <!--    >-->
                <!--  </div>-->
                <!--</div>-->
              </div>
            </form>
            </div>
          </div>
          <!-- ---- end login------ -->
          <div class="page-titles">
            <ol class="breadcrumb">
              <!-- <li class="breadcrumb-item">
                <a href="javascript:void(0)">Manage Jobs</a>
              </li> -->
              <li class="breadcrumb-item active">
                <a href="javascript:void(0)">User Listings</a>
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
     
        <th>Name</th>
        <th>Email</th>
        <th>Action</th>
        <th>Assign Role</th>
         <th>Permission</th>
        
     </tr>
                          </thead>
                          <tbody class="thead-dark">
                            <?php   
include('connect.php');
error_reporting(0);
$pid  = $_SESSION['admin_id'];
$query = "select a.*,rp.* from admin a left join role_permission rp on rp.user_id = a.admin_id where a.p_id = $pid";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);


// echo $result['id']."".$result['name']."".$result['email']."".$result['pass']."".$result['cpass'];
// echo $total; 
if ($total !=0)
 {
  while ($result=mysqli_fetch_assoc($data))
   {
       
     $permionss =  unserialize($result['per_menu']);
     
     $allmenupermission = '';
     if( in_array('1',$permionss) ){
         $allmenupermission.='Manage job';
     }
     

     
     if( in_array('2',$permionss) ){
         $allmenupermission.='Requirment, ';
     }if( in_array('3',$permionss) ){
         $allmenupermission.='Candidates, ';
     }if( in_array('4',$permionss) ){
         $allmenupermission.='Reports, ';
     }if( in_array('5',$permionss) ){
         $allmenupermission.='Email Parser, ';
     }
     
    
  echo "
     <tr>
          <td>".$result['admin_fname']."</td>
     <td>".$result['admin_email']."</td>
     
     <td><a href='add_user_edit.php?id=$result[admin_id]' class='btn btn-success shadow btn-xs sharp mr-1'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a>
     <a href='add_user_view.php?id=$result[admin_id]' class='btn btn-primary shadow btn-xs sharp mr-1'><i class='fa fa-eye' aria-hidden='true'></i></a>
         
     <a href='add_user_delete.php?id=$result[admin_id]' class='btn btn-danger shadow btn-xs sharp mr-1'><i class='fa fa-trash'></i></a>
     <a href='add_user_doc.php?id=$result[admin_id]' class='btn btn-success shadow btn-xs sharp mr-1 rounded-xs'><i class='fa fa-folder'></i></a>
     </td>
     <td>
     <a href='role.php?id=$result[admin_id]' class='btn btn-xs btn-primary rounded'>Assign Role</a>
     </td>
     
     <td>".$allmenupermission."</td>
     
     </tr>
     "; 
  }
 } 
else
{
  echo "No records found";
}




?>



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

<?php
session_start();
include 'connect.php';
include('header.html');
include 'sidebar.php';

$pid  = $_SESSION['admin_id'];

$userId = $_GET['id'];



 $query1 = "select rp.* from   role_permission rp  where rp.user_id = $userId"; 
 $data2 = mysqli_query($conn,$query1);



$employee = "SELECT * FROM admin where p_id=$pid";
$county_qry = mysqli_query($conn, $employee);
 ?>


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
<script>
      function getddl()
      {
          
         // alert( formid.employee[formid.employee.selectedIndex].value  );
          document.getElementById('userId').value =(formid.employee[formid.employee.selectedIndex].value)
        document.getElementById('lblmess').innerHTML=(formid.employee[formid.employee.selectedIndex].text)
      }
    </script>
                        <th>
                          <label>User List</label>
                          

                     <!-- <label id="lblmess"></label>  -->
<form name="formid">
                    <select name="ddlselect" class="form-select" id="employee" name="employee" onchange="getddl()">
                        <option selected disabled>Select User</option>
                        <?php while ($row = mysqli_fetch_assoc($county_qry)) : ?>
                            <option value="<?php echo $row['admin_id']; ?>"      <?php   if( $userId== $row['admin_id']){ echo 'selected'; } ?>        > <?php echo $row['admin_fname']; ?> </option>
                        <?php endwhile; ?>
                    </select>
                  </form>
                  <!-- <label id="lblmess"></label> -->

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
                                            <!-- <p>U Choose</p>
<?php
  if(isset($_POST['submit'])) {
    if (!empty($_POST['checkArr'])) {
      foreach ($_POST['checkArr'] as $checked) {
        echo $checked. "<br>";
     
      }
    }
  }
 ?> -->
 <form action="manage_role.php" method="POST">
     
     
     
     <?php
     
     
     if (  mysqli_num_rows($data2) > 0)
                     {
                      while ($result=mysqli_fetch_assoc($data2))
                       {
                           
                         $permionss =  unserialize($result['per_menu']);
                         
                        
                        // print_r( $permionss );
                         
                         $mj = '';
                         if( in_array('1',$permionss) ){
                             
                            
                
                             $mj='checked';
                         }
                         
                    
                          $re = '';
                         if( in_array('2',$permionss) ){
                             
                            
                             $re='checked';
                         }
                          $cs = '';
                         
                         if( in_array('3',$permionss) ){
                             
                            
                             $cs='checked';
                         }
                          $rs = '';
                         
                         if( in_array('4',$permionss) ){
                             
                            
                             $rs='checked';
                         }
                          $ep = '';
                         if( in_array('5',$permionss) ){
                             
                            
                             $ep='checked';
                         }
                       }
                     }
     
     
     
     
     
     
     
     ?>
     
     
     
     
     
     
     
     
     
                      <tr>
                        <td>Manage job</td>
                        <td>
                          <div
                            class="custom-control custom-checkbox checkbox-success check-lg mr-3"
                          >
                            <!-- <input
                              type="checkbox"
                              class="custom-control-input"
                              id="customCheckBox1"   userId
                              required=""
                            /> -->
                            
                            <input type="hidden" name="userId" id="userId" value="<?php echo $userId; ?>" >
                            <input type="checkbox" name="roleperm[]" value="1" <?php echo $mj; ?>>
                            <!-- <label
                              class="custom-control-label"
                              for="customCheckBox1"
                            ></label> -->
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
                          <input type="checkbox" name="roleperm[]" value="2" <?php echo $re; ?>>
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
                          <input type="checkbox" name="roleperm[]" value="3" <?php echo $cs; ?>>
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
                          <input type="checkbox" name="roleperm[]" value="4" <?php echo $rs; ?>>
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
                          <input type="checkbox" name="roleperm[]" value="5" <?php echo $ep; ?>>
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

                   <!-- <form action="" method="POST">
                        <div>
                          Manage job
                          <input type="checkbox" name="checkArr[]" value="Manage job">
                        </div>
                        <div>
                          Requirment
                          <input type="checkbox" name="checkArr[]" value="Requirment">
                        </div>
                        <div>
                          Candidates
                          <input type="checkbox" name="checkArr[]" value="Candidates">
                        </div>
                        <div>
                          Reports
                          <input type="checkbox" name="checkArr[]" value="Reports">
                        </div>
                        <div>
                          Email Parser
                          <input type="checkbox" name="checkArr[]" value="Email Parser">
                        </div>
                        <div>
                          <input type="submit" name="submit" value="Submit">
                        </div> -->
                      </form>

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









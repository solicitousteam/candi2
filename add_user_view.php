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
        <div class="container-fluid">
          <!-- -----login---- -->
          <!-- <div class="col-xl-8"> -->
          
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">User Details</h4>
              </div>
             
              
                        <table
                          class="table table-bordered table-striped table-responsive-stack"
                          id="tableOne"
                        >
                          <thead class="thead-dark">
                            <tr>
      <!-- <th>Id</th> -->
        <th>Name</th>
        <th>Email</th>
        <th>Passwor</th>
        <th>Conform Password</th>
        <th>Action</th>
     </tr>
                          </thead>
                          <tbody class="thead-dark">
                            <?php   
include('connect.php');
error_reporting(0);
 $id = $_GET['id'];
$query = "select * from admin WHERE  admin_id=$id"; 
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);


 //echo $result['id']."".$result['name']."".$result['email']."".$result['pass']."".$result['cpass'];
// echo $total; 
if ($total !=0)
 {
  while ($result=mysqli_fetch_assoc($data))
   {
  echo "
     <tr>
          <td>".$result['admin_fname']."</td>
     <td>".$result['admin_email']."</td>
     <td></td>
     <td></td>
     
     <td><a href='add_user.php?id=$result[admin_id]&fn=$result[name]&em=$result[email]&pass=$result[pass]&cpass=$result[cpass]' class='btn btn-success shadow btn-xs sharp mr-1'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a>
    
     <a href='add_user_delete.php?id=$result[admin_id]' class='btn btn-danger shadow btn-xs sharp mr-1'><i class='fa fa-trash'></i></a></td>
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
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
      <!--**********************************
            Content body end
        ***********************************-->

      <!--**********************************
            Footer start
        ***********************************-->
        <?php include 'footer.html'; ?>
  </body>
</html>

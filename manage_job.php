<?php 
include 'auth_session.php';
include 'header.html'; ?></head>
<body>
<?php include 'sidebar.php'; 
include("connect.php");




?>
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
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Manage Jobs</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">My Job Listings</a></li>
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
														    
														   <?php
														   
														   
                                                                if( isset(  $_POST['submit2'] ) ){
                                                                    
                                                                    $job_id = $_POST['job_id'];
                                                                    
                                                                  $sqlUpdate = "update job_details  set job_status ='Expired' WHERE  job_id=$job_id";
 
                                                                    mysqli_query($conn, $sqlUpdate);
                                                                    
                                                                    
                                                                }
                                                                
                                                                if( isset(  $_POST['submit2222'] ) ){
                                                                    
                                                                    $job_id = $_POST['job_id'];
                                                                    
                                                                   $sqlUpdate = "update job_details  set job_status ='Active' WHERE  job_id=$job_id";
 
                                                                    mysqli_query($conn, $sqlUpdate);
                                                                    
                                                                    
                                                                }
                                                                
                                                                
                                                                //submit2222
   
														   
														   
														   ?>
														    
														
                                                         
                                                                <table class="table table-bordered table-striped table-responsive-stack" id="tableOne">
                                                                   <thead class="thead-dark">
                                                                      
                                                                        <tr>
                                                                            <th>Title</th>
                                                                            <th>Application</th>
                                                                            <th>Created & Expire Date</th>
                                                                            <th>Status</th>
                                                                            <th>Edit Job</th>
                                                                            <th>Deactivate Job</th>
                                                                            <!-- <th>Description</th>
                                                                            <th>Resume</th> -->
                                                                         
                                                                            <!-- <th>Action</th> -->
                                                                        </tr>
                                                                      
                                                                   </thead>
                                                                   <tbody>
                                                                       <?php
                                                                       
                                                                       

                                                                       
                                                                       
                                                                       
                                                                    if( isset( $_SESSION['p_id'] ) && $_SESSION['p_id'] !='') {
                                                                       
                                                                     $pid =   $_SESSION['p_id'];
                                                                     $queryid="select admin_email from admin where  admin_id = '$pid'";
                                                                     $resid = mysqli_query($conn, $queryid); 
                                                                     $adminid = mysqli_fetch_assoc($resid);
                                                                     $_SESSION['email']=$adminid['admin_email']; 
                                                                      
                                                                      }
                                                                      
                                                                       
                                                                    $currdate=date("Y-m-d");
                                                                    
                                                                    //$i= $_SESSION['jobid'];
                                                                    $k=0;

                                                                    $queryi="Select admin_id from admin where admin_email='".$_SESSION['email']."'";
                                                                    $resulti=mysqli_query($conn,$queryi);
                                                                    $arrayi=mysqli_fetch_array($resulti);
                                                                    $adminid = $arrayi[0];

                                                                    $query1="Select count(job_id) from job_details where admin_id='$adminid'"; 
                                                                    $result1=mysqli_query($conn,$query1);
                                                                    $array1=mysqli_fetch_array($result1);
                                                                    $count = $array1[0];
                                                                    
                                                                    $query5="Select job_id from job_details where admin_id='$adminid'"; 
                                                                    $result5=mysqli_query($conn,$query5);
                                                                    $array5=mysqli_fetch_array($result5);

                                                                    while($k<$count){
                                                                    $query="SELECT * FROM job_details WHERE admin_id='".$adminid."' ORDER BY job_status asc, job_post_date desc"; 
                                                                    $result=mysqli_query($conn,$query);
                                                                    if ($result->num_rows > 0):
                                                                    
                                                                    while($array=mysqli_fetch_assoc($result)){ 

                                                                        $query2="Select count(job_id) from job_applications where job_id='".$array['job_id']."'"; 
                                                                        $result2=mysqli_query($conn,$query2);
                                                                        $array2=mysqli_fetch_array($result2);
                                                                        
                                                                        $query3="Select job_expire_date from job_details where job_id='".$array['job_id']."'"; 
                                                                        $result3=mysqli_query($conn,$query3);
                                                                        $array3=mysqli_fetch_array($result3);
                                                                        $jobdate = $array3[0];
                                    
                                                                        if($currdate>$jobdate){
                                                                            $query3="UPDATE `job_details` SET `job_status`='Expired' WHERE job_id='".$array['job_id']."'";
                                                                            $result3=mysqli_query($conn,$query3);
                                                                        }
                                                                        else{
                                                                            $query3="UPDATE `job_details` SET `job_status`='Active' WHERE job_id='".$array['job_id']."'";
                                                                            $result3=mysqli_query($conn,$query3);    
                                                                        }
                                                                        ?>
                                                                      <tr>
                                                                        <td><?php echo $array["job_title"]; ?> <br><span><i class="fa fa-map-marker" aria-hidden="true"></i><?php echo $array["job_location"]; ?></span></td>
                                                                        <td><?php echo $array2[0]." Application(s)"; ?></td>
                                                                        <td><?php echo "Created at: ".$array["job_post_date"]; ?><br>
                                                                        <?php echo "Expire Date: ".$array["job_expire_date"]; ?></td>
                                                                        
                                                                        <td><?php echo $array["job_status"]; ?></td>
                                                                        <!-- <td>doc</td>
                                                                        <td>1</td> -->
                                                                        <!-- <td>
                                                                            <div class="d-flex">
                                                                                <a href="#" class="btn btn-success shadow btn-xs sharp mr-1"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                                                <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                                            </div>												
                                                                        </td>			 -->
                                                                        <?php
                                                                    // if ($array['job_status'] == "Active") {
                                                                    //     echo "<td><button class='btn btn-primary' name='repost'><a  class='aa' href='javascript:void(0);'>Repost</a></button></td>";
                                                                    // } else
                                                                        echo "<td><button class='btn btn-primary' name='repost'><a class='aa' href='edit_requirement.php?id=" . $array['job_id'] . "'>Edit</a></button></td>";
                                                                         
                                                                         if(   $array["job_status"] == 'Active' ){ ?>
                                                                             
                                                                             
                                                                     <form name="frm_<?php echo $k; ?>" action="" method="post">
                                                                         <input type="hidden" name="job_id" id="job_id" value="<?php echo $array['job_id']; ?>" />
                                                                        <?php  echo "<td><button type='submit2' class='btn btn-primary' name='submit2'>Deactivate</button></td>"; ?>
                                                                    </form>
                                                                         
                                                                         <?php }else {?>
                                                                             
                                                                             
                                                                             
                                                                              <form name="frm2_<?php echo $k; ?>" action="" method="post">
                                                                         <input type="hidden" name="job_id" id="job_id" value="<?php echo $array['job_id']; ?>" />
                                                                             
                                                                            <?php  echo "<td><button type='submit' class='btn btn-primary' name='submit2222'>Activate</button></td>"; ?>
                                                                            
                                                                            </form>
                                                                            
                                                                            
                                                                       <?php   }
                                                                    ?>
                                                                      </tr>
                                                                      <?php 
                                                                    $k++;
                                                                      }
                                                                     
                                                                      endif;
                                                                      
                                                                      

                                                                    }
                                                                      ?>
                                                                      <!-- <tr>
                                                                        <td> Senior Full Stack Engineer <br><span><i class="fa fa-map-marker" aria-hidden="true"></i> London, UK</span></td>
                                                                        <td>3+Applies</td>
                                                                        <td>October 27, 2017<br>
                                                                            April 25, 2011</td>
                                                                        
                                                                        <td>Active</td> -->
                                                                        <!-- <td>doc</td>
                                                                        <td>1</td> -->
                                                                        <!-- <td>
                                                                            <div class="d-flex">
                                                                                <a href="#" class="btn btn-success shadow btn-xs sharp mr-1"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                                                <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                                            </div>												
                                                                        </td>			 -->
                                                                      <!-- </tr>
                                                                      <tr>
                                                                        <td>Sr. Full Stack Engineer<br><span><i class="fa fa-map-marker" aria-hidden="true"></i> London, UK</span></td>
                                                                        <td>3+Applies</td>
                                                                        <td>October 27, 2017<br>
                                                                            April 25, 2011</td>
                                                                        <td>Active</td> -->
                                                                        <!-- <td>doc</td>
                                                                        <td>1</td> -->
                                                                        <!-- <td>
                                                                            <div class="d-flex">
                                                                                <a href="#" class="btn btn-success shadow btn-xs sharp mr-1"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                                                <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                                            </div>												
                                                                        </td>			 -->
                                                                      <!-- </tr>
                                                                      <tr>
                                                                        <td> Senior Full Stack Engineer <br><span><i class="fa fa-map-marker" aria-hidden="true"></i> London, UK </span></td>
                                                                        <td>3+Applies</td>
                                                                        <td>October 27, 2017<br>
                                                                            April 25, 2011</td>
                                                                        
                                                                        <td>Active</td> -->
                                                                        <!-- <td>doc</td>
                                                                        <td>1</td> -->
                                                                        <!-- <td>
                                                                            <div class="d-flex">
                                                                                <a href="#" class="btn btn-success shadow btn-xs sharp mr-1"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                                                <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                                            </div>												
                                                                        </td>			 -->
                                                                      <!-- </tr>
                                                                     <tr>
                                                                        <td> Senior Product Designer<br><span><i class="fa fa-map-marker" aria-hidden="true"></i>  London, UK</span></td>
                                                                        <td>3+Applies</td>
                                                                        <td>October 27, 2017<br>
                                                                            April 25, 2011</td>
                                                                        
                                                                        <td>Active</td> -->
                                                                        <!-- <td>doc</td>
                                                                        <td>1</td> -->
                                                                        <!-- <td>
                                                                            <div class="d-flex">
                                                                                <a href="#" class="btn btn-success shadow btn-xs sharp mr-1"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                                                <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                                            </div>												
                                                                        </td>			 -->
                                                                      <!-- </tr> -->
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
    

        
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->
	
	<!--removeIf(production)-->
        
    <!--**********************************
        Scripts
    ***********************************-->
    
<?php include 'footer.html'; ?>    
<script>
	$(document).ready(function() {

   
// inspired by http://jsfiddle.net/arunpjohny/564Lxosz/1/
$('.table-responsive-stack').each(function (i) {
   var id = $(this).attr('id');
   //alert(id);
   $(this).find("th").each(function(i) {
      $('#'+id + ' td:nth-child(' + (i + 1) + ')').prepend('<span class="table-responsive-stack-thead">'+             $(this).text() + ':</span> ');
      $('.table-responsive-stack-thead').hide();
      
   });
   

   
});





$( '.table-responsive-stack' ).each(function() {
var thCount = $(this).find("th").length; 
var rowGrow = 100 / thCount + '%';
//console.log(rowGrow);
$(this).find("th, td").css('flex-basis', rowGrow);   
});




function flexTable(){
if ($(window).width() < 768) {
   
$(".table-responsive-stack").each(function (i) {
   $(this).find(".table-responsive-stack-thead").show();
   $(this).find('thead').hide();
});
   
 
// window is less than 768px   
} else {
   
   
$(".table-responsive-stack").each(function (i) {
   $(this).find(".table-responsive-stack-thead").hide();
   $(this).find('thead').show();
});
   
   

}
// flextable   
}      

flexTable();

window.onresize = function(event) {
 flexTable();
};






// document ready  
});




</script>


	
		
</body>



</html>
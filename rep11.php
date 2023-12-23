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
						<li class="breadcrumb-item"><a href="javascript:void(0)">Application</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Reports</a></li>
					</ol>
                </div>
                <!-- row -->
              
                <div class="row">
      
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="profile-tab">
                                    <div class="custom-tab-1">
                                        <ul class="nav nav-tabs">
                                            <li class="nav-item"><a href="./rep11.php" class="nav-link active show ">All Request</a>
                                            </li>
                                          <!--
                                          
                                            <li class="nav-item"><a href="./rep12.php"      class="nav-link ">Close Request</a>
                                            </li>
                                            <li class="nav-item"><a href="./rep13.php" aria-expanded="false" class="nav-link">On Hold Request</a>
                                            </li> -->
                                            
                                            
                                            
											<li class="nav-item"><a href="./rep14.php" aria-expanded="false" class="nav-link">Active Request</a>
                                            </li>
											<li class="nav-item"><a href="./rep15.php" aria-expanded="false" class="nav-link">Inactive Request</a>
                                            </li>
											
                                        </ul>
                                        
											<!-- -------my post------ -->
                                       
                                               
                                                    
														<div class="col-xl-12">
														
                                                         
                                                                <table class="table table-bordered table-striped table-responsive-stack" id="tableOne" style="margin-top: 40px;">
                                                                   <thead class="thead-dark">
                                                                      <tr>
                                                                         <th>Company Name</th>
                                                                         <th>Title</th>
                                                                         <th>Open Position</th>
                                                                         <th>Location</th>
                                                                         <th>Post Date</th>
                                                                        
                                                                      </tr>
                                                                   </thead>
                                                                   <tbody>
                                                                       
                                                                    <?php
                                                                    
                                                                    
                                                                   // echo '------123---'.$_SESSION['email'];
                                                                    
                                                                    $queryi="Select admin_id,admin_company_name from admin where admin_email='".$_SESSION['email']."'";
                                                                    $resulti=mysqli_query($conn,$queryi);
                                                                    $arrayi=mysqli_fetch_array($resulti);
                                                                    $adminid = $arrayi[0];
                                                                    $adminCompanyName = $arrayi[1];
                                                                    
                                                                    
                                                                   $query="SELECT * FROM job_details WHERE admin_id='".$adminid."' ORDER BY job_post_date desc"; 
                                                                    $result=mysqli_query($conn,$query);
                                                                    if ($result->num_rows > 0){
                                                                        
                                                                        while($array=mysqli_fetch_assoc($result)){ 
                                                                   
                                                                    ?>
                                                                       
                                                                       
                                                                       
                                                                       
                                                                      <tr>
                                                                          
                                                                         <td> <?php echo $adminCompanyName; ?></td>
                                                                         <td><?php echo $array['job_title']; ?></td>
																		 <td><?php echo $array['job_opening']; ?></td>
                                                                         <td><?php echo $array['job_location']; ?></td>
                                                                         <td><?php echo $array['job_post_date']; ?></td>
                                                                      </tr>
                                                                     
                                                                   <?php }  } ?>
                                                                   
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
	
<?php  include 'footer.html'; ?>	
        
   
    
<script>
	$(document).ready(function() {

   

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